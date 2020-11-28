<?php

namespace App\Http\Controllers;
use App\Models\Kategori;


class KategoriController extends Controller{


	function indexKategori(){
		$data['list_kategori'] = Kategori::all();
		return view('admin.kategori.index', $data);
	}

	function createKategori(){
		return view('admin.kategori.create');
	}

	function storeKategori(){
		$kategori = new kategori;
		$kategori->nama = request('nama');
		$kategori->save();

		return redirect('kategori');
	}


	function editKategori(Kategori $kategori){
		$data['list_kategori'] = Kategori::all();
		return view('admin.kategori.edit',$data);
	}

	function updateKategori(Kategori $kategori){
		$kategori->nama = request('nama');
		$kategori->save();

		return redirect('kategori');
	}


		function destroy(Kategori $kategori){
		$kategori->delete();
		return redirect('kategori');
	}



}