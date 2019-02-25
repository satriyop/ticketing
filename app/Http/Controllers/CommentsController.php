<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Http\Requests\CommentFormRequest;


class CommentsController extends Controller
{
    public function newComment(CommentFormRequest $request) {
        $comment = new Comment(array(
            'post_id' => $request->get('post_id'),
            'user_id' => $request->get('user_id'),
            'content' => $request->get('content'),
        ));

        $comment->save();

        return redirect()->back()->with('status', 'Your comments has been created');
    }
}
