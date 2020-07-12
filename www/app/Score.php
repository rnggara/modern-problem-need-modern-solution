<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    public static function getPoint($id_user)
    {
        $point = 0;
        $threads = Thread::where('id_user', $id_user)->get();
        $answers = Answer::where('id_user', $id_user)->get();
        foreach ($threads as $thread){
            $votesUpThread = Vote::where('id_thread', $thread->id)->where('vote', 1)->get();
            $countUp = count($votesUpThread);
            $votesDownThread = Vote::where('id_thread', $thread->id)->where('vote', -1)->get();
            $countDown= count($votesDownThread);
            $sum = ($countUp * 10) - ($countDown * 1);
            $point += $sum;
        }

        foreach ($answers as $answer){
            $votesUpThread = Vote::where('id_answer', $answer->id)->where('vote', 1)->get();
            $countUp = count($votesUpThread);
            $votesDownThread = Vote::where('id_answer', $answer->id)->where('vote', -1)->get();
            $countDown= count($votesDownThread);
            $sum = ($countUp * 10) - ($countDown * 1);
            $point += $sum;
        }

        $pinned = Answer::where('id_user', $id_user)->where('pinned', 1)->get();
        $sumPin = count($pinned) * 15;
        $point += $sumPin;

        return $point;
    }
}
