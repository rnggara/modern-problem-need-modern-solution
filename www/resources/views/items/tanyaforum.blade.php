@extends('templateforum.master')
    
{{-- @section ('title')
<title>Buat Pertanyaan - Tanya Kami</title>
@endsection


@section('content')

      <div id="content" class="snippet-hidden">
              <div id="question-header" class="grid sm:fd-column" >
                  <h1 itemprop="name" class="grid--cell fs-headline1 fl1 ow-break-word mb8"  style="font-family:'Nunito', sans-serif; font-weight: 600; ">Ketik Pertanyaanmu!</h1>
                  <div class="ml12 aside-cta grid--cell print:d-none sm:ml0 sm:mb12 sm:order-first sm:as-end"></div>
              </div>
          <form method="post" action="/thread">
              @csrf
              <div class="ps-relative" >
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
                            data-min-length=""
                            ></textarea>
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
@endsection


    @section('styles')
        <link href="{{asset('assets/tags-input/tagsInput.css')}}" rel="stylesheet">
    @endsection

    @push('scripts')
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
    @endpush --}}

    @section('styles')
    
    @endsection

    @section('content')

<div id="content" class="snippet-hidden">
    <div id="mainbar" role="main" aria-labelledby="h-all-questions">
        <div class="grid">
            <h1 class="grid--cell fl1 fs-headline1 mb24" style="font-family:'Nunito', sans-serif;">Tuliskan pertanyaanmu</h1>
        </div>
        <div data-controller="se-uql" data-se-uql-id="" data-se-uql-sanitize-tag-query="false">
            <div class="grid ai-center jc-space-between mb12 sm:fd-column sm:ai-stretch">
                    <div class="fs-body3 grid--cell fl1 mr12 sm:mr0 sm:mb12" style="font-family:'Nunito', sans-serif;">
            </div>
        </div>
    </div>

    <!--This is the questions part (middle part) !-->
    <div id="questions" class=" flush-left">
        

        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


    </div>
    <br class="cbt"/>
</div>

</div>
</div>
@endsection

@push('scripts')
@endpush