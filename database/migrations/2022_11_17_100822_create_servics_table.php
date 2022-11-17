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
        Schema::create('servics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('adres', 500);
            $table->string('phone', 20);
            $table->string('img1');
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servics');
    }
};
