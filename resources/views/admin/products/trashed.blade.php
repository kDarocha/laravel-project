@extends('admin.layouts.app')

@section('content')
    @foreach($products as $product)
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-2">
                    <img width="100%" src="{{ asset('/' . $product->picture) }}" alt="">
                </div>
                <div class="col-md-8">
                    <h4>{{ $product->title }}</h4>
                    <p>{!! $product->description !!}</p>
                </div>
                <div class="col-md-2">
                    <div class="col-md-6">
                        <a class="btn btn-success" href="{{ route('admin.products.edit', ['id' => $product->id]) }}">Restorer</a>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-danger" href="{{ route('admin.products.destroy', ['id' => $product->id]) }}">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
