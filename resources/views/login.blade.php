@extends('layout.main')

@section('title', 'Sign in to your account!')

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
        margin-top: 80px;
    }
</style>

    <div class="container-fluid">
        <h4 class="text-center">LOGIN</h4>
        <hr>
        <form action="{{route('tourismlogin')}}" method="POST">
        {{csrf_field()}}
            <div class="form-group">
              <label for="exampleFormControlSelect1">Login As:</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Admin</option>
                <option>User</option>
              </select>
            </div>
            <div class="form-group">
                <label>Email Address:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="far fa-envelope"></i> </div>
                </div>
                <input type="text" name="email" class="form-control" placeholder="Masukan Email Anda">
                </div>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"> <i class="fas fa-unlock-alt"></i> </div>
                </div>
                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda">
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div><br>
            <button type="submit" href="#" class="btn btn-success">SUBMIT</button>
            <button type="reset" class="btn btn-danger">RESET</button>
        </form>
    </div>
@endsection