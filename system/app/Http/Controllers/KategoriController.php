<?php

namespace App\Http\Controllers;
use App\Models\Kategori;


class KategoriController extends Controller{


	function indexKategori(){
		$data['list_kategori'] = Kategori::all();
		$data['list_blog'] = Konten::all();
		return view('admin.kategori.index', $data);
	}

	function createKategori(){
		return view('admin.kategori.create');
	}

	function storeKategori(){
		$kategori = new kategori;
		$kategori->nama = request('nama');
		$kategori->save();

		return redirect('admin/kategori');
	}

	function showKategori(){
		return view('admin.kategori.show');
	}

	function editKategori(){
		return view('konten');
	}

	function updateKategori(){
		return view('konten');
	}


	function destroyKategori(){
		return view('konten');
	}


}