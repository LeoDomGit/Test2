<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id',true,false);
            $table->string('name');
            $table->integer('idStore',false,false);
            $table->integer('price',false,false);
            $table->boolean('status')->defined(0);
            $table->string('note')->nullable();
            $table->timestamps();
            $table->foreign('idStore')->references('id')->on('stores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
