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
        Schema::create('trades', function (Blueprint $table) {
            $table->bigIncrements('Deal')->from(3217172)->unsigned();
            $table->bigInteger('Login')->default(0);
            $table->integer('Entry')->default(0);
            $table->integer('Action')->default(0);
            $table->Time()->date()->nullable();
            $table->string('Symbol');
            $table->double('Price');
            $table->double('Profit');
            $table->bigInteger('Volume');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
};
