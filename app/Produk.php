<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
  public function Kategori(){
    return $this->hasOne('App\Kategori');
  }
}
