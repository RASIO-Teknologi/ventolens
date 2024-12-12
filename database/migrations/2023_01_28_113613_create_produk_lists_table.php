<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_list', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->double('harga', 16,0)->nullable()->default(0);
            $table->text('deskripsi');
            $table->string('keunggulan_1');
            $table->string('keunggulan_2');
            $table->string('keunggulan_3');
            $table->string('keunggulan_4');
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
        Schema::dropIfExists('produk_list');
    }
}
