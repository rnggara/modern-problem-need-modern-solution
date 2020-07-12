@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card my-3">
                <div class="card-header">
                    <h2><a href="/thread/post/{{$thread->id}}">{{$thread->title}}</a></h2>
                    <small>Dibuat oleh : {{$thread->user->username}}, [{{$point[$thread->user->id]}}]
                    <br>
                        Pada : {{date('d F Y H:i:s', strtotime($thread->created_at))}}
                        <br>
                        Tags:
                        @foreach ($thread->tags as $tag)
                            <a href="/tag/{{$tag->id}}" class="badge badge-secondary">{{$tag->name}}</a>
                        @endforeach
                    </small>
                </div>
                <div class="card-body">
                    <div class="row" style="border-bottom: 1px solid rgb(212, 212, 212)">
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
                    <div class="row mt-2">
                            @foreach($commentThread as $comment)
                            <div class="col-10 mx-auto" style="border-bottom: 1px solid rgb(212, 212, 212)">
                                <p>{{strip_tags($comment->content)}} –
                                    @foreach($users as $catUser)
                                        @if($catUser->id == $comment->id_user)
                                            {{$catUser->name}}
                                        @endif
                                    @endforeach <label class="text-muted">{{date('d F Y H:i:s', strtotime($comment->created_at))}}</label>
                                    @if($comment->id_user == Auth::id())
                                        <a href="/comment/{{$comment->id}}/edit" class="btn btn-sm btn-secondary text-white"><i class="fa fa-pencil"></i></a>
                                    @endif
                                </p>
                            </div>
                            @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex">
                        <input type="hidden" id="id-thread" value="{{$thread->id}}">
                        <button type="button" class="btn btn-sm ml-2 btn-secondary" id="btnComment" onclick="openComment(this, '#btnAnswer')" value="{{$thread->id}}"><i class="fa fa-comment"></i></button>
                        <button type="button" class="btn btn-sm ml-2 btn-secondary" id="btnAnswer" onclick="openAnswer(this, '#btnComment')" value="{{$thread->id}}"><i class="fa fa-reply"></i></button>
                        @if (Auth::id() == $thread->user->id)
                            <a href="/thread/{{$thread->id}}/edit" class="btn btn-primary btn-sm ml-auto">Sunting</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Answers -->
        @foreach($answers as $answer)
        <div class="col-md-10">
            <form method="post" action="/comment">
                @csrf
            <div class="card my-3">
                <div class="card-header">
                    <div class="row">
                        @if($answer->pinned == 1)
                            <div class="col-1">
                                <i class="fa fa-check text-success" style="font-size:3em"></i>
                            </div>
                        @endif
                        <div class="col">
                        @foreach($users as $catUser)
                            @if($catUser->id == $answer->id_user)
                                <small>Dibuat oleh : {{$catUser->username}}
                                    <br>
                                    Pada : {{date('d F Y H:i:s', strtotime($answer->created_at))}}
                                </small>
                            @endif
                        @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-body">
                        <div class="row" style="border-bottom: 1px solid rgb(212, 212, 212)">
                            <div class="col-1">
                                <div class="d-flex flex-column justify-content-center">
                                    @auth
                                        @if ($answer->is_upvote_answer($answer->id))@else
                                            <a  href="/upvote/{{$answer->id}}/answer" class="text-center"><i class="fa fa-angle-up" style="font-size:3em"></i></a>
                                        @endif
                                    @endauth
                                    <p class="text-center" style="margin:0">{{$answer->vote_count($answer->id)}}<br>Vote</p>
                                    @auth
                                        @if ($answer->is_downvote_answer($answer->id)) @else
                                            <a href="/downvote/{{$answer->id}}/answer" class="text-center" ><i class="fa fa-angle-down" style="font-size:3em"></i></a>
                                        @endif
                                    @endauth
                                </div>
                            </div>
                            <div class="col" style="border-left: 1px solid rgb(212, 212, 212)">
                                {!!$answer->content!!}
                            </div>
                        </div>
                    <div class="row mt-2">
                        @foreach($commentAnswer as $comment)
                            @if($comment->id_answer == $answer->id)
                                <div class="col-10 mx-auto" style="border-bottom: 1px solid rgb(212, 212, 212)">
                                    <p>{{strip_tags($comment->content)}} –
                                        @foreach($users as $catUser)
                                            @if($catUser->id == $comment->id_user)
                                                {{$catUser->name}}
                                            @endif
                                        @endforeach <label class="text-muted">{{date('d F Y H:i:s', strtotime($comment->created_at))}}</label>
                                        @if($comment->id_user == Auth::id())
                                            <a href="/comment/{{$comment->id}}/edit" class="btn btn-sm btn-secondary text-white"><i class="fa fa-pencil"></i></a>
                                        @endif
                                    </p>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex">
                            <input type="hidden" id="id-thread" value="{{$thread->id}}">
                            <button type="button" class="btn btn-sm ml-2 btn-secondary" onclick="openCommentAnswer(this, '#comment-div-{{$answer->id}}')" value="{{$thread->id}}"><i class="fa fa-comment"></i></button>
                            @if(Auth::id() == $thread->user->id)
                                @if($answer->pinned == 1)
                                    <a href="/answer/{{$answer->id}}/unpinned" class="btn btn-danger btn-sm ml-2"><i class="fa fa-bookmark"></i></a>
                                @else
                                    <a href="/answer/{{$answer->id}}/pinned" class="btn btn-success btn-sm ml-2"><i class="fa fa-bookmark"></i></a>
                                @endif
                            @endif
                            @if (Auth::id() == $answer->id_user)
                                <a href="/answer/{{$answer->id}}/edit" class="btn btn-primary btn-sm ml-auto">Sunting</a>
                            @endif
                        </div>
                    </div>
                    <div id="comment-div-{{$answer->id}}" class="comment-group">
                        @auth
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h2>Tulis Komentar Anda</h2>
                                        <br>
                                        <textarea class="content form-control" name="content"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex">
                                    <input type="hidden" name="id_thread" value="{{$thread->id}}">
                                    <input type="hidden" name="id_answer" value="{{$answer->id}}">
                                    <button type="submit" class="btn btn-primary btn-sm ml-auto">Komentar</button>
                                </div>
                            </div>
                        @else
                            <div class="card-body">
                                <div class="row">
                                    <div class="col justify-content-center">
                                        <center>
                                            <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Login') }}</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </form>
        </div>
        @endforeach

        <!-- Comment -->
        <div class="col-md-10" id="comment">
            <div class="card my-3">
                @auth
                    <div class="card-header">
                        <h2>Tulis Komentar anda</h2>
                    </div>
                    <form method="post" action="/comment">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <textarea name="content" class="form-control content"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <input type="hidden" id="id-thread" name="id_thread" value="{{$thread->id}}">
                                <button type="submit" class="btn btn-primary btn-sm ml-auto">Komentar</button>
                            </div>
                        </div>
                    </form>
                @else
                    <div class="card-header">
                        <h2>Mohon Login atau Register terlebih dahulu</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col justify-content-center">
                                <center>
                                    <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Login') }}</a>
                                </center>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
        <!-- Answer -->
        <div class="col-md-10" id="answer">
            <div class="card my-3">
                @auth
                    <div class="card-header">
                        <h2>Tulis Jawaban anda</h2>
                    </div>
                    <form method="post" action="/answer">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <textarea name="content" class="form-control content"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex">
                                <input type="hidden" id="id-thread" name="id_thread" value="{{$thread->id}}">
                                <button type="submit" class="btn btn-primary btn-sm ml-auto">Jawab</button>
                            </div>
                        </div>
                    </form>
                @else
                    <div class="card-header">
                        <h2>Mohon Login atau Register terlebih dahulu</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col justify-content-center">
                                <center>
                                    <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Login') }}</a>
                                </center>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
