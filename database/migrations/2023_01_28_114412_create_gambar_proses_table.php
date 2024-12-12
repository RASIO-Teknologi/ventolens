<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambarProsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambar_proses', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nama_1');
            $table->string('gambar_1')->nullable()->default('noimage.png');
            $table->string('nama_2');
            $table->string('gambar_2')->nullable()->default('noimage.png');
            $table->string('nama_3');
            $table->string('gambar_3')->nullable()->default('noimage.png');
            $table->string('nama_4');
            $table->string('gambar_4')->nullable()->default('noimage.png');
            $table->string('nama_5');
            $table->string('gambar_5')->nullable()->default('noimage.png');
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
        Schema::dropIfExists('gambar_proses');
    }
}
