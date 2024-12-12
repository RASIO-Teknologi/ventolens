<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable()->default('noimage.png');
            $table->string('deskripsi');

            $table->string('telepon');
            $table->string('icon_telepon')->nullable()->default('noimage.png');

            $table->string('email');
            $table->string('icon_email')->nullable()->default('noimage.png');

            $table->text('alamat');
            $table->string('icon_alamat')->nullable()->default('noimage.png');

            $table->text('jam');
            $table->string('icon_jam')->nullable()->default('noimage.png');

            $table->string('sosmed_link_1');
            $table->string('sosmed_icon_1')->nullable()->default('noimage.png');

            $table->string('sosmed_link_2');
            $table->string('sosmed_icon_2')->nullable()->default('noimage.png');

            $table->string('sosmed_link_3');
            $table->string('sosmed_icon_3')->nullable()->default('noimage.png');

            $table->string('sosmed_link_4');
            $table->string('sosmed_icon_4')->nullable()->default('noimage.png');
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
        Schema::dropIfExists('footer');
    }
}
