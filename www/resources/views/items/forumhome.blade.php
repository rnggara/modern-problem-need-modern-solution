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
      <a href="users/login6117.html" class="ws-nowrap s-btn s-btn__primary" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 12px 20px 12px 20px;">
          Tanya Sekarang
      </a>
              </div>
          </div>
      <div data-controller="se-uql" data-se-uql-id="" data-se-uql-sanitize-tag-query="false">
      <div class="grid ai-center jc-space-between mb12 sm:fd-column sm:ai-stretch">
          <div class="fs-body3 grid--cell fl1 mr12 sm:mr0 sm:mb12" style="font-family:'Nunito', sans-serif;">
              3 Pertanyaan       </div>

          <div class="uql-nav grid--cell"
               data-action="se-uql-list:edit-current-requested@document->se-uql#toggleEditor">
              <div class="grid ai-center jc-space-between">
                  <div class="js-uql-navigation s-btn-group grid--cell mr16 ff-row-nowrap">
                          <a class="s-btn s-btn__muted s-btn__outlined s-btn__sm grid d-flex is-selected" data-nav-value="Newest" href="questions56d7.html?tab=Newest" data-shortcut="N">
                              <div class="grid--cell" style="font-family:'Nunito', sans-serif; font-weight: 600;">Terbaru</div>
                          </a>
                          <a class="s-btn s-btn__muted s-btn__outlined s-btn__sm grid d-flex" data-nav-value="Active" href="questionsf10b.html?tab=Active" data-shortcut="A">
                              <div class="grid--cell" style="font-family:'Nunito', sans-serif; font-weight: 600;">Aktif</div>
                          </a>
                          <a class="s-btn s-btn__muted s-btn__outlined s-btn__sm grid d-flex uql-nav--expanded-item" data-nav-value="Bounties" href="questions0082.html?tab=Bounties" data-shortcut="E">
                              <div class="grid--cell" style="font-family:'Nunito', sans-serif; font-weight: 600;">Bountied</div>
                                  <div class="s-badge s-badge__bounty s-badge__bounty s-badge__sm lh-xs ml4 px4 grid--cell" style="font-family:'Nunito', sans-serif; font-weight: 600; background: black;">475</div>
                          </a>
                          <a class="s-btn s-btn__muted s-btn__outlined s-btn__sm grid d-flex uql-nav--expanded-item" data-nav-value="Unanswered" href="questions36cb.html?tab=Unanswered" data-shortcut="U">
                              <div class="grid--cell" style="font-family:'Nunito', sans-serif; font-weight: 600;">Belum Terjawab</div>
                          </a>
                  </div>
                  <div class="grid--cell">
                      <button class="s-btn s-btn__filled s-btn__sm s-btn__icon ws-nowrap"
                              role="button"
                              style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: #e7e7e7; border: 1px solid black;"
                              data-controller="s-expandable-control"
                              data-s-expandable-control-toggle-class="is-selected"
                              data-target="se-uql.toggleFormButton"
                              aria-expanded="false"
                              aria-controls="uql-form">
                          <svg aria-hidden="true" class="sm:d-none va-middle svg-icon iconGearSm" width="14" height="14" viewBox="0 0 14 14"><path d="M8.17 11.42l-.39 1.53a6.07 6.07 0 01-1.58 0l-.39-1.53c-.39-.1-.75-.26-1.1-.46l-1.35.8c-.42-.31-.8-.69-1.12-1.1l.8-1.37c-.2-.34-.35-.7-.46-1.1L1.05 7.8a6.06 6.06 0 010-1.57l1.53-.4c.1-.4.25-.76.45-1.11l-.8-1.36c.32-.42.7-.8 1.1-1.11l1.36.8c.35-.2.73-.36 1.13-.47l.4-1.53a6.06 6.06 0 011.55 0l.4 1.53c.4.1.78.26 1.13.47l1.36-.8c.41.31.78.68 1.1 1.1l-.8 1.36c.2.35.36.73.46 1.13l1.53.39a6.06 6.06 0 010 1.57l-1.53.39c-.1.4-.27.77-.47 1.11l.8 1.36c-.32.42-.7.8-1.11 1.11l-1.36-.8c-.34.2-.71.35-1.1.45zM7 9a2 2 0 100-4 2 2 0 000 4z"/></svg> Filter
                      </button>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--This is the questions part (middle part) !-->
          <div id="questions" class=" flush-left">

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
          <div class="views " title="2 views">
      2 views
  </div>
      </div>
      <div class="summary">
          <h3><a href="questions/62797786/installing-audiokit-core-with-carthage.html" class="question-hyperlink" style="font-family:'Nunito', sans-serif; font-weight: 600; color: black;">Installing AudioKit Core with Carthage</a></h3>
          <div class="excerpt" style="font-family:'Nunito', sans-serif;">
              When intalling AudioKit with Cocoapods there's a subspec called Core you can use:
  Podspec URL: https://github.com/CocoaPods/Specs/blob/master/Specs/1/6/8/AudioKit/4.10.1/AudioKit.podspec.json
  Is there ...
          </div>
          <div class="tags t-ios t-swift t-audiokit t-carthage">
              <a href="questions/tagged/ios.html" class="post-tag" title="show questions tagged &#39;ios&#39;" rel="tag">ios</a> <a href="questions/tagged/swift.html" class="post-tag" title="show questions tagged &#39;swift&#39;" rel="tag">swift</a> <a href="questions/tagged/audiokit.html" class="post-tag" title="show questions tagged &#39;audiokit&#39;" rel="tag">audiokit</a> <a href="questions/tagged/carthage.html" class="post-tag" title="show questions tagged &#39;carthage&#39;" rel="tag">carthage</a>
          </div>
          <div class="started fr">
              <div class="user-info ">
      <div class="user-action-time" style="color: black;">
          ditanyakan <span title="2020-07-08 15:01:54Z" class="relativetime">50 detik yang lalu</span>
      </div>
      <div class="user-gravatar32">
          <a href="users/2536476/andy.html"><div class="gravatar-wrapper-32"><img src=" {{ asset ('/assets/i.stack.imgur.com/LmbT701e8.jpg?s=32') }}&amp;g=1" alt="" width="32" height="32" class="bar-sm"></div></a>
      </div>
      <div class="user-details">
          <a href="users/2536476/andy.html">Andy</a>
          <div class="-flair">
              <span class="reputation-score" title="reputation score " dir="ltr">108</span><span title="7 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">7</span></span><span class="v-visible-sr">7 bronze badges</span>
          </div>
      </div>
  </div>
          </div>
      </div>
  </div><div class="question-summary" id="question-summary-62797785" style="font-family:'Nunito', sans-serif;">
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
          <div class="views " title="2 views">
      2 views
  </div>
      </div>
      <div class="summary">
          <h3><a href="questions/62797785/how-to-pass-more-terminal-commands-in-python-after-establishing-netcat-https-con.html" class="question-hyperlink" style="font-family:'Nunito', sans-serif; font-weight: 600; color: black;">How to pass more terminal commands in Python after establishing Netcat HTTPS connection?</a></h3>
          <div class="excerpt" style="font-family:'Nunito', sans-serif;">
              I'm trying out a Python reverse shellcode from Kali Linux to Windows 10. The goal is to control the Win 10 command prompt from Kali. Below is the reverse shellcode which works fine from Kali if I were ...
          </div>
          <div class="tags t-python t-windows t-command-line t-netcat t-kali-linux">
              <a href="questions/tagged/python.html" class="post-tag" title="show questions tagged &#39;python&#39;" rel="tag">python</a> <a href="questions/tagged/windows.html" class="post-tag" title="show questions tagged &#39;windows&#39;" rel="tag">windows</a> <a href="questions/tagged/command-line.html" class="post-tag" title="show questions tagged &#39;command-line&#39;" rel="tag">command-line</a> <a href="questions/tagged/netcat.html" class="post-tag" title="show questions tagged &#39;netcat&#39;" rel="tag">netcat</a> <a href="questions/tagged/kali-linux.html" class="post-tag" title="show questions tagged &#39;kali-linux&#39;" rel="tag">kali-linux</a>
          </div>
          <div class="started fr">
              <div class="user-info ">
      <div class="user-action-time" style="color: black;">
          ditanyakan <span title="2020-07-08 15:01:51Z" class="relativetime" >53 detik yang lalu</span>
      </div>
      <div class="user-gravatar32">
          <a href="users/13857761/boof.html"><div class="gravatar-wrapper-32"><img src=" {{ asset ('/assets/lh5.googleusercontent.com/-cOVCsrP91oo/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucmYjxaESFcWdZrkUEDm94djXpXcxg/photo93f3.png?sz=32')}}" alt="" width="32" height="32" class="bar-sm"></div></a>
      </div>
      <div class="user-details">
          <a href="users/13857761/boof.html">Boof</a>
          <div class="-flair">
              <span class="reputation-score" title="reputation score " dir="ltr">31</span><span title="3 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">3</span></span><span class="v-visible-sr">3 bronze badges</span>
          </div>
      </div>
  </div>
          </div>
      </div>
  </div><div class="question-summary" id="question-summary-62797783" style="font-family:'Nunito', sans-serif;">
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
          <div class="views " title="2 views">
      2 views
  </div>
      </div>
      <div class="summary">
          <h3><a href="questions/62797760/angular-load-custom-component-inside-json-key.html" class="question-hyperlink" style="font-family:'Nunito', sans-serif; font-weight: 600; color: black;">Angular load custom component inside JSON key</a></h3>
          <div class="excerpt" style="font-family:'Nunito', sans-serif;">
              I'm currently trying to create a table component that gets the data from a backend data service.
  With that said, I'm loading JSON data and I am able to parse the html inside the JSON using the html ...
          </div>
          <div class="tags t-angular t-typescript t-angular9">
              <a href="questions/tagged/angular.html" class="post-tag" title="show questions tagged &#39;angular&#39;" rel="tag">angular</a> <a href="questions/tagged/typescript.html" class="post-tag" title="show questions tagged &#39;typescript&#39;" rel="tag">typescript</a> <a href="questions/tagged/angular9.html" class="post-tag" title="show questions tagged &#39;angular9&#39;" rel="tag">angular9</a>
          </div>
          <div class="started fr">
              <div class="user-info ">
      <div class="user-action-time" style="color: black;">
          ditanyakan <span title="2020-07-08 15:00:21Z" class="relativetime">2 menit yang lalu</span>
      </div>
      <div class="user-gravatar32">
          <a href="users/2743772/ethikz.html"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/93c85308e5ec99b3d7776573ab1067f5?s=32&amp;d=identicon&amp;r=PG" alt="" width="32" height="32" class="bar-sm"></div></a>
      </div>
      <div class="user-details">
          <a href="users/2743772/ethikz.html">ethikz</a>
          <div class="-flair">
              <span class="reputation-score" title="reputation score " dir="ltr">337</span><span title="2 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">2</span></span><span class="v-visible-sr">2 silver badges</span><span title="21 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">21</span></span><span class="v-visible-sr">21 bronze badges</span>
          </div>
      </div>
  </div>
          </div>
      </div>
  </div>        </div>

          <br class="cbt" />
  <div class="s-pagination page-sizer fr" style = "font-family: 'Nunito', sans-serif;" >
    <a href="questionsfcad.html?tab=newest&amp;pagesize=15" title="Show 15 items per page" class="s-pagination--item is-selected" style = "background-color:black;">15</a>
    <a href="questions33e4.html?tab=newest&amp;pagesize=30" title="Show 30 items per page" class="s-pagination--item">30</a>
    <a href="questionsd5da.html?tab=newest&amp;pagesize=50" title="Show 50 items per page" class="s-pagination--item">50</a>
    <span class="s-pagination--item s-pagination--item__clear">Setiap halaman</span>
  </div>
  <div class="s-pagination pager fl" style = "font-family: 'Nunito', sans-serif;">
  <div class="s-pagination--item is-selected" style = "font-family: 'Nunito', sans-serif; background-color: black;">1</div>
  <a class="s-pagination--item js-pagination-item" href="questionsbeef.html?tab=newest&amp;page=2" rel="" title="Go to page 2">2</a>
  <a class="s-pagination--item js-pagination-item" href="questionsda6e.html?tab=newest&amp;page=3" rel="" title="Go to page 3">3</a>
  <a class="s-pagination--item js-pagination-item" href="questionsd8bd.html?tab=newest&amp;page=4" rel="" title="Go to page 4">4</a>
  <a class="s-pagination--item js-pagination-item" href="questions758f.html?tab=newest&amp;page=5" rel="" title="Go to page 5">5</a>
  <div class="s-pagination--item s-pagination--item__clear"style = "font-family: 'Nunito', sans-serif;">…</div>
  <a class="s-pagination--item js-pagination-item" href="questions537e.html?tab=newest&amp;page=1320418" rel="" title="Go to page 10">10</a>
  <a class="s-pagination--item js-pagination-item" href="questionsbeef.html?tab=newest&amp;page=2" rel="next" title="Go to page 2"> Berikutnya</a></div>

  </div>

<!-- Right side bar aka related tags and below !-->
@include ('templateforum.partials.rightsidebar')
</div>
</div>
