<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Konten;
class BlogController extends Controller{


	function indexBlog(){
		$data['list_blog'] = Konten::all();
		return view('admin.blog.index',$data);
	}

	function createBlog(){
		$data['list_kategori'] = Kategori::all();
		return view('admin.blog.create',$data);
	}

	function storeBlog(){
		$blog = new konten;
		$blog->kategori = request('kategori');
		$blog->judul = request('judul');
		$blog->konten = request('konten');
		$blog->save();

		return redirect('blog/index')->with('success', 'Data Berhasil Ditambahkan');
	}


	function showBlog(){
		$data['blog'] = $blog;
		return view('blog.show',$data);
	}

	function editBlog(){
		return view('konten');
	}

	function updateBlog(){
		return view('konten');
	}


	function destroyBlog(){
		return view('konten');
	}


}