<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->foreignId("tipe_id")->nullable();
            $table->integer("no_kamar")->nullable();
            $table->string("gambar");
            $table->string("status")->default("tidak terisi");
            $table->string("deskripsi", 1000);
            $table->string("harga");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('kamars');
    }
}