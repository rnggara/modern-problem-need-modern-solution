@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-10">
        <h2>Tag: {{$tag->name}}</h3>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-10">
        @foreach ($threads as $thread)
            <div class="card my-3">
                <div class="card-header">
                     <h2>{{$thread->title}}</h2>
                    @foreach ($thread->tags as $tag)
                    <a href="/tag/{{$tag->id}}" class="badge badge-dark">{{$tag->name}}</a>
                    @endforeach
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-1">
                            <div class="d-flex flex-column justify-content-center">
                                @auth
                                {{-- vote --}}
                                @if ($thread->is_upvote_thread($thread->id))@else 
                                <a  href="/upvote/{{$thread->id}}/thread" class="text-center"><i class="fa fa-angle-up" style="font-size:3em"></i></a>
                                @endif
                                @endauth
                                <p class="text-center" style="margin:0">{{$thread->vote_count($thread->id)}}<br>Vote</p>
                                @auth
                                @if ($thread->is_downvote_thread($thread->id)) @else 
                                <a href="/downvote/{{$thread->id}}/thread" class="text-center" ><i class="fa fa-angle-down" style="font-size:3em"></i></a>
                                @endif
                                {{-- /vote --}}
                                @endauth
                            </div>
                        </div>
                        <div class="col" style="border-left: 1px solid rgb(212, 212, 212)">
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