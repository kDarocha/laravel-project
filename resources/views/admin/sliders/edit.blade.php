@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.home.sliders.update', ['id' => $slider->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="accordion">
            <div class="title-wrapper panel">
                <div class="panel-heading">
                    <span class="collapsed btn btn-light" data-toggle="collapse" data-target="#collapse-title">Titre principal</span>
                </div>
                <div id="collapse-title" class="panel-body collapse">
                    <div class="form-group">
                        <label for="title_fr">Titre principal FR</label>
                        <input id="title_fr" name="title_fr" type="text" class="form-control" value="{{ $slider->translate('fr')->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="title_en">Titre principal EN</label>
                        <input id="title_en" name="title_en" type="text" class="form-control" value="{{ $slider->translate('en')->title }}" required>
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
                        <textarea id="description_fr" name="description_fr" type="text" class="form-control">{{ $slider->translate('fr')->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="description_en">Description EN</label>
                        <textarea id="description_en" name="description_en" type="text" class="form-control">{{ $slider->translate('en')->description }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <select class="form-control" name="product_id" id="product_id">
                @foreach($products as $product)
                    <option value="{{ $product->id }}" {{ $product->id === $slider->product->id ? 'selected' : '' }}>{{ $product->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input class="form-control" type="file" name="picture">
        </div>
        <div class="form-group">
            <img width="100%" src="{{ $slider->picture }}" />
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
