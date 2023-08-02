<?php

namespace Modules\Comment\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\Comment\Entities\Comment;
use Modules\Email\Emails\SendEmailMail;
use Modules\Email\Helpers\email_helpers;
use Modules\Setting\Entities\Setting;
use Modules\User\Entities\User;

class CommentController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Comment::Search(request('search'))
            ->Filter(\request())
            ->with(['user', 'parent', 'commentable'])
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        $status_filters = [['pending', 'در انتظار'], ['approved', 'تایید شده'], ['reject', 'رد شده']];
        $filter_users = [];
        foreach (User::all() as $item) {
            $filter_users[] = [$item->id, $item->full_name()];
        }

        return view('comment::dashboard.list', compact('objects', 'filter_users', 'status_filters'));
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return $this->SuccessRedirect('آیتم مورد نظر با موفقیت حذف شد.', 'comments.index');
    }

    public function change_status(Comment $comment)
    {
        $comment->update(['status' => \request('status')]);

        if (in_array($comment->status, ['approved', 'reject'])) {
            $pattern = $comment->status == 'approved' ? 'user_comment_change_status_approved' : 'user_comment_change_status_rejected';
            $object_name = $comment->commentable_type == 'Modules\Blog\Entities\Blog' ? 'مقاله' : 'محصول';

            $message = [
                'تغییر وضعیت نظر',
                sprintf(email_helpers::$EMAIL_PATTERNS[$pattern], $object_name, $comment->commentable_type ? $comment->commentable->title : '---'),
            ];
            $title = __('Comment Status Changed');
            $template = 'email::emails/comment/comment_notification';

            try {
                Mail::to(strip_tags($comment->user->email))->send(new SendEmailMail($comment->user->email, $title, $message, $template));
            } catch (\Exception $exception) {
            }
        }

        return $this->SuccessResponse('وضعیت آیتم مورد نظر با موفقیت تغییر یافت.');
    }
}
