@extends('layouts.app')

@section('content')
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="feature-content wow zoomIn">
                    <div class="col-md-6">
                        {!! $about->content !!}
                    </div>
                    <div class="col-md-6">
                        <img style="width: 100%" src="{{ $about->picture  }}" alt="about us">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
