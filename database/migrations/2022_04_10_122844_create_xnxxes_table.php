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
        Schema::create('xnxxes', function (Blueprint $table) {
            $table->id('id');
            $table->bigInteger('user_id');
            $table->bigInteger('unikom_id');
            $table->string('unikom_name');
            $table->string('skema_name');
            $table->bigInteger('skema_id');
            $table->string('image');
            $table->string('status');
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
        Schema::dropIfExists('xnxxes');
    }
};
