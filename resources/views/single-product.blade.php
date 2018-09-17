@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row blog-news-title">
                    <div class="col-md-3">
                        <img width="100%" src="/{{ $product->picture }}" alt="">
                    </div>
                    <div class="col-md-9">
                        <h2>{{ $product->title }}</h2>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
                <div class="row blog-news-details blog-single-details">
                    <div class="col-md-12">
                        {!! $product->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
