<!DOCTYPE html>
@extends('templateforum.master')
@section ('title')
<title>Sample Isi Forum - Tanya Kami</title>
@section('content')
<div class="container">
  @include ('templateforum.partials.leftsidebar')


          <div id="content" class="snippet-hidden">


  <div itemscope>
      <link itemprop="image" href="../../../cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon452c.png?v=c78bd457575a">

      <div class="inner-content clearfix">



              <div id="question-header" class="grid sm:fd-column" >
                          <h1 itemprop="name" class="grid--cell fs-headline1 fl1 ow-break-word mb8"><a href="installing-audiokit-core-with-carthage.html" class="question-hyperlink" style="font-family:'Nunito', sans-serif; font-weight: 600; ">{{$thread[0]->title}}</a></h1>

                  <div class="ml12 aside-cta grid--cell print:d-none sm:ml0 sm:mb12 sm:order-first sm:as-end">

      <a href="/tanyaforum" class="ws-nowrap s-btn s-btn__primary" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 12px 20px 12px 20px;">
          Ask Question
      </a>

                  </div>
              </div>
              <div class="grid fw-wrap pb8 mb16 bb bc-black-2" style="font-family:'Nunito', sans-serif;">
                      <div class="grid--cell ws-nowrap mr16 mb8" title="2020-07-08 15:01:54Z">
                          <span class="fc-light mr2">Asked</span>
                          <time itemprop="dateCreated" datetime="2020-07-08T15:01:54">{{date('d F Y', strtotime($thread[0]->created_at))}}</time>
                      </div>
              </div>
              <div id="mainbar" role="main" aria-label="question and answers">


  <div class="question" data-questionid="62797786"  id="question">
      <style>.everyoneloves__top-leaderboard:empty,.everyoneloves__mid-leaderboard:empty,.everyoneloves__bot-mid-leaderboard:empty{
              margin-bottom:0;
  }
  </style>
  <div id="dfp-tlb" class="everyonelovesstackoverflow everyoneloves__top-leaderboard mb8 mx-auto"></div>

      <div class="post-layout">
          <div class="votecell post-layout--left">
              <div class="js-voting-container grid fd-column ai-stretch gs4 fc-black-200" data-post-id="62797786">
          <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This question shows research effort; it is useful and clear" aria-pressed="false" aria-label="Up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
          <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="0">0</div>
          <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This question does not show any research effort; it is unclear or not useful" aria-pressed="false" aria-label="Down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>
  </div>

          </div>



  <div class="postcell post-layout--right">

      <div class="post-text" style="font-family:'Nunito', sans-serif;" itemprop="text">
          {!!$thread[0]->content!!}
      </div>

          <div class="post-taglist grid gs4 gsy fd-column">
              <div class="grid ps-relative d-block">
                  <?php
                      $tag = explode(",", $thread[0]->tags);
                      foreach ($tag as $cat){ ?>
                      <a class="post-tag">{{$cat}}</a>
                      <?php }
                  ?>
              </div>
          </div>

      <div class="mb0 ">
          <div class="mt16 grid gs8 gsy fw-wrap jc-end ai-start pt4">
              <div class="grid--cell mr16" style="flex: 1 1 100px;">


  <div class="post-menu">

  </div>

              </div>

              <div class="post-signature owner grid--cell" style="font-family:'Nunito', sans-serif;">
                  <div class="user-info ">
      <div class="user-action-time">
      </div>
      <div class="user-gravatar32">
          <a href="" class="btn btn__with-icon" style="color: #fff"><i class="fa fa-user"></i></a>
      </div>
      <div class="user-details">
          <a href="">{{$user[0]->username}}</a>
          <div class="-flair">
              <span class="reputation-score" title="reputation score " dir="ltr">108</span><span title="7 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">7</span></span><span class="v-visible-sr">7 bronze badges</span>
          </div>
      </div>
  </div>

              </div>
          </div>
      </div>

  </div>
      </div>
  </div>


  <div id="dfp-isb" class="everyonelovesstackoverflow everyoneloves__inline-sidebar mt24 mx-auto"></div>

                  <div id="answers" class="no-answers">
              <form id="post-form" action="/answer" method="post" class="js-add-answer-component post-form">
                  @csrf
                  <input type="hidden" name="id_thread" value="{{$thread[0]->id}}" />
                  <input type="hidden" name="id_user" value="{{Auth::user()->id}}" />
                  <h2 class="space" style="font-family:'Nunito', sans-serif; weight: 600;">
                      Your Answer
                  </h2>
  <div id="post-editor" class="post-editor js-post-editor">
      @guest
          <div class="ps-relative">
              <div class="wmd-container mb8">
                  <div class="js-stacks-validation">
                      <div class="ps-relative">
                          <a href="{{ route('login') }}" id="submit-button" class="grid--cell s-btn s-btn__primary s-btn__icon"tabindex="120" autocomplete="off" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 10px 20px;">
                              Login
                          </a>
                          <a href="{{ route('register') }}" id="submit-button" class="grid--cell s-btn s-btn__primary s-btn__icon"tabindex="120" autocomplete="off" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 10px 20px;">
                              Register
                          </a>
                      </div>
                      <div class="s-input-message mt4 d-none js-stacks-validation-message"></div>
                  </div>
              </div>
          </div>
      @else
      <div class="ps-relative">
          <div class="wmd-container mb8">
              <div class="js-stacks-validation">
                  <div class="ps-relative">
                      <textarea id="wmd-input"
                                name="content"
                                class="wmd-input s-input bar0 js-post-body-field"
                                data-post-type-id="2"
                                cols="92" rows="15"
                                tabindex="101"
                                data-min-length=""></textarea>
                  </div>
                  <div class="s-input-message mt4 d-none js-stacks-validation-message"></div>
              </div>
          </div>
          <div class="form-submit cbt grid gsx gs4">
              <button name="answer" id="submit-button" class="grid--cell s-btn s-btn__primary s-btn__icon" type="submit" tabindex="120" autocomplete="off" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 10px 20px;">
                  Jawab Sekarang
              </button>

          </div>
      </div>
      @endguest
  </div>
              </form>
                  </div>
              </div>
      </div>
          </div>


</div>
</div>

@section('scripts')
    <script>
        tinymce.init({
            selector:'textarea#wmd-input',
            statusbar:false,
            menubar:false,
            width: "100%",
            height: 300
        });
    </script>
@endsection
