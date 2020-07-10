<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request){
        $data['content'] = $request['content'];
        $data['id_user'] = $request['id_user'];
        $data['pinned'] = 0;
        $data['id_thread'] = $request['id_thread'];
        $data['created_at'] = date('Y-m-d H:i:s');
        Answer::save($data);
        return redirect('/thread/post/'.$request['id_thread']);
    }
}
