<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Konten;
use App\Models\Komentar;


class IndexController extends Controller{

	function showLokal(){
		$data['list_kategori'] = Kategori::all();
		$data['list_blog'] = Konten::all();
		return view('index',$data);
	}
	function showIndex(){
		$data['list_kategori'] = Kategori::all();
		$data['list_blog'] = Konten::all();
		return view('index',$data);
	}
	function showKonten($blog){
		$data['blog'] = Konten::find($blog);
		return view('konten', $data);
	}

	function komentaProses(){
		$komentar = new Komentar;
		$komentar->nama = request('nama');
		$komentar->email = request('email');
		$komentar->komentar = request('komentar');
		$komentar->save();

		return redirect('konten')->with('success', 'Data Berhasil Ditambahkan');
	}

}