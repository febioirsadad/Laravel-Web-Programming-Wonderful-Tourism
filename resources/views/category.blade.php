@extends('layout.main')

@section('title', 'The Category')

@section('container')

<style>
    .container-category {
        margin-top: 100px;
    }

    .figure-img {
        width: 100%;
        height: 220px;
    }

    .title-home {
        font-family: "Lucida Console", "Courier New", monospace;
    }

    .place-title {
        font-family: "Times New Roman", Times, serif;
    }
</style>

<div class="container-category">
<div class="container">
@foreach($categories as $c)
<h2 class="title-home text-center text-white">{{$c->categoryName}}</h2>
@endforeach
      <div class="row mt-5">
      @foreach($art as $a)
        <div class="col-lg-4 mt-2">
        <figure class="figure">
            <img src="{{URL::asset($a->image)}}" class="figure-img img-thumbnail rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <h4 class="place-title text-white">{{$a->title}}</h4>
            <figcaption class="figure-caption text-white">{{Str::limit($a->description, 200, '..')}} <a class="text-warning" href="/fullstory/{{$a->ar_id}}">full story</a></figcaption>
          </figure>
        </div>
      @endforeach
      </div>
</div>
</div>

<br><br>
@endsection