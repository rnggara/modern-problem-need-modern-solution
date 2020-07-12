<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request){
        $comment = new Comment();
        $comment->content = $request['content'];
        $comment->id_user = Auth::id();
        $comment->id_answer = null;
        if (isset($request['id_answer'])){
            $comment->id_answer = $request['id_answer'];
        }
        $comment->id_thread = $request['id_thread'];
        $comment->save();
        return redirect('/thread/post/'.$request['id_thread']);
    }

    public function show($id)
    {
        $comment = Comment::where('id', $id)->first();
        return view('/thread/comment_edit', [
            'comment' => $comment
        ]);
    }

    public function update(Request $request)
    {
        $id = $request['id_comment'];
        $comment = Comment::find($id);
        // update thread
        $comment->content = $request['content'];
        $comment->save();
        return redirect('/thread/post/'.$comment->id_thread);
    }

    public function destroy(Request $request)
    {
        $id = $request['id_comment'];
        $comment = Comment::find($id);
        Comment::destroy($request['id_comment']);
        return redirect('/thread/post/'.$comment->id_thread);
    }
}
