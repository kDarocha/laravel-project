@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.contact.update') }}" method="post">
        @csrf
        <div class="accordion">
            <div class="title-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-title">Titre principal</span>
                </div>
                <div id="collapse-title" class="panel-body collapse">
                    <div class="form-group">
                        <label for="title_fr">Titre principal FR</label>
                        <input id="title_fr" name="title_fr" type="text" class="form-control" value="{{ $contact->translate('fr')->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="title_en">Titre principal EN</label>
                        <input id="title_en" name="title_en" type="text" class="form-control" value="{{ $contact->translate('en')->title }}" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion">
            <div class="subtitle-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-subtitle">Sous-titre</span>
                </div>
                <div id="collapse-subtitle" class="panel-body collapse">
                    <div class="form-group">
                        <label for="subtitle_fr">Sous-titre FR</label>
                        <input id="subtitle_fr" name="subtitle_fr" type="text" class="form-control" value="{{ $contact->translate('fr')->subtitle }}" required>
                    </div>
                    <div class="form-group">
                        <label for="subtitle_en">Sous-titre EN</label>
                        <input id="subtitle_en" name="subtitle_en" type="text" class="form-control" value="{{ $contact->translate('en')->subtitle }}" required>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion">
            <div class="infos-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-infos">Infos</span>
                </div>
                <div id="collapse-infos" class="panel-body collapse">
                    <div class="form-group">
                        <label for="infos_fr">Infos FR</label>
                        <textarea id="infos_fr" name="infos_fr" type="text" class="form-control" required>{{ $contact->translate('fr')->infos }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="infos_en">Infos EN</label>
                        <textarea id="infos_en" name="infos_en" type="text" class="form-control" required>{{ $contact->translate('en')->infos }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Valider</button>
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
