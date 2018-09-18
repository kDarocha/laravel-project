@extends('admin.layouts.app')

@section('content')
    <div class="form-group">
        <label for="about-content">Contenu</label>
        <textarea name="about-content" id="about-content" cols="30" rows="10" class="form-control">{{ $about->content }}</textarea>
    </div>
@endsection
