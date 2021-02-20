@extends('layout.main')

@section('title', 'Wonderful Journey')

@section('container')
<style>
    .homeadmin {
        margin-top: 100px;
    }
    .footer-bottom {
        margin-top: 150px
    }
</style>

<div class="homeadmin">
<div class="container">
<table class="table text-white">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($abv as $abv)
    <tr>
        <td>{{$abv->name}}</td>
        <td>{{$abv->email}}</td>
        <td>
            <form action="/adminblog/{{$abv->id}}" method="post">
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
