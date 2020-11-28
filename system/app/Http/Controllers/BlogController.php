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

		return redirect('blog')->with('success', 'Data Berhasil Ditambahkan');
	}


	function showBlog(Konten $blog){
		$data['blog'] = $blog;
		return view('admin.blog.show', $data);
	}

	function editBlog(Konten $blog){
		$data['blog'] = $blog;
		return view('admin.blog.edit',$data);
	}
  
	function updateBlog(Konten $blog){
		$blog->judul = request('judul');
		$blog->konten = request('konten');
		$blog->save();

		return redirect('blog')->with('success', 'Data Berhasil DiUpdate');
	}


	function destroy(Konten $blog){
		$blog->delete();
		return redirect('blog')->with('danger', 'Data Berhasil Dihapus');
	}


}