@extends('layouts.app')

@section('content')

    <!-- Start slider -->
    <section id="slider">
        <div class="main-slider">
            @foreach($sliders as $slider)
                <div class="single-slide">
                    <img src="{{ $slider->picture }}" alt="img">
                    <div class="slide-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="slide-article">
                                        <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">{{ $slider->title }}</h1>
                                        <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">{!! $slider->description !!}</p>
                                        <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="{{ route('product.single', ['slug' => $slider->product->slug]) }}">{{ trans('customlang.read_more') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End slider -->

    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">PEW INTERNATIONAL</h2>
                        <span class="line"></span>
                        <p>We are a representative agency of a Brazilian Cooperative which is the leader of 23 sugar refineries, we sell sugar all over the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">Latest Products</h2>
                        <span class="line"></span>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="latest-news-content">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-4">
                                    <article class="blog-news-single">
                                        <div class="blog-news-img">
                                            <a href="{{ route('product.single', ['slug' => $product->slug]) }}"><img src="{{ asset($product->picture) }}" alt="image"></a>
                                        </div>
                                        <div class="blog-news-title">
                                            <h2><a href="{{ route('product.single', ['slug' => $product->slug]) }}">{{ $product->title }}</a></h2>
                                        </div>
                                        <div class="blog-news-details">
                                            <p>{!! $product->description !!}</p>
                                            <a class="blog-more-btn" href="{{ route('product.single', ['slug' => $product->slug]) }}">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('style')
    <style>
        @media (max-width: 600px) {
            .main-slider {
                height: 270px;
            }
        }

        .main-slider .single-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection
