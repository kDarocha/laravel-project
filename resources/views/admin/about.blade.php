@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.about.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="accordion">
            <div class="about-content-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-about-content">Contenu à propos</span>
                </div>
                <div id="collapse-about-content" class="panel-body collapse">
                    <div class="form-group">
                        <label for="content_fr">Contenu FR</label>
                        <textarea name="content_fr" id="content_fr" cols="30" rows="10" class="form-control">{{ $about->translate('fr')->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_en">Contenu EN</label>
                        <textarea name="content_en" id="content_en" cols="30" rows="10" class="form-control">{{ $about->translate('en')->content }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input id="picture" name="picture" type="file" class="form-control">
        </div>
        <div class="form-group">
            <img width="35%" src="/{{ $about->picture }}" alt="About us">
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Valider</button>
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
