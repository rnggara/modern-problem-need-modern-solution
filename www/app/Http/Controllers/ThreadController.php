<?php

namespace App\Http\Controllers;

use App\Thread;
use App\User;
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
        return view('items.forumhome', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Auth::guest()) {
            return view('items.tanyaforum');
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
        $thread = new Thread;

        $thread->title = $request->title;
        $thread->content = $request->content;
        $thread->slug = strtolower(str_replace(" ","-", $request->title));
        $thread->tags = $request->tags;
        $thread->id_user = Auth::id();

        $thread->save();

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
        $thread = Thread::findById($id);
        $user = User::getById($thread[0]->id);
        return view('items.isiforum', [
            'thread' => $thread,
            'user' => $user
        ]);
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

        $thread->title = $request->title;
        $thread->content = $request->content;
        $thread->slug = strtolower(str_replace(" ","-", $request->slug));
        $thread->tags = $request->tags;

        $thread->save();

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
