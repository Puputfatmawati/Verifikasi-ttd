<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\VerifikasiModel;
use App\models\UserModel;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // public function index()
    // {
    //     $user = UserModel::count();
    //     $verifikasiCount = VerifikasiModel::count();
    //     return view('v_home', ['user_count' => $user, 'verifikasi_count' => $verifikasiCount]);
    // }

    
    
}
