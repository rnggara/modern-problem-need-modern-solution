<?php

namespace App\Http\Controllers;

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
            $vote->vote +=1;
            $vote->save();
            return redirect('/thread');
        } else {
            Vote::create([
                'id_user' => Auth::id(),
                'id_thread' => $thread->id,
                'vote' => 1
            ]);
            return redirect('/thread');
        }
        
    }

    public function downvote(Thread $thread)
    {
        $vote = Vote::where('id_thread', $thread->id)
                    ->firstWhere('id_user', Auth::id());
        
        if ($vote) {
            $vote->vote -= 1;
            $vote->save();
            return redirect('/thread');
        } else {
            Vote::create([
                'id_user' => Auth::id(),
                'id_thread' => $thread->id,
                'vote' => -1
            ]);
            return redirect('/thread');
        }
        
    }
}
