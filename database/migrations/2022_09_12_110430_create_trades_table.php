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
            $table->bigIncrements('Deal')->from(3217170
            )->unsigned();
            $table->bigInteger('Login')->default(0);
            $table->integer('Entry')->default(0);
            $table->integer('Action')->default(0);
            $table->timestamp('Time')->useCurrent()->nullable();
            $table->string('Symbol');
            $table->double('Price')->default(0);
            $table->double('Profit')->default(0);
            $table->bigInteger('Volume')->default(0);
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
