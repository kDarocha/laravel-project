@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="latest-news-content">
                <div class="row" style="display: flex;  flex-wrap: wrap;">
                    @foreach($products as $product)
                        <div class="col-md-6 col-sm-12" style="flex: 1 350px;">
                            <article class="blog-news-single">
                                <div class="blog-news-img">
                                    <a href="{{ route('product.single', ['slug' => $product->slug]) }}"><img style="object-fit: cover;" src="{{ $product->picture }}" alt="image"></a>
                                </div>
                                <div class="blog-news-title">
                                    <h2><a href="{{ $product->slug }}">{{ $product->title }}</a></h2>
                                </div>
                                <div class="blog-news-details">
                                    <p>{!! $product->description !!}</p>
                                    <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">{{ trans('customlang.read_more') }} <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
