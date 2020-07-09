@extends('layouts/app')

@section('content')
<form action="/thread" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Judul</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Tuliskan judul thread">
    </div>
    <div class="form-group">
      <label for="tags">Tag</label>
      <input type="text" class="form-control" id="tags" name="tags" placeholder="Tuliskan tag untuk thread">
    </div>
    <div class="form-group">
        <label for="content">Thread</label>
        <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">Buat Thread</button>
    </div>
  </form>
@endsection