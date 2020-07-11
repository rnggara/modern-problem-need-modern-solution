@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        @foreach ($threads as $thread)
            <div class="card my-3">
                <div class="card-header">
                     <h2>{{$thread->title}}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <div class="d-flex flex-column justify-content-center">
                                @auth
                                {{-- vote --}}
                                    <a href="/upvote/{{$thread->id}}/thread" class="text-center" @if ($thread->is_upvote_thread($thread->id)) disabled @endif><i class="fa fa-angle-up" style="font-size:3em"></i></a>
                                    
                                    <p class="text-center" style="margin:0">{{$thread->vote_count($thread->id)}}<br>Vote</p>
                                        
                                    <a href="/upvote/{{$thread->id}}/thread" class="text-center" @if ($thread->is_upvote_thread($thread->id)) disabled @endif><i class="fa fa-angle-down" style="font-size:3em"></i></a>
                                    
                                {{-- /vote --}}
                                @endauth
                            </div>
                        </div>
                        <div class="col">
                            {!!$thread->content!!}
                        </div>
                    </div>               
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <small>Dibuat oleh : {{$thread->user->username}}</small>
                    @if (Auth::id() == $thread->user->id)
                        <a href="/thread/{{$thread->id}}/edit" class="btn btn-primary btn-sm ml-auto">Sunting</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
@endsection