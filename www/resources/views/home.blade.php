@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        @foreach ($threads as $thread)
            <div class="card my-3">
                <div class="card-header">
                    <h2><a href="/thread/post/{{$thread->id}}">{{$thread->title}}</a></h2>
                    @foreach ($thread->tags as $tag)
                    <a href="/tag/{{$tag->id}}" class="badge badge-secondary">{{$tag->name}}</a>
                    @endforeach
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            {!!$thread->content!!}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <small>Dibuat oleh : {{$thread->user->username}} [{{$point[$thread->user->id]}}]</small>
                    @if (Auth::id() == $thread->user->id)
                        <a href="/thread/{{$thread->id}}/edit" class="btn btn-primary btn-sm ml-auto">Sunting</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
@endsection
