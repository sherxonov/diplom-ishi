<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyumlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyumlars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('buyum_nomi');
            $table->integer('yangi_soni');
            $table->integer('eski_soni');
            $table->unsignedBigInteger('birlik_id');
            $table->foreign('birlik_id')->references('id')
                ->on('birliklars');
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
        Schema::dropIfExists('buyumlars');
    }
}
