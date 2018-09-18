@extends('admin.layouts.app')

@section('content')
    <div class="form-group">
        <label for="about-content">Contenu</label>
        <textarea name="about-content" id="about-content" cols="30" rows="10" class="form-control">{{ $about->content }}</textarea>
    </div>
    <div class="form-group">
        <input id="main-picture" name="name-picture" type="file" class="form-control">
    </div>
    <div class="form-group">
        <img width="35%" src="{{ asset('images/about.jpg') }}" alt="">
    </div>
@endsection

@section('script')
    <script>
      $(function() {
        $('textarea#about-content').froalaEditor();
      });
    </script>
@endsection
