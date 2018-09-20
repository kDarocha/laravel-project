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

        <div class="form-group">
            <input name="photos[]" type="file" class="form-control" multiple>
        </div>
        <div class="form-group">
            <div class="row">
                @foreach($product->productsPhotos as $photo)
                    <div class="col-md-2">
                        <div class="">
                            <img width="100%" src="/{{ $photo->picture }}" alt="{{ $product->title }}">
                        </div>
                        <button class="btn btn-danger">Supprimer</button>
                    </div>
                @endforeach
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
