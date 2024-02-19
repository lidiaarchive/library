<?php

namespace App\Http\Controllers;

use App\Http\AuthControllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    
    // login
public function authenticating(request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required', 'min:8'],
        ]);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'failed');
                Session::flash('message', 'your account is not active');
                return redirect('/login');
            }
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect('dashboard');
            }
            if (Auth::user()->role == 'client') {
                return redirect('profile');
            }
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'login failed');
        return redirect('/login');
    }

//    logout

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }

//    register
    public function registrasi()
    {
        return view('registrasi');
    }
    public function registerprocess(Request $request)
    {

        $validated = $request->validate([
            'nama',
            'kelas',
            'jenis_kelamin',
            'agama',
            'username' => 'required',
            'password' => 'required|min:8',
        ]);

        $request['password'] = Hash::make($request->password);
        $user = ModelsUser::create($request->all());

        Session::flash('status', 'succes');
        Session::flash('message', 'registration successful');
        return redirect('registrasi');
    }
}
