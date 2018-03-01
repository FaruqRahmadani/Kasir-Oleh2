<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdukTransaksisTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('produk_transaksis', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('transaksi_id');
      $table->integer('produk_id');
      $table->integer('jumlah');
      $table->double('harga');
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('barang_transaksis');
  }
}
