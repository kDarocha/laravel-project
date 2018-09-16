@extends('layouts.app')

@section('content')
    <p>{{ $product->title }}</p>
    <p>{{ $product->content }}</p>
@endsection