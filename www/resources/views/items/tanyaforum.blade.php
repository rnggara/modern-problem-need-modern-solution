<!DOCTYPE html>
    @extends('templateforum.master')
    @section ('title')
    <title>Buat Pertanyaan - Tanya Kami</title>
    @section('content')
    <div class="container">
      @include ('templateforum.partials.leftsidebar')
      <div id="content" class="snippet-hidden">
              <div id="question-header" class="grid sm:fd-column" >
                  <h1 itemprop="name" class="grid--cell fs-headline1 fl1 ow-break-word mb8"  style="font-family:'Nunito', sans-serif; font-weight: 600; ">Ketik Pertanyaanmu!</h1>
                  <div class="ml12 aside-cta grid--cell print:d-none sm:ml0 sm:mb12 sm:order-first sm:as-end"></div>
              </div>
          <form method="post" action="/thread">
              @csrf
              <div class="ps-relative" style = "width: 700px;">
                  <div class="row">
                      <div class="form-group">
                          <div style="width: 100%">
                              <input type="text" class="form-control wmd-input s-input bar0 js-post-body-field" name="title" placeholder="Tuliskan judul thread">
                          </div>
                      </div>
                  </div>
                  <div class="wmd-container">
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
                  <input type="text" class="form-control" name="tags" placeholder="Tags" data-role="tagsinput" style="display: none">
              </div>

              <div class="form-submit cbt grid gsx gs4">
                  <button id="submit-button" class="grid--cell s-btn s-btn__primary s-btn__icon" type="submit" tabindex="120" autocomplete="off" style="font-family:'Nunito', sans-serif; font-weight: 600; background-color: black; border-radius: 25px; padding: 10px 20px;">
                      Tanya Sekarang
                  </button>

              </div>
          </form>
    </div>
    </div>


    @section('styles')
        <link href="{{asset('assets/tags-input/tagsInput.css')}}" rel="stylesheet">
    @endsection

    @section('scripts')
        <script src="{{asset('assets/tags-input/tagsInput.js')}}"></script>
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
