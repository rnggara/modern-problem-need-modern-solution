<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Score;
use App\Tag;
use App\Thread;
use App\User;
use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::orderBy('updated_at', 'desc')->get();
        // system point
        $users = User::all();
        foreach ($users as $user) {
            $point[$user->id] = Score::getPoint($user->id);
        }
        // end system point
        return view('home', [
            'threads' => $threads,
            'point' => $point
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::guest()) {
            return view('thread.create');
        }else{
            return redirect('/login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // save newly created thread data
        $thread = new Thread;

        $thread->title = $request['title'];
        $thread->content = $request['content'];
        $thread->slug = strtolower(str_replace(" ","-", $request['title']));
//        $thread->tags = $request['tags'];
        $thread->id_user = Auth::id();
        $thread->save();

        // save thread tags
        $tags = explode(',', $request->tags);
        $tagIds = [];
        foreach ($tags as $tagName) {
            $tagName = trim($tagName);
            if ($tagName != "") {
                $tag = Tag::firstOrCreate(['name'=>$tagName]);
                if ($tag) {
                    $tagIds[] = $tag->id;
                }
            }
        }

        $thread->tags()->sync($tagIds);

        return redirect('/thread');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thread = Thread::where('id', $id)->first();
        $user = User::where('id', $thread->id)->first();
        $answers = Answer::where('id_thread', $thread->id)
            ->orderBy('created_at', 'DESC')
            ->orderBy('pinned', 'DESC')
            ->get();
        // system point
        $users = User::all();
        foreach ($users as $user) {
            $point[$user->id] = Score::getPoint($user->id);
        }
        // end system point

        $commentThread = Comment::whereNull('id_answer')
            ->where('id_thread', $thread->id)
            ->orderBy('created_at', 'DESC')
            ->limit(7)
            ->get();
        $commentAnswer = Comment::all();
        $users = User::all();
        $countAnswer = count($answers);
        return view('thread.show', [
            'thread' => $thread,
            'user' => $user,
            'answers' => $answers,
            'countAnswer' => $countAnswer,
            'users' => $users,
            'commentThread' => $commentThread,
            'commentAnswer' => $commentAnswer,
            'point' => $point
        ]);
    }

    public function pinned($id)
    {
        $answer = Answer::find($id);
        $answer->pinned = 1;
        $answer->save();

        return redirect('/thread/post/'.$answer->id_thread);
    }

    public function unpinned($id)
    {
        $answer = Answer::find($id);
        $answer->pinned = 0;
        $answer->save();

        return redirect('/thread/post/'.$answer->id_thread);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        return view('thread.edit', compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        $thread = Thread::find($thread->id);
        // update thread
        $thread->title = $request->title;
        $thread->content = $request['content'];
        $thread->slug = strtolower(str_replace(" ","-", $request->slug));
        $thread->save();

        // update tag
        $tags = explode(',', $request->tags);
        $tagIds = [];
        foreach ($tags as $tagName) {
            $tagName = trim($tagName);
            if ($tagName != "") {
                $tag = Tag::firstOrCreate(['name'=>$tagName]);
                if ($tag) {
                    $tagIds[] = $tag->id;
                }
            }
        }

        $thread->tags()->sync($tagIds);

        return redirect('/thread');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        Thread::destroy($thread->id);
        return redirect('/thread');
    }

}
