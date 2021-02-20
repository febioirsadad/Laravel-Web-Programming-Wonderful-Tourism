<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function getlogin(){
        $categories =   DB::table('categories')->get();
        return view('login', ['categories'=>$categories]);
    }

    public function acclogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $remember = $request->input('remember');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            return redirect()->intended('/');
        }
        return redirect()->route('tourismlogin');
    }

    public function getregis(){
        $categories =   DB::table('categories')->get();
        return view('register', ['categories'=>$categories]);
    }

    public function accregis(Request $request){
        $user = new User;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = "user";
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('tourismlogin');
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
