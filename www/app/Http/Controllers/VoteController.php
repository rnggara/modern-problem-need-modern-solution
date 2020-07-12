<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Vote;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function upvote(Thread $thread)
    {
        $vote = Vote::where('id_thread', $thread->id)
                    ->firstWhere('id_user', Auth::id());

        if ($vote) {
            $vote->vote = 1;
            $vote->save();
            return redirect('/thread/post/'.$thread->id);
        } else {
            Vote::create([
                'id_user' => Auth::id(),
                'id_thread' => $thread->id,
                'vote' => 1
            ]);
            return redirect('/thread/post/'.$thread->id);
        }

    }

    public function downvote(Thread $thread)
    {
        $vote = Vote::where('id_thread', $thread->id)
                    ->firstWhere('id_user', Auth::id());

        if ($vote) {
            $vote->vote = -1;
            $vote->save();
            return redirect('/thread/post/'.$thread->id);
        } else {
            Vote::create([
                'id_user' => Auth::id(),
                'id_thread' => $thread->id,
                'vote' => -1
            ]);
            return redirect('/thread/post/'.$thread->id);
        }
    }

    public function upvote_answer(Answer $answer)
    {
        $vote = Vote::where('id_answer', $answer->id)
            ->firstWhere('id_user', Auth::id());

        if ($vote) {
            $vote->vote = 1;
            $vote->save();
            return redirect('/thread/post/'.$answer->id_thread);
        } else {
            Vote::create([
                'id_user' => Auth::id(),
                'id_answer' => $answer->id,
                'vote' => 1
            ]);
            return redirect('/thread/post/'.$answer->id_thread);
        }
    }

    public function downvote_answer(Answer $answer)
    {
        $vote = Vote::where('id_answer', $answer->id)
            ->firstWhere('id_user', Auth::id());

        if ($vote) {
            $vote->vote = -1;
            $vote->save();
            return redirect('/thread/post/'.$answer->id_thread);
        } else {
            Vote::create([
                'id_user' => Auth::id(),
                'id_answer' => $answer->id,
                'vote' => -1
            ]);
            return redirect('/thread/post/'.$answer->id_thread);
        }

    }
}
