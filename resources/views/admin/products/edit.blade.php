@extends('admin.layouts.app')

@section('content')
    <h1>{{ $product->title }}</h1>
    <form action="{{ Route('admin.products.update', ['id' => $product->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="accordion">
            <div class="title-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-title">Titre</span>
                </div>
                <div id="collapse-title" class="panel-body collapse">
                    <div class="form-group">
                        <label for="title_fr">Titre FR</label>
                        <input id="title_fr" name="title_fr" type="text" class="form-control" value="{{ $product->translate('fr')->title }}">
                    </div>
                    <div class="form-group">
                        <label for="title_en">Titre EN</label>
                        <input id="title_en" name="title_en" type="text" class="form-control" value="{{ $product->translate('en')->title }}">
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
                        <textarea id="description_fr" name="description_fr" type="text" class="form-control">{{ $product->translate('fr')->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="description_en">Description EN</label>
                        <textarea id="description_en" name="description_en" type="text" class="form-control">{{ $product->translate('en')->description }}</textarea>
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
                        <textarea id="content_fr" name="content_fr" type="text" class="form-control">{{ $product->translate('fr')->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="content_en">Contenu de la page EN</label>
                        <textarea id="content_en" name="content_en" type="text" class="form-control">{{ $product->translate('en')->content }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <input type="file" name="picture" class="form-control">
        </div>
        <div class="form-group">
            <img width="20%" src="{{ $product->picture }}" alt="Product picture">
        </div>

        <div class="files"></div>

        <div class="dropzone dropzone-file-area form-group" id="fileUpload">
            <div class="dz-default dz-message">
                <h3 class="sbold">Drop files here to upload</h3>
                <span>You can also click to open file browser</span>
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Valider</button>
        </div>
    </form>

    <div class="form-group">
        <div class="row">
            @foreach($product->productsPhotos as $photo)
                <div class="col-md-2" style="margin-bottom: 25px;">
                    <div style="width: 200px; height: 200px;">
                        <img width="100%" height="100%" style="object-fit: cover;" src="{{ $photo->picture }}" alt="{{ $product->title }}">
                    </div>
                    <button style="position: absolute; top: 4px; right: 20px; padding: 5px 10px;" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </div>
            @endforeach
        </div>
    </div>
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
          accept: function (file) {
            var fileReader = new FileReader();

            fileReader.readAsDataURL(file);
            fileReader.onloadend = function () {
              var content = fileReader.result;
              $('.files').append('<input name="file[' + counter + ']" hidden value="' + content + '" />');
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
