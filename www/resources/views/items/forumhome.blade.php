@extends('templateforum.master')

@section ('title')
        <title>Semua Pertanyaan - Tanya Kami</title>
@endsection

@section('content')
<div class="container">
    @include ('templateforum.partials.leftsidebar')
    <div id="content" class="snippet-hidden">
      <div id="mainbar" role="main" aria-labelledby="h-all-questions">
      <div class="grid">
          <h1 class="grid--cell fl1 fs-headline1 mb24" style="font-family:'Nunito', sans-serif;">Semua Pertanyaan</h1>
          <div class="ml12 aside-cta grid--cell print:d-none">
              <a href="/tanyaforum" class="ws-nowrap s-btn s-btn__primary" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 12px 20px 12px 20px;">
                  Tanya Sekarang
              </a>
          </div>
      </div>
        <div data-controller="se-uql" data-se-uql-id="" data-se-uql-sanitize-tag-query="false">
            <div class="grid ai-center jc-space-between mb12 sm:fd-column sm:ai-stretch">
                <div class="fs-body3 grid--cell fl1 mr12 sm:mr0 sm:mb12" style="font-family:'Nunito', sans-serif;">
                </div>
            </div>
        </div>

  <!--This is the questions part (middle part) !-->
    <div id="questions" class=" flush-left">
        
        @foreach ($threads as $thread)
        <div class="question-summary" id="question-summary-62797786" style="font-family:'Nunito', sans-serif;">
            <div class="statscontainer">
                <div class="stats">
                    <div class="vote">
                        <div class="votes">
                            {{-- upvote --}}
                            @auth
                            <a class="viewcount" href="/upvote/{{$thread->id}}/thread" @if($thread->is_upvote_thread($thread->id)) style="pointer-events:none; color:grey; cursor: default;" @endif>
                                <svg aria-hidden="true" class="m0 svg-icon iconArrowUpLg"  width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"></path></svg>
                            </a>
                            @endauth
                            {{-- show vote number --}}
                            <span class="vote-count-post "><strong>{{$thread->vote_count($thread->id)}}</strong></span>
                            <div class="viewcount">votes</div>
                            {{-- downvote --}}
                            @auth
                            <a class="viewcount" href="/downvote/{{$thread->id}}/thread" @if($thread->is_downvote_thread($thread->id)) style="pointer-events:none; color:grey; cursor: default;" @endif>
                                <svg aria-hidden="true" class="m0 svg-icon iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"></path></svg>
                            </a>
                            @endauth
                        </div>
                      </div>
                      <div class="status unanswered">
                          <strong>0</strong>jawaban
                     </div>
                </div>
            </div>
            
            <div class="summary">
                <div class="d-flex">
                    <h2><a href="/thread/post/{{$thread->id}}" class="question-hyperlink" style="font-family:'Nunito', sans-serif; font-size:1.5em; font-weight: 800; color: black;">{{$thread->title}}</a></h2>
                    @if (Auth::id() == $thread->user->id)
                    <div class="ml-auto align-self-center">
                        <a href="/thread/{{$thread->id}}/edit" class="btn btn-sm btn-primary rounded">sunting</a>
                    </div>
                     @endif
                </div>
                <div class="excerpt" style="font-family:'Nunito', sans-serif;">
                    {!!$thread->content!!}
                </div>
                <div class="tags t-ios t-swift t-audiokit t-carthage">
                    <?php
                        $tag = explode(",", $thread->tags);
                        foreach ($tag as $cat)
                        {
                            echo "<a class=\"post-tag\">$cat</a>";;
                        }
                    ?>
                </div>
                <div class="started fr">
                    <div class="user-info ">
                        <div class="user-action-time" style="color: black;">Ditanyakan pada <span title="2020-07-08 15:01:54Z" class="relativetime">{{date('d F Y', strtotime($thread->created_at))}}</span>
                        </div>

                        {{-- commentout --}}
                        {{-- <div class="user-gravatar32">
                            <a href="" class="btn btn__with-icon" style="color: #fff"><i class="fa fa-user"></i></a>
                        </div> --}}
                        {{-- /commentout --}}

                        <div class="user-details">
                            <a href="users/2536476/andy.html">{{$thread->user->username}}</a>
                            <div class="-flair">
                                <span class="reputation-score" title="reputation score " dir="ltr">Reputasi : 108</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <br class="cbt"/>
</div>

<!-- Right side bar aka related tags and below !-->
@include ('templateforum.partials.rightsidebar')
</div>
</div>
