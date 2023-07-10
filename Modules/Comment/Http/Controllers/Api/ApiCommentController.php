<?php

namespace Modules\Comment\Http\Controllers\Api;

use App\Http\Traits\Responses;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Comment\Entities\Comment;
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
}
