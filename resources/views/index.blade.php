@extends('layout.main')

@section('title', 'Wonderful Journey')

@section('container')

<style>

.carousel-caption {
    padding-bottom: 12%;
}

.carousel-caption h3 {
    font-size: 42px;
    font-weight: bold;
}

.carousel-caption p {
    font-size: 24px;
    color: #21ddfb;
}

  .figure-img {
    width: 100%;
    height: 220px;
  }

  .footer-bottom {
    margin-top: 50px;
  }

  .title-home {
    font-family: "Lucida Console", "Courier New", monospace;
  }

  .place-title {
    font-family: "Times New Roman", Times, serif;
  }
</style>

<div id="carouselFull" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
           <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselIndicators" data-slide-to="1"></li>
       </ol>
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img class="d-block" src="img/mycarousel.jpg" alt="First slide">
               <div class="carousel-caption d-md-block">
                <h3 class="text-dark">Where you will go?</h3>
                <p class="text-dark">Check it on Wonderful Tourism</p>
                <a class="btn btn-danger btn-lg fas fa-arrow-circle-down" href="#titlehome" role="button"></a>
            </div>
           </div>
           <div class="carousel-item">
               <img class="d-block" src="img/mycarousel.jpg" alt="Second slide">
               <div class="carousel-caption d-md-block">
                <h3 class="text-dark">Want upload an Article?</h3>
                <p class="text-dark">Join us now!</p>
                <a class="btn btn-danger font-weight-slim" href="/register" role="button">Sign Up</a>
            </div>
           </div>
       </div>
       <a class="carousel-control-prev" href="#carouselFull" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselFull" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
   </div>

    <div class="container mt-5">
    @if(Auth::check())
    <h1 class="text-center text-warning">Welcome {{Auth::user()->name}} !</h1>
    @endif
    <h2 id="titlehome" class="title-home text-center text-white mt-5">NEW TODAY</h2>
      <div class="row mt-5">
      @foreach($art as $v)
        <div class="col-lg-4">
          <figure class="figure">
            <img src="{{$v->image}}" class="figure-img img-rounded" alt="A generic square placeholder image with rounded corners in a figure.">
            <h4 class="place-title text-white">{{$v->title}}</h4>
            <figcaption class="figure-caption text-white">{{Str::limit($v->description, 200, '..')}} <a class="text-warning" href="/fullstory/{{$v->ar_id}}">full story</a></figcaption>
            <br>
            <p class="text-white">Kategori: <a class="text-warning" href="/category/{{$v->tourismcategory_id}}">{{$v->categoryName}}</a></p>
          </figure>
        </div>
      @endforeach
      </div>
    </div>
@endsection