<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function registerSubmit(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:4|confirmed',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('swal','Success');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/login')->with('msg', 'Incorrect username or password');
        }
//        $data = User::find(Auth::user()->id);
//        Session::put('userdata',$data);
        return redirect('/');
    }

    public function logout(){
        Session::forget('userdata');
        Auth::logout();
        return redirect('/login');
    }
}
