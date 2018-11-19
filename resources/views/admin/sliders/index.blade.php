@extends('admin.layouts.app')

@section('content')
    <div class="form-group">
        <a href="{{ route('admin.home.sliders.create') }}" class="btn btn-primary">Créer</a>
    </div>
    @foreach($sliders as $slider)
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-2">
                    <img width="100%" src="{{ $slider->picture }}" alt="">
                </div>
                <div class="col-md-7">
                    <h4>{{ $slider->title }}</h4>
                    <p>{!! $slider->description !!}</p>
                </div>
                <div class="col-md-3">
                    <div class="pull-right">
                        <a class="btn btn-warning" href="{{ route('admin.home.sliders.edit', ['id' => $slider->id]) }}">Editer</a>
                        <a class="btn btn-danger" href="{{ route('admin.home.sliders.destroy', ['id' => $slider->id]) }}">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
