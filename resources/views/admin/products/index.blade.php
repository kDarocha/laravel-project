@extends('admin.layouts.app')

@section('content')
    @foreach($products as $product)
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-2">
                    <img width="100%" src="{{ $product->picture }}" alt="">
                </div>
                <div class="col-md-7">
                    <h4>{{ $product->title }}</h4>
                    <p>{!! $product->description !!}</p>
                </div>
                <div class="col-md-3">
                    <div class="pull-right">
                        <a class="btn btn-warning" href="{{ route('admin.products.edit', ['id' => $product->id]) }}">Editer</a>
                        <a class="btn btn-danger" href="{{ route('admin.products.destroy', ['id' => $product->id]) }}">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
