@extends('admin.layouts.app')

@section('content')
    <form>
        <div class="accordion">
            <div class="about-content-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-about-content">Contenu à propos</span>
                </div>
                <div id="collapse-about-content" class="panel-body collapse">
                    <div class="form-group">
                        <label for="about-content-fr">Contenu FR</label>
                        <textarea name="about-content-fr" id="about-content-fr" cols="30" rows="10" class="form-control">{{ $about->translate('fr')->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="about-content-en">Contenu EN</label>
                        <textarea name="about-content-en" id="about-content-en" cols="30" rows="10" class="form-control">{{ $about->translate('en')->content }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input id="main-picture" name="name-picture" type="file" class="form-control">
        </div>
        <div class="form-group">
            <img width="35%" src="{{ asset('images/about.jpg') }}" alt="About us">
        </div>
    </form>
@endsection

@section('script')
    <script>
      $(function() {
        $('textarea').froalaEditor();
      });
    </script>
@endsection
