@extends('admin.layouts.app')

@section('content')
    <form action="">
        <div class="accordion">
            <div class="title-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-title">Titre</span>
                </div>
                <div id="collapse-title" class="panel-body collapse">
                    <div class="form-group">
                        <label for="title-fr">Titre FR</label>
                        <input id="title-fr" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title-en">Titre EN</label>
                        <input id="title-en" type="text" class="form-control">
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
                        <label for="description-fr">Description FR</label>
                        <textarea id="description-fr" type="text" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description-en">Description EN</label>
                        <textarea id="description-en" type="text" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion">
            <div class="content-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-content">Contenu de la page</span>
                </div>
                <div id="collapse-content" class="panel-body collapse">
                    <div class="form-group">
                        <label for="content-fr">Contenu de la page FR</label>
                        <textarea id="content-fr" type="text" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content-en">Contenu de la page EN</label>
                        <textarea id="content-en" type="text" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input type="file" class="form-control">
        </div>

        <div class="form-group">
            <input name="photos[]" type="file" class="form-control" multiple>
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
