@extends('layouts.app')

@section('content')
    <!-- Start Feature -->
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
    <!-- End Feature -->
    <!-- Start latest news -->
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
                                            <a href="blog-single-with-right-sidebar.html"><img src="{{ asset('/' . $product->picture) }}" alt="image"></a>
                                        </div>
                                        <div class="blog-news-title">
                                            <h2><a href="blog-single-with-right-sidebar.html">{{ $product->title }}</a></h2>
                                        </div>
                                        <div class="blog-news-details">
                                            <p>{{ $product->description }}</p>
                                            <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
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
    <!-- End latest news -->
@endsection
