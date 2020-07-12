@extends('layouts/app')

@section('content')
    <form action="/comment/" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="content">Komentar</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$comment->content}}
        </textarea>
        </div>
        <div class="d-flex justify-content-end">
            <a href="/thread" class="btn btn-success">Kembali</a>
            <input type="hidden" name="id_comment" value="{{$comment->id}}">
            <button type="submit" class="btn btn-primary ml-2">Perbarui Komentar</button>
        </div>
    </form>
    <form action="/comment/" class="mt-n2" method="post">
        @csrf
        @method('DELETE')
        <input type="hidden" name="id_comment" value="{{$comment->id}}">
        <button type="submit" class="btn btn-danger mt-n5">Hapus</button>
    </form>
@endsection

@push('scripts')
    <script>
        tinymce.init({
            selector:'textarea#content',
            statusbar:false,
            menubar:false,
            width: "100%",
            height: 300
        });
    </script>
@endpush
