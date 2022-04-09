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
        Schema::create('registers', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('kode_register')->unique();
            $table->string('skema_id');
            $table->string('user_id');
            $table->unsignedBigInteger('xnxx_id');
            $table->timestamps();
            $table->foreign('xnxx_id')
                ->references('id')
                ->on('xnxxes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
};
