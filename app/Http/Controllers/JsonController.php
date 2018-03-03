<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use IDCryptHelper;
use App\Kategori;

class JsonController extends Controller
{
  public function SingleDataKategori($Id){
    $Id = IDCryptHelper::Decrypt($Id);
    $Kategori = Kategori::findOrFail($Id);

    return response()->json($Kategori);
  }
}