@endsection

@push('scripts')
                <script type="text/javascript">
                    function openCommentAnswer(button, comment) {
                        // $(".comment-group").css('display', 'none');
                        $(comment).toggle();
                        if ($(comment).is(":visible")){
                            $('body, html').animate({
                                scrollTop: $(comment).offset().top
                            }, 600);
                            $(button).removeClass('btn-secondary').addClass('btn-primary');
                        } else {
                            $('body, html').animate({
                                scrollTop: $(button).offset().top
                            }, 600);
                            $(button).removeClass('btn-primary').addClass('btn-secondary');
                        }
                    }

                    function openAnswer(button, next){
                        $("#answer").toggle();
                        if(!$("#comment").is(":visible")){
                            $("#comment").css('display', 'none');
                            $(next).removeClass('btn-primary').addClass('btn-secondary');
                        } else {
                            $("#comment").css('display', 'none');
                            $(next).removeClass('btn-primary').addClass('btn-secondary');
                        }
                        if ($("#answer").is(":visible")){
                            $(button).removeClass('btn-secondary').addClass('btn-primary');
                        } else {
                            $(button).removeClass('btn-primary').addClass('btn-secondary');
                        }
                        $('body, html').animate({
                            scrollTop: $("#answer").offset().top
                        }, 600);
                    }

                    function openComment(button, next) {
                        $("#comment").toggle();
                        if(!$("#answer").is(":visible")){
                            $("#answer").css('display', 'none');
                            $(next).removeClass('btn-primary').addClass('btn-secondary');
                        } else {
                            $("#answer").css('display', 'none');
                            $(next).removeClass('btn-primary').addClass('btn-secondary');
                        }
                        if ($("#comment").is(":visible")){
                            $(button).removeClass('btn-secondary').addClass('btn-primary');
                        } else {
                            $(button).removeClass('btn-primary').addClass('btn-secondary');
                        }
                        $('body, html').animate({
                            scrollTop: $("#comment").offset().top
                        }, 600);
                    }
                    $(document).ready(function(){
                        $("#answer").css('display', 'none');
                        $("#comment").css('display', 'none');
                        $(".comment-group").css('display', 'none');
                    });

                    tinymce.init({
                        selector:'textarea.content',
                        statusbar:false,
                        menubar:false,
                        width: "100%",
                        height: 300
                    });
                </script>
@endpush
