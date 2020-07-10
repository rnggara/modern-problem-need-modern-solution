<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Answer
{
    public static function save($data)
    {
        return DB::table('answers')->insert($data);
    }
}
