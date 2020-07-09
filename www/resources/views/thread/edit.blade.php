@extends('layouts/app')

@section('content')
<form action="/thread/{{$thread->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Judul</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Tuliskan judul thread" value="{{$thread->title}}">
    </div>
    <div class="form-group">
      <label for="tags">Tag</label>
      <input type="text" class="form-control" value="{{$thread->tags}}" id="tags" name="tags" placeholder="Tuliskan tag untuk thread">
    </div>
    <div class="form-group">
        <label for="content">Thread</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{$thread->content}}
        </textarea>
    </div>
    <div class="d-flex justify-content-end">
        <a href="/thread" class="btn btn-success">Kembali</a>
        <button type="submit" class="btn btn-primary ml-2">Perbarui Thread</button>
    </div>
  </form>
  <form action="/thread/{{$thread->id}}" class="mt-n2" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-n5">Hapus</button>
        </form>
@endsection