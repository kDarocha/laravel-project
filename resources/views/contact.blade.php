@extends('layouts.app')

@section('content')
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area">
                        <h2 class="title">{{ $contact->title }}</h2>
                        <span class="line"></span>
                        <p>{{ $contact->subtitle }}</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="cotact-area">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="contact-area-left">
                                    <h4>Contact Info</h4>
                                    {!! $contact->infos !!}
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="contact-area-right">
                                    <form action="" class="comments-form contact-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                                        </div>
                                        <button class="comment-btn">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start google map -->
    <section id="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.3714257064535!2d-86.7550931378034!3d34.66757706940219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8862656f8475892d%3A0xf3b1aee5313c9d4d!2sHuntsville%2C+AL+35813%2C+USA!5e0!3m2!1sen!2sbd!4v1445253385137" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!-- End google map -->
@endsection
