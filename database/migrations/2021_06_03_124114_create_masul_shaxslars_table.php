<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasulShaxslarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masul_shaxslars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shaxs_ismi');
            $table->string('shaxs_familya');
            $table->string('shaxs_sharif');
            $table->unsignedBigInteger('mansab_id');
            $table->foreign('mansab_id')->references('id')->on('mansablars');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masul_shaxslars');
    }
}
