@extends('layout.main')

@section('title', 'Profile')

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
        margin-top: 120px
    }
</style>

    <div class="container-fluid">
        <h4 class="text-center">User Profile</h4>
        <hr>
        <form method="post" enctype="multipart/form-data" action="/profile/{{Auth::user()->id}}">
        @method('patch')
        @csrf

            @foreach($user as $p)
            <div class="form-group">
                <label>Name:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-user"></i> </div>
                </div>
                <input type="text" name="name" value="{{$p->name}}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Email Address:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="far fa-envelope"></i> </div>
                </div>
                <input type="text" name="email" value="{{$p->email}}" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-phone"></i> </div>
                </div>
                <input type="text" name="phone" value="{{$p->phone}}" class="form-control">
                </div>
            </div>
            @endforeach
            <button type="update" href="#" class="btn btn-success">UPDATE</button>
        </form>
    </div>

<!-- <style>
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
        <h4 class="text-center">Profile</h4>
        <hr>
        <form>
            <div class="form-group">
                <label>Name:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-user"></i> </div>
                </div>
                <input type="text" name="" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label>Email Address:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="far fa-envelope"></i> </div>
                </div>
                <input type="text" name="" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-phone"></i> </div>
                </div>
                <input type="text" name="" class="form-control" placeholder="">
                </div>
            </div>
            
            <button type="update" href="#" class="btn btn-success">UPDATE</button>
        </form>
    </div> -->
@endsection