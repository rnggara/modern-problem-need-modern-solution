@extends('templateforum.master')
@section ('title')
<title>Buat Pertanyaan - Tanya Kami</title>
@section('content')
<div class="container">
  @include ('templateforum.partials.leftsidebar')
  <div id="content" class="snippet-hidden">




          <div id="question-header" class="grid sm:fd-column" >
                      <h1 itemprop="name" class="grid--cell fs-headline1 fl1 ow-break-word mb8"  style="font-family:'Nunito', sans-serif; font-weight: 600; ">Ketik Pertanyaanmu!</h1>

              <div class="ml12 aside-cta grid--cell print:d-none sm:ml0 sm:mb12 sm:order-first sm:as-end">

              </div>
          </div>
          <div class="ps-relative" style = "width: 700px;">
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

          <div class="form-submit cbt grid gsx gs4">
              <button id="submit-button" class="grid--cell s-btn s-btn__primary s-btn__icon" type="submit" tabindex="120" autocomplete="off" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 10px 20px;">
Tanya Sekarang                                        </button>
              <button class="grid--cell s-btn s-btn__danger discard-answer dno">
                  Discard
              </button>

          </div>

</div>
</div>
