<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
	function showLogin(){
		return view('login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('beranda')->with('success', 'Login Berhasil, Selamat Datang Admin');
		}else{
			return back()->with('danger', 'Login Gagal, Silahkan cek email dan password anda');
		}
	}

	function logout(){
		Auth::logout();
		return redirect('login');
	}

	function registrasi(){
		return view('registrasi');
	}

	function prosesRegistrasi(){
		$user = new User;
		$user->nama = request('nama');
		$user->username = request('username');
		$user->email = request('email');
		$user->password = bcrypt(request('password'));
		$user->save();

		return view('login');
	}

	function forgotPassword(){
		return view('forgotPassword');
	}
}

