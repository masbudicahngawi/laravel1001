<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login4');
    }

    public function prosesLogin(Request $rekues){
        $data = $rekues->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($data)){
            $rekues->session()->regenerate();

            return redirect('/poi/semua');
        }

        return redirect('/about');

    }

    public function logout(){
        Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        return redirect('/');
    }
}
