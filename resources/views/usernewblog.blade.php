@extends('layout.main')

@section('title', 'User Blog')

@section('container')

<style>
    .container-fluid {
    width: 30%;
    margin-top: 9%;
    box-shadow: 0 3px 20px rgba(0,0,0,0.3);
    background-color: white;
    padding: 40px;
    }

    .footer-bottom {
        margin-top: 50px
    }
</style>

<div class="container-fluid">
        <h4 class="text-center">New Blog</h4>
        <hr>
        <form method="post" enctype="multipart/form-data" action="/pushBlog">
            @csrf
            <div class="form-group">
                <label>Title: </label>
                <div class="input-group">
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter the title">
                </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Category: </label>
              <select class="form-control" id="exampleFormControlSelect1" name="category_id">
              @foreach($categories as $k)
                <option value={{$k->id}}>{{$k->categoryName}}</option>
              @endforeach
              </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Photo: </label>
                <input type="file" class="@error('image') is-invalid @enderror" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Story: </label>
                <textarea class="form-control" name="description" value="{{ old('story') }}" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="Create" href="#" class="btn btn-success">CREATE</button>
        </form>
    </div>
@endsection