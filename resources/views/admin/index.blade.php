@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.home.update') }}">
        @csrf
        <div class="form-group">
            <a class="btn btn-primary" href="{{ route('admin.home.sliders') }}">Afficher les items du slider</a>
        </div>

        <div class="accordion">
            <div class="title-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-title">Titre principal</span>
                </div>
                <div id="collapse-title" class="panel-body collapse">
                    <div class="form-group">
                        <label for="title_fr">Titre principal FR</label>
                        <input id="title_fr" name="title_fr" type="text" class="form-control" value="{{ $home->translate('fr')->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="title_en">Titre principal EN</label>
                        <input id="title_en" name="title_en" type="text" class="form-control" value="{{ $home->translate('en')->title }}" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion">
            <div class="description-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-description">Description</span>
                </div>
                <div id="collapse-description" class="panel-body collapse">
                    <div class="form-group">
                        <label for="description_fr">Description FR</label>
                        <textarea id="description_fr" name="description_fr" type="text" class="form-control">{{ $home->translate('fr')->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="description_en">Description EN</label>
                        <textarea id="description_en" name="description_en" type="text" class="form-control">{{ $home->translate('en')->description }}</textarea>
                    </div>
                </div>
            </div>
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
