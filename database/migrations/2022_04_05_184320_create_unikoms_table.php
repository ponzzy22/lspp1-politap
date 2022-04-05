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
        Schema::create('unikoms', function (Blueprint $table) {
            $table->id('id');
            $table->BigInteger('skema_id');
            $table->string('unikom');
            $table->timestamps();
            $table->foreign('skema_id')
                ->references('id')
                ->on('skemas')
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
        Schema::dropIfExists('unikoms');
    }
};
