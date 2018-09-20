@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="accordion">
            <div class="title-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-title">Titre</span>
                </div>
                <div id="collapse-title" class="panel-body collapse">
                    <div class="form-group">
                        <label for="title_fr">Titre FR</label>
                        <input id="title_fr" name="title_fr" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title_en">Titre EN</label>
                        <input id="title_en" name="title_en" type="text" class="form-control">
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
                        <textarea id="description_fr" name="description_fr" type="text" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="description_en">Description EN</label>
                        <textarea id="description_en" name="description_en" type="text" class="form-control"></textarea>
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
                        <label for="content_fr">Contenu de la page FR</label>
                        <textarea id="content_fr" name="content_fr" type="text" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_en">Contenu de la page EN</label>
                        <textarea id="content_en" name="content_en" type="text" class="form-control"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">

        </div>

        <div class="form-group">
            <input id="photos" type="file" name="picture" class="form-control">
        </div>

        <div class="files"></div>

        <div class="dropzone dropzone-file-area" id="fileUpload">
            <div class="dz-default dz-message">
                <h3 class="sbold">Drop files here to upload</h3>
                <span>You can also click to open file browser</span>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Valider</button>
        </div>
    </form>
@endsection

@section('script')
    <script src="{{ asset('js/admin/dropzone.js') }}"></script>

    <script>
      $(function() {
        var counter = 0;

        $('textarea').froalaEditor();

        Dropzone.options.fileUpload = {
          url: 'blackHole.php',
          forceChunking: true,
          addRemoveLinks: true,
          accept: function(file) {
            var fileReader = new FileReader();

            fileReader.readAsDataURL(file);
            fileReader.onloadend = function() {
              var content = fileReader.result;
              $('.files').append('<input name="file[' + counter + ']" hidden value="'+ content +'" />');
              file.previewElement.classList.add("dz-success");
              counter++;
            };
            file.previewElement.classList.add("dz-complete");
          }
        }
      });
    </script>
@endsection

@section('style')
    <link href="{{ asset('css/admin/dropzone.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/admin/basic.css') }}" rel="stylesheet" />
@endsection
