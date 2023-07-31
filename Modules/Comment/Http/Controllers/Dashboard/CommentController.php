<?php

namespace Modules\Comment\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Comment\Entities\Comment;
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
        foreach (User::all() as $item){
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
        return $this->SuccessResponse('وضعیت آیتم مورد نظر با موفقیت تغییر یافت.');
    }
}
