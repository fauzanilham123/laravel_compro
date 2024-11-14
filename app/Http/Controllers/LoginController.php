<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    //

    public function index(){
            return view('auth.login');
        }

    public function login_proses(Request $request)  {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('login')->with('failed','email atau password salah');
        }
    }
    
    public function logout(){
            Auth::logout();
            return redirect()->route('login')->with("success","kamu berhasi logout");
        }

    public function register(){
                return view('auth.register');
        } 
    
    public function register_proses(Request $request)  {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($login)){
            return redirect()->route('login');
        }else{
            return redirect()->route('register')->with('failed','email atau password salah');
        }
    
}
}