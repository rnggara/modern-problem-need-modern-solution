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
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
