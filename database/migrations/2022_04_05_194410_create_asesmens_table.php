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
        Schema::create('asesmens', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('unikom_id');
            $table->string('asesmen');
            $table->timestamps();
            $table->foreign('unikom_id')
                ->references('id')
                ->on('unikoms')
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
        Schema::dropIfExists('asesmens');
    }
};
