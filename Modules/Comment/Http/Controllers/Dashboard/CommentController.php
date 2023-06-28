<?php

namespace Modules\Comment\Http\Controllers\Dashboard;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Comment\Entities\Comment;

class CommentController extends Controller
{
    use Responses;

    public function index()
    {
        $objects = Comment::Search(request('search'))
            ->with(['user', 'commentable'])
            ->latest()
            ->paginate(\request('pagination', env('PAGINATION_NUMBER', 10)));

        return view('comment::dashboard.list', compact('objects'));
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
