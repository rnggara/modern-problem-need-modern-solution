<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Thread extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public static function find($id)
    {
        return DB::table('threads')->where('id', $id)->get();
    }

}
