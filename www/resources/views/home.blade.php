@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        @foreach ($threads as $thread)
            <div class="card my-3">
                <div class="card-header">
                     <h2>{{$thread->title}}</h2>
                </div>
                <div class="card-body">{!!$thread->content!!}
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <small>Dibuat oleh : {{$thread->user->username}}</small>
                    @if (Auth::id() == $thread->user->id)
                        <a href="/thread/{{$thread->id}}/edit" class="btn btn-primary btn-sm ml-auto">Sunting</a>
                        @endif
                    </div>
                    @auth
                    {{-- vote --}}
                    <div class="d-flex justify-content-center">
                        <a href="/upvote/{{$thread->id}}/thread" class="btn btn-sm btn-primary mr-2 @if ($thread->is_upvote_thread($thread->id)) disabled @endif">Upvote</a>
                        <button class="btn btn-danger btn-sm mr-2">
                            Vote <span class="badge badge-light">{{$thread->vote_count($thread->id)}}</span>
                          </button>
                        <a href="/downvote/{{$thread->id}}/thread" class="btn btn-sm btn-primary @if ($thread->is_downvote_thread($thread->id)) disabled @endif" >Downvote</a>
                    </div>
                    {{-- /vote --}}
                    @endauth
                </div>
            </div>
        @endforeach
@endsection