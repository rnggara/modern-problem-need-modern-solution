<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Answer extends Model
{

    public function is_upvote_answer($id_answer)
    {
        $vote = Vote::where('id_answer', $id_answer)
            ->firstWhere('id_user', Auth::id());
        if (isset($vote)) {
            if ($vote->vote == 1) {
                return true;
            };
        };
        return false;

    }

    public function is_downvote_answer($id_answer)
    {
        $vote = Vote::where('id_answer', $id_answer)
            ->firstWhere('id_user', Auth::id());

        if (isset($vote)) {
            if ($vote->vote == -1) {
                return true;
            };
        };
        return false;
    }

    public function vote_count($id_answer)
    {
        $votes = Vote::where('id_answer', $id_answer)
            ->sum('vote');
        return $votes;
    }
}
