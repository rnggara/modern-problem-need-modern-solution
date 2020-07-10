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
                          <h1 itemprop="name" class="grid--cell fs-headline1 fl1 ow-break-word mb8"><a href="installing-audiokit-core-with-carthage.html" class="question-hyperlink" style="font-family:'Nunito', sans-serif; font-weight: 600; ">Installing AudioKit Core with Carthage</a></h1>

                  <div class="ml12 aside-cta grid--cell print:d-none sm:ml0 sm:mb12 sm:order-first sm:as-end">

      <a href="../../users/login6117.html" class="ws-nowrap s-btn s-btn__primary" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 12px 20px 12px 20px;">
          Ask Question
      </a>

                  </div>
              </div>
              <div class="grid fw-wrap pb8 mb16 bb bc-black-2" style="font-family:'Nunito', sans-serif;">
                      <div class="grid--cell ws-nowrap mr16 mb8" title="2020-07-08 15:01:54Z">
                          <span class="fc-light mr2">Asked</span>
                          <time itemprop="dateCreated" datetime="2020-07-08T15:01:54">today</time>
                      </div>
                          <div class="grid--cell ws-nowrap mr16 mb8">
                              <span class="fc-light mr2">Active</span>
                              <a href="installing-audiokit-core-with-carthagedb28.html?lastactivity" class="s-link s-link__inherit" title="2020-07-08 15:01:54Z">today</a>
                          </div>
                      <div class="grid--cell ws-nowrap mb8" title="Viewed 3 times">
                          <span class="fc-light mr2">Viewed</span>
                          3 times
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

          <button class="js-bookmark-btn s-btn s-btn__unset c-pointer py4 js-gps-track"
                  data-controller="s-tooltip" data-s-tooltip-placement="right" title="Bookmark this question."
                  aria-pressed="false" aria-label="Bookmark" data-selected-classes="fc-yellow-600"
                  data-gps-track="post.click({ item: 1, priv: 0, post_type: 1 })">
              <svg aria-hidden="true" class="svg-icon iconBookmark" width="18" height="18" viewBox="0 0 18 18"><path d="M6 1a2 2 0 00-2 2v14l5-4 5 4V3a2 2 0 00-2-2H6zm3.9 3.83h2.9l-2.35 1.7.9 2.77L9 7.59l-2.35 1.7.9-2.76-2.35-1.7h2.9L9 2.06l.9 2.77z"/></svg>
              <div class="js-bookmark-count mt4 d-none" data-value=""></div>
          </button>



          <a class="js-post-issue grid--cell s-btn s-btn__unset c-pointer py6 mx-auto" href="../../posts/62797786/timeline.html" data-shortcut="T" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18" viewBox="0 0 19 18"><path d="M3 9a8 8 0 113.73 6.77L8.2 14.3A6 6 0 105 9l3.01-.01-4 4-4-4h3L3 9zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5z"/></svg></a>

  </div>

          </div>



  <div class="postcell post-layout--right">

      <div class="post-text" style="font-family:'Nunito', sans-serif;" itemprop="text">

  <p>When intalling AudioKit with Cocoapods there's a subspec called Core you can use:</p>
  <p>Podspec URL: <a href="https://github.com/CocoaPods/Specs/blob/master/Specs/1/6/8/AudioKit/4.10.1/AudioKit.podspec.json" rel="nofollow noreferrer">https://github.com/CocoaPods/Specs/blob/master/Specs/1/6/8/AudioKit/4.10.1/AudioKit.podspec.json</a></p>
  <p>Is there an equivalent way of only installing the Core library with Carthage?</p>
      </div>

          <div class="post-taglist grid gs4 gsy fd-column">
              <div class="grid ps-relative d-block">
                  <a href="../tagged/ios.html" class="post-tag" title="show questions tagged &#39;ios&#39;" rel="tag">ios</a> <a href="../tagged/swift.html" class="post-tag" title="show questions tagged &#39;swift&#39;" rel="tag">swift</a> <a href="../tagged/audiokit.html" class="post-tag" title="show questions tagged &#39;audiokit&#39;" rel="tag">audiokit</a> <a href="../tagged/carthage.html" class="post-tag" title="show questions tagged &#39;carthage&#39;" rel="tag">carthage</a>
              </div>
          </div>

      <div class="mb0 ">
          <div class="mt16 grid gs8 gsy fw-wrap jc-end ai-start pt4">
              <div class="grid--cell mr16" style="flex: 1 1 100px;">


  <div class="post-menu">
      <a href="../../q/62797786.html"
         rel="nofollow"
         itemprop="url"
         class="js-share-link js-gps-track"
         title="short permalink to this question"
         data-gps-track="post.click({ item: 2, priv: 0, post_type: 1 })"
         data-controller="se-share-sheet"
         data-se-share-sheet-title="Share a link to this question"
         data-se-share-sheet-subtitle=""
         data-se-share-sheet-post-type="question"
         data-se-share-sheet-social="facebook twitter devto"
         data-se-share-sheet-location="1"
         data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f4.0%2f"
         data-se-share-sheet-license-name="CC BY-SA 4.0"
         data-s-popover-placement="bottom-start">share</a>
          <span class="lsep">|</span>
      <button id="btnFollowPost-62797786" class="s-btn s-btn__link fc-black-400 h:fc-black-700 pb2 js-follow-post js-follow-question js-gps-track" role="button"
              data-gps-track="post.click({ item: 14, priv: 0, post_type: 1 })"
              data-controller="s-tooltip " data-s-tooltip-placement="bottom"
              data-s-popover-placement="bottom" aria-controls=""
              title="Follow this question to receive notifications">
          follow
      </button>
          <span class="lsep">|</span>
  </div>

              </div>

              <div class="post-signature owner grid--cell" style="font-family:'Nunito', sans-serif;">
                  <div class="user-info ">
      <div class="user-action-time">
          asked <span title="2020-07-08 15:01:54Z" class="relativetime">1 min ago</span>
      </div>
      <div class="user-gravatar32">
          <a href="../../users/2536476/andy.html"><div class="gravatar-wrapper-32"><img src="{{asset('assets/i.stack.imgur.com/LmbT701e8.jpg?s=32') }}&amp;g=1" alt="" width="32" height="32" class="bar-sm"></div></a>
      </div>
      <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
          <a href="../../users/2536476/andy.html">Andy</a><span class="d-none" itemprop="name">Andy</span>
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
                      <a name="tab-top"></a>

                                      <h2 class="bottom-notice bottom-share-links" style="padding-top: 8px; margin-bottom: -8px; font-family:'Nunito', sans-serif;">
  Know someone who can answer? Share a link to this <a href="installing-audiokit-core-with-carthage.html">question</a> via <a href="mailto:?subject=Stack%20Overflow%20Question&amp;body=Installing%20AudioKit%20Core%20with%20Carthage%0Ahttps%3a%2f%2fstackoverflow.com%2fq%2f62797786%3fsem%3d2">email</a>, <a href="https://twitter.com/share?url=https%3a%2f%2fstackoverflow.com%2fq%2f62797786%3fstw%3d2">Twitter</a>, or <a href="https://www.facebook.com/sharer.php?u=https%3a%2f%2fstackoverflow.com%2fq%2f62797786%3fsfb%3d2">Facebook</a>.                                    </h2>
                          <a name='new-answer'></a>
                              <form id="post-form" action="https://stackoverflow.com/questions/62797786/answer/submit" method="post" class="js-add-answer-component post-form">
                                  <input type="hidden" id="post-id" value="62797786" />
                                  <input type="hidden" id="qualityBanWarningShown" name="qualityBanWarningShown" value="false" />
                                  <input type="hidden" name="referrer" value="../../questions.html" />
                                  <h2 class="space" style="font-family:'Nunito', sans-serif; weight: 600;">
                                      Your Answer
                                  </h2>


      <script>
          StackExchange.ifUsing("editor", function () {
              StackExchange.using("externalEditor", function () {
                  StackExchange.using("snippets", function () {
                      StackExchange.snippets.init();
                  });
              });
          }, "code-snippets");
      </script>


  <script>
      StackExchange.ready(function() {
          var channelOptions = {
              tags: "".split(" "),
              id: "1"
          };
          initTagRenderer("".split(" "), "".split(" "), channelOptions);

          StackExchange.using("externalEditor", function() {
              // Have to fire editor after snippets, if snippets enabled
              if (StackExchange.settings.snippets.snippetsEnabled) {
                  StackExchange.using("snippets", function() {
                      createEditor();
                  });
              }
              else {
                  createEditor();
              }
          });

          function createEditor() {
              StackExchange.prepareEditor({
                  heartbeatType: 'answer',
                  autoActivateHeartbeat: false,
                  convertImagesToLinks: true,
                  noModals: true,
                  showLowRepImageUploadWarning: true,
                  reputationToPostImages: 10,
                  bindNavPrevention: true,
                  postfix: "",
                  imageUploader: {
                  brandingHtml: "Powered by \u003ca href=\"https://imgur.com/\"\u003e\u003csvg class=\"svg-icon\" width=\"50\" height=\"18\" viewBox=\"0 0 50 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"\u003e\u003cpath d=\"M46.1709 9.17788C46.1709 8.26454 46.2665 7.94324 47.1084 7.58816C47.4091 7.46349 47.7169 7.36433 48.0099 7.26993C48.9099 6.97997 49.672 6.73443 49.672 5.93063C49.672 5.22043 48.9832 4.61182 48.1414 4.61182C47.4335 4.61182 46.7256 4.91628 46.0943 5.50789C45.7307 4.9328 45.2525 4.66231 44.6595 4.66231C43.6264 4.66231 43.1481 5.28821 43.1481 6.59048V11.9512C43.1481 13.2535 43.6264 13.8962 44.6595 13.8962C45.6924 13.8962 46.1709 13.2535 46.1709 11.9512V9.17788Z\"/\u003e\u003cpath d=\"M32.492 10.1419C32.492 12.6954 34.1182 14.0484 37.0451 14.0484C39.9723 14.0484 41.5985 12.6954 41.5985 10.1419V6.59049C41.5985 5.28821 41.1394 4.66232 40.1061 4.66232C39.0732 4.66232 38.5948 5.28821 38.5948 6.59049V9.60062C38.5948 10.8521 38.2696 11.5455 37.0451 11.5455C35.8209 11.5455 35.4954 10.8521 35.4954 9.60062V6.59049C35.4954 5.28821 35.0173 4.66232 34.0034 4.66232C32.9703 4.66232 32.492 5.28821 32.492 6.59049V10.1419Z\" /\u003e\u003cpath fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M25.6622 17.6335C27.8049 17.6335 29.3739 16.9402 30.2537 15.6379C30.8468 14.7755 30.9615 13.5579 30.9615 11.9512V6.59049C30.9615 5.28821 30.4833 4.66231 29.4502 4.66231C28.9913 4.66231 28.4555 4.94978 28.1109 5.50789C27.499 4.86533 26.7335 4.56087 25.7005 4.56087C23.1369 4.56087 21.0134 6.57349 21.0134 9.27932C21.0134 11.9852 23.003 13.913 25.3754 13.913C26.5612 13.913 27.4607 13.4902 28.1109 12.6616C28.1109 12.7229 28.1161 12.7799 28.121 12.8346C28.1256 12.8854 28.1301 12.9342 28.1301 12.983C28.1301 14.4373 27.2502 15.2321 25.777 15.2321C24.8349 15.2321 24.1352 14.9821 23.5661 14.7787C23.176 14.6393 22.8472 14.5218 22.5437 14.5218C21.7977 14.5218 21.2429 15.0123 21.2429 15.6887C21.2429 16.7375 22.9072 17.6335 25.6622 17.6335ZM24.1317 9.27932C24.1317 7.94324 24.9928 7.09766 26.1024 7.09766C27.2119 7.09766 28.0918 7.94324 28.0918 9.27932C28.0918 10.6321 27.2311 11.5116 26.1024 11.5116C24.9737 11.5116 24.1317 10.6491 24.1317 9.27932Z\"/\u003e\u003cpath d=\"M16.8045 11.9512C16.8045 13.2535 17.2637 13.8962 18.2965 13.8962C19.3298 13.8962 19.8079 13.2535 19.8079 11.9512V8.12928C19.8079 5.82936 18.4879 4.62866 16.4027 4.62866C15.1594 4.62866 14.279 4.98375 13.3609 5.88013C12.653 5.05154 11.6581 4.62866 10.3573 4.62866C9.34336 4.62866 8.57809 4.89931 7.9466 5.5079C7.58314 4.9328 7.10506 4.66232 6.51203 4.66232C5.47873 4.66232 5.00066 5.28821 5.00066 6.59049V11.9512C5.00066 13.2535 5.47873 13.8962 6.51203 13.8962C7.54479 13.8962 8.0232 13.2535 8.0232 11.9512V8.90741C8.0232 7.58817 8.44431 6.91179 9.53458 6.91179C10.5104 6.91179 10.893 7.58817 10.893 8.94108V11.9512C10.893 13.2535 11.3711 13.8962 12.4044 13.8962C13.4375 13.8962 13.9157 13.2535 13.9157 11.9512V8.90741C13.9157 7.58817 14.3365 6.91179 15.4269 6.91179C16.4027 6.91179 16.8045 7.58817 16.8045 8.94108V11.9512Z\"/\u003e\u003cpath d=\"M3.31675 6.59049C3.31675 5.28821 2.83866 4.66232 1.82471 4.66232C0.791758 4.66232 0.313354 5.28821 0.313354 6.59049V11.9512C0.313354 13.2535 0.791758 13.8962 1.82471 13.8962C2.85798 13.8962 3.31675 13.2535 3.31675 11.9512V6.59049Z\" /\u003e\u003cpath d=\"M1.87209 0.400291C0.843612 0.400291 0 1.1159 0 1.98861C0 2.87869 0.822846 3.57676 1.87209 3.57676C2.90056 3.57676 3.7234 2.87869 3.7234 1.98861C3.7234 1.1159 2.90056 0.400291 1.87209 0.400291Z\" fill=\"#1BB76E\"/\u003e\u003c/svg\u003e\u003c/a\u003e",
                      contentPolicyHtml: "User contributions licensed under \u003ca href=\"https://stackoverflow.com/help/licensing\"\u003ecc by-sa\u003c/a\u003e \u003ca href=\"https://stackoverflow.com/legal/content-policy\"\u003e(content policy)\u003c/a\u003e",
                      allowUrls: true
                  },
                  onDemand: true,
                  discardSelector: ".discard-answer"
                  ,immediatelyShowMarkdownHelp:true
              });
                      }
      });
  </script>
  <div id="post-editor" class="post-editor js-post-editor">

      <div class="ps-relative">
          <div class="wmd-container mb8">
              <div id="wmd-button-bar" class="wmd-button-bar btr-sm"></div>
              <div class="js-stacks-validation">
                  <div class="ps-relative">
                      <textarea id="wmd-input"
                                name="post-text"
                                class="wmd-input s-input bar0 js-post-body-field"
                                data-post-type-id="2"
                                cols="92" rows="15"
                                tabindex="101"
                                data-min-length=""></textarea>
                  </div>
                  <div class="s-input-message mt4 d-none js-stacks-validation-message"></div>
              </div>
          </div>
      </div>

      <aside class="grid ai-start jc-space-between js-answer-help s-notice s-notice__warning pb0 pr4 pt4 mb8 d-none" role="status" aria-hidden="true">
      <div class="grid--cell pt8">
          <p>Thanks for contributing an answer to Stack Overflow!</p><ul><li>Please be sure to <em>answer the question</em>. Provide details and share your research!</li></ul><p>But <em>avoid</em> …</p><ul><li>Asking for help, clarification, or responding to other answers.</li><li>Making statements based on opinion; back them up with references or personal experience.</li></ul><p>To learn more, see our <a href="../../help/how-to-answer.html">tips on writing great answers</a>.</p>
      </div>
      <button class="grid--cell js-answer-help-close-btn s-btn s-btn__muted fc-dark">
          <svg aria-hidden="true" class="svg-icon iconClear" width="18" height="18" viewBox="0 0 18 18"><path d="M15 4.41L13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9 15 4.41z"/></svg>
      </button>
  </aside>


      <div id="draft-saved" class="fc-success float-left h24" style="display:none;">Draft saved</div>
      <div id="draft-discarded" class="fc-error float-left h24" style="display:none;">Draft discarded</div>



          <div id="wmd-preview" class="wmd-preview" ></div>
          <div></div>
          <div class="edit-block">
              <input id="fkey" name="fkey" type="hidden" value="3617a09d093ab016f84b62babf7378eed871cd3b24839c1012d3021561f38b45">
              <input id="author" name="author" type="text">
          </div>

  </div>


                                  <div class="ps-relative">
                                                  <div class="form-item dno new-post-login p0 my16">
                  <div class="grid gs16 md:fd-column new-login-form">
                      <div class="grid fd-column w50 md:w-auto gsy gs8 jc-space-between new-login-left">
                          <h3 class="grid--cell fs-title">Sign up or <a id="login-link" href="../../users/login4450.html?ssrc=question_page&amp;returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f62797786%2finstalling-audiokit-core-with-carthage%23new-answer">log in</a></h3>
                          <script>
                              StackExchange.ready(function () {
                                  StackExchange.helpers.onClickDraftSave('#login-link');
                              });
                          </script>
                          <div class="grid--cell s-btn s-btn__muted s-btn__outlined s-btn__icon google-login" data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - Google&quot;,&quot;New Post&quot;,null,null]">
                              <svg aria-hidden="true" class="native svg-icon iconGoogle" width="18" height="18" viewBox="0 0 18 18"><path d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 002.38-5.88c0-.57-.05-.66-.15-1.18z" fill="#4285F4"/><path d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 01-7.18-2.54H1.83v2.07A8 8 0 008.98 17z" fill="#34A853"/><path d="M4.5 10.52a4.8 4.8 0 010-3.04V5.41H1.83a8 8 0 000 7.18l2.67-2.07z" fill="#FBBC05"/><path d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 001.83 5.4L4.5 7.49a4.77 4.77 0 014.48-3.3z" fill="#EA4335"/></svg> Sign up using Google
                          </div>
                          <div class="grid--cell s-btn s-btn__muted s-btn__icon facebook-login" data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - Facebook&quot;,&quot;New Post&quot;,null,null]">
                              <svg aria-hidden="true" class="svg-icon iconFacebook" width="18" height="18" viewBox="0 0 18 18"><path d="M3 1a2 2 0 00-2 2v12c0 1.1.9 2 2 2h12a2 2 0 002-2V3a2 2 0 00-2-2H3zm6.55 16v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h-2.5z" fill="#4167B2"/></svg> Sign up using Facebook
                          </div>
                          <div class="grid--cell s-btn s-btn__muted s-btn__outlined s-btn__icon stackexchange-login" data-ga="[&quot;sign up&quot;,&quot;Sign Up Navigation&quot;,&quot;New Post&quot;,null,null]">
                              <svg aria-hidden="true" class="native svg-icon iconLogoGlyphXSm" width="18" height="18" viewBox="0 0 18 18"><path d="M14 16v-5h2v7H2v-7h2v5h10z" fill="#BCBBBB"/><path d="M12.09.72l-1.21.9 4.5 6.07 1.22-.9L12.09.71zM5 15h8v-2H5v2zm9.15-5.87L8.35 4.3l.96-1.16 5.8 4.83-.96 1.16zm-7.7-1.47l6.85 3.19.63-1.37-6.85-3.2-.63 1.38zm6.53 5L5.4 11.39l.38-1.67 7.42 1.48-.22 1.46z" fill="#F48024"/></svg> Sign up using Email and Password
                          </div>
                      </div>
                      <input type="hidden" name="use-facebook" class="use-facebook" value="false" />
                      <input type="hidden" name="use-google" class="use-google" value="false" />
                      <button type="button" class="d-none js-submit-openid">Submit</button>
                      <div class="grid gsy gs8 fd-column w50 md:w-auto new-login-right form-item p0">
                                  <h3 class="grid--cell fs-title">Post as a guest</h3>
              <div class="grid--cell">
                  <div class="grid gs4 gsy fd-column">
                      <label class="s-label" for="display-name">Name</label>
                      <div class="grid ps-relative">
                          <input class="s-input" id="display-name" name="display-name" maxlength="30" type="text" value="" tabindex="105" placeholder="" />
                      </div>
                  </div>
              </div>
              <div class="grid--cell">
                  <div class="grid gs4 gsy fd-column">
                      <div class="grid--cell">
                          <div class="grid gs2 gsy fd-column">
                              <label class="grid--cell s-label" for="m-address">Email</label>
                              <p class="grid--cell s-description">Required, but never shown</p>
                          </div>
                      </div>
                      <div class="grid ps-relative">
                          <input class="s-input js-post-email-field" id="m-address" name="m-address" type="text" value="" size="40" tabindex="106" placeholder="" />
                      </div>
                  </div>
              </div>

                      </div>
                  </div>
              </div>
              <script>
                  StackExchange.ready(
                      function () {
                          StackExchange.openid.initPostLogin('.new-post-login', 'https%3a%2f%2fstackoverflow.com%2fquestions%2f62797786%2finstalling-audiokit-core-with-carthage%23new-answer', 'question_page');
                      }
                  );
              </script>
              <noscript>
                          <h3 class="grid--cell fs-title">Post as a guest</h3>
              <div class="grid--cell">
                  <div class="grid gs4 gsy fd-column">
                      <label class="s-label" for="display-name">Name</label>
                      <div class="grid ps-relative">
                          <input class="s-input" id="display-name" name="display-name" maxlength="30" type="text" value="" tabindex="105" placeholder="" />
                      </div>
                  </div>
              </div>
              <div class="grid--cell">
                  <div class="grid gs4 gsy fd-column">
                      <div class="grid--cell">
                          <div class="grid gs2 gsy fd-column">
                              <label class="grid--cell s-label" for="m-address">Email</label>
                              <p class="grid--cell s-description">Required, but never shown</p>
                          </div>
                      </div>
                      <div class="grid ps-relative">
                          <input class="s-input js-post-email-field" id="m-address" name="m-address" type="text" value="" size="40" tabindex="106" placeholder="" />
                      </div>
                  </div>
              </div>

              </noscript>

                                  </div>

                                      <div class="form-submit cbt grid gsx gs4">
                                          <button id="submit-button" class="grid--cell s-btn s-btn__primary s-btn__icon" type="submit" tabindex="120" autocomplete="off" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 10px 20px;">
  Posting Jawaban Anda                                       </button>
                                          <button class="grid--cell s-btn s-btn__danger discard-answer dno">
                                              Discard
                                          </button>

                                      </div>
                                      <div class="js-general-error general-error cbt d-none"></div>
                              </form>
                              <h2 class="bottom-notice" data-loc="1" style="font-family:'Nunito', sans-serif;">
  Browse other questions tagged <a href="../tagged/ios.html" class="post-tag" title="show questions tagged &#39;ios&#39;" rel="tag">ios</a> <a href="../tagged/swift.html" class="post-tag" title="show questions tagged &#39;swift&#39;" rel="tag">swift</a> <a href="../tagged/audiokit.html" class="post-tag" title="show questions tagged &#39;audiokit&#39;" rel="tag">audiokit</a> <a href="../tagged/carthage.html" class="post-tag" title="show questions tagged &#39;carthage&#39;" rel="tag">carthage</a>  or <a href="/tanyaforum">ask your own question</a>.                            </h2>
                  </div>
              </div>

      </div>

          </div>


</div>
</div>
