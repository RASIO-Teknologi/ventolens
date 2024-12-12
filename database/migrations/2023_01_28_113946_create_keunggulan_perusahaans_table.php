<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeunggulanPerusahaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keunggulan_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');

            $table->string('keunggulan_judul_1');
            $table->string('keunggulan_deskripsi_1');
            $table->string('keunggulan_gambar_1')->nullable()->default('noimage.png');

            $table->string('keunggulan_judul_2');
            $table->string('keunggulan_deskripsi_2');
            $table->string('keunggulan_gambar_2')->nullable()->default('noimage.png');

            $table->string('keunggulan_judul_3');
            $table->string('keunggulan_deskripsi_3');
            $table->string('keunggulan_gambar_3')->nullable()->default('noimage.png');

            $table->string('keunggulan_judul_4');
            $table->string('keunggulan_deskripsi_4');
            $table->string('keunggulan_gambar_4')->nullable()->default('noimage.png');
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
        Schema::dropIfExists('keunggulan_perusahaan');
    }
}
