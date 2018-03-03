<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use IDCryptHelper;

use App\Kategori;

class UserController extends Controller
{
  public function Home(){
    return view('user.Home');
  }

  public function DataKategori(){
    $Kategori = Kategori::all();

    return view('user.KategoriData', ['Kategori' => $Kategori]);
  }

  public function SubmitTambahDataKategori(Request $request){
    $Kategori = new Kategori;

    $Kategori->nama_kategori = $request->nama_kategori;
    $Kategori->save();

    return redirect(Route('Data-Kategori'))->with('success', 'Data Kategori Berhasil Ditambahkan');
  }

  public function HapusDataKategori($Id){
    $Id = IDCryptHelper::Decrypt($Id);
    $Kategori = Kategori::findOrFail($Id);
    $Kategori->delete();

    return redirect(Route('Data-Kategori'))->with('success', 'Data Kategori Berhasil Dihapus');
  }

  public function SubmitEditDataKategori(Request $request, $Id){
    $Id = IDCryptHelper::Decrypt($Id);
    $Kategori = Kategori::findOrFail($Id);
    $Kategori->nama_kategori = $request->nama_kategori;
    $Kategori->save();

    return redirect(Route('Data-Kategori'))->with('success', 'Data Kategori Berhasil Diedit');
  }
}
