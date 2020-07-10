@extends('templateforum.master')
@section ('title')
        <title>Semua Pertanyaan - Tanya Kami</title>
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
              <div class="fs-body3 grid--cell fl1 mr12 sm:mr0 sm:mb12" style="font-family:'Nunito', sans-serif;"></div>
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
                              <span class="vote-count-post "><strong>0</strong></span>
                              <div class="viewcount">votes</div>
                          </div>
                      </div>
                      <div class="status unanswered">
                          <strong>0</strong>jawaban
                      </div>
                  </div>
              </div>
              <div class="summary">
                  <h3><a href="/thread/post/{{$thread->id}}" class="question-hyperlink" style="font-family:'Nunito', sans-serif; font-weight: 600; color: black;">{{$thread->title}}</a></h3>
                  <div class="excerpt" style="font-family:'Nunito', sans-serif;">
                      {!!$thread->content!!}
                  </div>
                  <div class="tags t-ios t-swift t-audiokit t-carthage">
                      <?php
                        $tag = explode(",", $thread->tags);
                        foreach ($tag as $cat){ ?>
                            <a class="post-tag">{{$cat}}</a>
                        <?php }
                      ?>
                  </div>
                  <div class="started fr">
                      <div class="user-info ">
                          @if (Auth::id() == $thread->user->id)
                              <a href="/thread/{{$thread->id}}/edit" class="btn btn-primary btn-sm ml-auto" style="color: #fff">Sunting</a>
                          @endif
                          <div class="user-action-time" style="color: black;">
                              ditanyakan <span title="2020-07-08 15:01:54Z" class="relativetime">{{date('d F Y', strtotime($thread->created_at))}}</span>
                          </div>
                          <div class="user-gravatar32">
                              <a href="" class="btn btn__with-icon" style="color: #fff"><i class="fa fa-user"></i></a>
                          </div>
                          <div class="user-details">
                              <a href="users/2536476/andy.html">{{$thread->user->username}}</a>
                              <div class="-flair">
                                  <span class="reputation-score" title="reputation score " dir="ltr">108</span><span title="7 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">7</span></span><span class="v-visible-sr">7 bronze badges</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
      <br class="cbt" />
  </div>

<!-- Right side bar aka related tags and below !-->
@include ('templateforum.partials.rightsidebar')
</div>
</div>
