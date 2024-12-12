<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamKamisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_kami', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jobdesc');
            $table->string('gambar')->nullable()->default('noimage.png');
            $table->string('sosmed_link_1');
            $table->string('sosmed_icon_1')->nullable()->default('noimage.png');
            $table->string('sosmed_link_2');
            $table->string('sosmed_icon_2')->nullable()->default('noimage.png');
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
        Schema::dropIfExists('team_kami');
    }
}
