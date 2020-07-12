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
        
        if (isset($vote)){
            $vote->vote += 1;
            $vote->save();
                
        } else{
            $vote = new Vote;
            $vote->id_user = Auth::id();
            $vote->vote = 1;
            $vote->id_thread = $thread->id;
            $vote->save();
        }
        
        return redirect('/thread/post/'.$thread->id);

    }

    public function downvote(Thread $thread)
    {
        $vote = Vote::where('id_thread', $thread->id)
                    ->firstWhere('id_user', Auth::id());
          

            if (isset($vote)){
                $vote->vote -= 1;
                $vote->save();
                    
            } else{
                $vote = new Vote;
                $vote->id_user = Auth::id();
                $vote->vote = -1;
                $vote->id_thread = $thread->id;
                $vote->save();
            }

            return redirect('/thread/post/'.$thread->id);
        
    }

    // for upvoting on home page
    public function upvotehome(Thread $thread)
    {
        $vote = Vote::where('id_thread', $thread->id)
                    ->firstWhere('id_user', Auth::id());

        if (isset($vote)){
            $vote->vote +=1;
            $vote->save();
                
        } else{
            $vote = new Vote;
            $vote->id_user = Auth::id();
            $vote->vote = 1;
            $vote->id_thread = $thread->id;
            $vote->save();
        }

            return redirect('/');
        

    }

    // for downvoting on homepage
    public function downvotehome(Thread $thread)
    {
        $vote = Vote::where('id_thread', $thread->id)
                    ->firstWhere('id_user', Auth::id());

        if (isset($vote)){
                $vote->vote -= 1;
                $vote->save();
                    
            } else{
                $vote = new Vote;
                $vote->id_user = Auth::id();
                $vote->vote = -1;
                $vote->id_thread = $thread->id;
                $vote->save();
            }
            return redirect('/');
    }

    public function upvote_answer(Answer $answer)
    {
        $vote = Vote::where('id_answer', $answer->id)
            ->firstWhere('id_user', Auth::id());

            if (isset($vote)){
                $vote->vote += 1;
                $vote->save();
                    
            } else{
                $vote = new Vote;
                $vote->id_user = Auth::id();
                $vote->vote = 1;
                $vote->id_answer = $answer->id;
                $vote->save();
            }
        return redirect('/thread/post/'.$answer->id_thread);
        
    }

    public function downvote_answer(Answer $answer)
    {
        $vote = Vote::where('id_answer', $answer->id)
            ->firstWhere('id_user', Auth::id());

            if (isset($vote)){
                $vote->vote -= 1;
                $vote->save();
                    
            } else{
                $vote = new Vote;
                $vote->id_user = Auth::id();
                $vote->vote = -1;
                $vote->id_answer = $answer->id;
                $vote->save();
            }
            return redirect('/thread/post/'.$answer->id_thread);
        

    }
}
