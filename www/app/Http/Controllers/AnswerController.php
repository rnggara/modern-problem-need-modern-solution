<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function store(Request $request){
        $answer = new Answer();
        $answer->content = $request['content'];
        $answer->id_user = Auth::id();
        $answer->id_thread = $request['id_thread'];
        $answer->pinned = 0;
        $answer->save();
        return redirect('/thread/post/'.$request['id_thread']);
    }

    public function show($id)
    {
        $answer = Answer::where('id', $id)->first();
        return view('/thread/answer_edit', [
            'answer' => $answer
            ]);
    }

    public function update(Request $request)
    {
        $id = $request['id_answer'];
        $answer = Answer::find($id);
        // update thread
        $answer->content = $request['content'];
        $answer->save();
        return redirect('/thread/post/'.$answer->id_thread);
    }

    public function destroy(Request $request)
    {
        $id = $request['id_answer'];
        $answer = Answer::find($id);
        Answer::destroy($request['id_answer']);
        return redirect('/thread/post/'.$answer->id_thread);
    }
}
