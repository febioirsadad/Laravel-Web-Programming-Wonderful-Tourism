@extends('layout.main')

@section('title', 'Wonderful Journer')

@section('container')

<style>
    .fullstory {
        margin-top: 100px;
    }

    .figure-img {
        width: 700px;
        height: 400px;
    }

    .footer-bottom {
        margin-top: 80px;
    }
</style>

<div class="fullstory">
@foreach($fullstory as $f)
    <div class="container">
    <h4 class="text-center text-white">{{$f->title}}</h4>
        <figure class="figure">
            <img src="{{URL::asset($f->image)}}" class="figure-img img-thumbnail rounded mx-auto d-block mt-3" alt="A generic square placeholder image with rounded corners in a figure.">
            <figcaption class="figure-caption mt-5 text-justify text-white">{{$f->description}}</figcaption>
        </figure>
        <a class="btn btn-warning" href="/" role="button">Back</a>
    </div>
@endforeach
</div>
@endsection