@extends('admin.layouts.app')

@section('content')
    @foreach($products as $product)
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-2">
                    <img width="100%" src="{{ $product->picture }}" alt="">
                </div>
                <div class="col-md-6">
                    <h4>{{ $product->title }}</h4>
                    <p>{!! $product->description !!}</p>
                </div>
                <div class="col-md-4">
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('admin.products.restore', ['id' => $product->id]) }}">Restorer</a>
                        <a class="btn btn-danger" href="{{ route('admin.products.kill', ['id' => $product->id]) }}">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
