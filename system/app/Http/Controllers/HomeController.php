<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showBeranda(){
		return view('admin.beranda');
	}

	function showBlog(){
		return view('admin.blog');
	}
	function showKategori(){
		return view('admin.kategori');
	}


}