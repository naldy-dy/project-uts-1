<?php

namespace App\Http\Controllers;

class IndexController extends Controller{


	function showIndex(){
		return view('index');
	}

	function showKonten(){
		return view('konten');
	}

}