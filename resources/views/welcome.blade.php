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
                            <!-- start single latest news -->
                            <div class="col-md-4">
                                <article class="blog-news-single">
                                    <div class="blog-news-img">
                                        <a href="blog-single-with-right-sidebar.html"><img src="{{ asset('images/products/tomate.jpg') }}" alt="image"></a>
                                    </div>
                                    <div class="blog-news-title">
                                        <h2><a href="blog-single-with-right-sidebar.html">All about writing story</a></h2>
                                        <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p>
                                    </div>
                                    <div class="blog-news-details">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                        <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            <!-- start single latest news -->
                            <div class="col-md-4">
                                <article class="blog-news-single">
                                    <div class="blog-news-img">
                                        <a href="blog-single-with-right-sidebar.html"><img src="{{ asset('images/blog-img-2.jpg') }}" alt="image"></a>
                                    </div>
                                    <div class="blog-news-title">
                                        <h2><a href="blog-single-with-right-sidebar.html">Best Mobile Device</a></h2>
                                        <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p>
                                    </div>
                                    <div class="blog-news-details">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                        <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                            <!-- start single latest news -->
                            <div class="col-md-4">
                                <article class="blog-news-single">
                                    <div class="blog-news-img">
                                        <a href="blog-single-with-right-sidebar.html"><img src="{{ asset('images/blog-img-3.jpg') }}" alt="image"></a>
                                    </div>
                                    <div class="blog-news-title">
                                        <h2><a href="blog-single-with-right-sidebar.html">Personal Note Details</a></h2>
                                        <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p>
                                    </div>
                                    <div class="blog-news-details">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                        <a class="blog-more-btn" href="blog-single-with-right-sidebar.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End latest news -->
@endsection
