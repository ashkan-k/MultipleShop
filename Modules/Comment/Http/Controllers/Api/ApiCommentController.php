<?php

namespace Modules\Comment\Http\Controllers\Api;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Comment\Entities\Comment;
use Modules\Comment\Http\Requests\CommentRequest;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class ApiCommentController extends Controller
{
    use Responses;

    public function get_submit_points(Comment $comment, $type)
    {
        $data = $comment->comment_posints()->where('')->count();

        return $this->SuccessResponse($data);
    }

    public function submit_point(Comment $comment, Request $request)
    {
        auth()->user()->comment_posints()->where('comment_id', $comment->id)->delete();
        auth()->user()->comment_posints()->create([
            'comment_id' => $comment->id,
            'type' => $request->type,
        ]);

        return $this->SuccessResponse('کاربر گرامی نظر شما با موفقیت ثبت شد.');
    }

    public function submit_answer(CommentRequest $request, Comment $comment, $item_type)
    {
        $data = $request->validated();
        $data['parent_id'] = $comment->id;
        $data['parent_id'] = $item_type;

        auth()->user()->comments()->create($data);

        $comment->children()->create([
            'title'
        ]);
    }
}
