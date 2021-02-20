@extends('layout.main')

@section('title', 'Register now!')

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
        margin-top: 50px;
    }
</style>

    <div class="container-fluid">
        <h4 class="text-center">REGISTER</h4>
        <hr>
        <form action="{{route('tourismregister')}}" method="POST">
        {{csrf_field()}}
            <div class="form-group">
                <label>Name: </label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-user"></i> </div>
                </div>
                <input type="text" name="nama" class="form-control {{$errors->has('nama') ? 'is-invalid' : '' }}" autofocus value="{{old('nama')}}" placeholder="Masukan Nama Anda">
                </div>
            </div>
            <div class="form-group">
                <label>Email Address:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="far fa-envelope"></i> </div>
                </div>
                <input type="text" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : '' }}" autofocus value="{{old('email')}}" placeholder="Masukan Email Anda">
                </div>
            </div>
            <div class="form-group">
                <label>Phone: </label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-phone"></i> </div>
                </div>
                <input type="text" name="phone" class="form-control {{$errors->has('phone') ? 'is-invalid' : '' }}" autofocus value="{{old('phone')}}" placeholder="Masukan Nomor Anda">
                </div>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-unlock-alt"></i> </div>
                </div>
                <input type="password" name="password" class="form-control {{$errors->has('password') ? 'is-invalid' : '' }}" autofocus placeholder="Masukan Password Anda">
                </div>
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-unlock-alt"></i> </div>
                </div>
                <input type="password" name="passwordconfirmation" class="form-control {{$errors->has('passwordconfirmation') ? 'is-invalid' : '' }}" autofocus placeholder="Masukan Kembali Password Anda">
                </div>
            </div><br>
            <div class="text-center">
              <button type="submit" href="#" class="btn btn-success text-white">SUBMIT</button>
            </div>
        </form>
    </div>
@endsection