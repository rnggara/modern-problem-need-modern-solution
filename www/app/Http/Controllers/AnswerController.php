<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request){
        $answer = new Answer();
        $answer->content = $request['content'];
        $answer->id_user = $request['id_user'];
        $answer->id_thread = $request['id_thread'];
        $answer->pinned = 0;
        $answer->save();
        return redirect('/thread/post/'.$request['id_thread']);
    }
}
