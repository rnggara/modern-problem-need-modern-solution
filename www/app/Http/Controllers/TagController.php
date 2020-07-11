<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        $threads = $tag->threads()->orderBy('updated_at')->get();
        return view('tag.home', compact('threads', 'tag'));
    }
}
