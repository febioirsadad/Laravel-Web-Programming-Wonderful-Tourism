@extends('layout.main')

@section('title', 'Blog List')

@section('container')

<style>
    .homeadmin {
        margin-top: 100px;
    }
    .footer-bottom {
        margin-top: 200px
    }
</style>

<div class="homeadmin">
<div class="container">
<a class="btn btn-primary" href="/usernewblog" role="button">+ Create Blog</a>
<table class="table text-white mt-5">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($blog as $b)
    <tr>
      <td>{{$b->title}}</td>
      <td>
      <form action="bloguser/{{$b->uid}}" method="post">
        @method('delete')
        @csrf
        <div class="col"><button class="btn btn-danger" type="submit" style="width: 120px;">Delete&nbsp;</button></div>
      </form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
</div>
@endsection