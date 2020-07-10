<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
=======
use Illuminate\Support\Facades\Auth;
use App\Vote;
>>>>>>> vote-feature

class Thread extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

<<<<<<< HEAD
    public static function find($id)
    {
        return DB::table('threads')->where('id', $id)->get();
    }

=======
    public function is_upvote_thread($id_thread)
    {
        $vote = Vote::where('id_thread', $id_thread)
                        ->firstWhere('id_user', Auth::id());
        if (isset($vote)) {
            if ($vote->vote == 1) {
                return true;
            };
        };
        return false;

    }

    public function is_downvote_thread($id_thread)
    {
        $vote = Vote::where('id_thread', $id_thread)
                        ->firstWhere('id_user', Auth::id());

        if (isset($vote)) {
            if ($vote->vote == -1) {
                return true;
            };
        };
        return false;        
    }

    public function vote_count($id_thread)
    {
        $votes = Vote::where('id_thread', $id_thread)
                        ->sum('vote');
        return $votes;
    }
>>>>>>> vote-feature
}
