<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'article_id' => 'required',
            'content' => 'required'
        ]);

        $comment = new Comment;
        $comment->article_id = $request->article_id;
        $comment->content = $request->content;
        $comment->user_id = Auth::id();
        $comment->save();

        return back();
    }

    public function delete($id)
    {
        $comment = Comment::find($id);
        if (Gate::allows('delete-comment', $comment)) {
            $comment->delete();
            return back();
        }
        return back()->with('info', 'Unauthorize to Delete');
    }
}
