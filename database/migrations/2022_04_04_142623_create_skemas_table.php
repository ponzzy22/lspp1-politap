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
        Schema::create('skemas', function (Blueprint $table) {
            $table->id();
            $table->string('skema')->unique();
            $table->string('slug')->unique();
            $table->string('kode')->unique();
            $table->foreignId('prodi_id');
            $table->foreignId('status_id');
            $table->foreignId('tuk_id');
            $table->foreignId('asesor_id');
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
        Schema::dropIfExists('skemas');
    }
};
