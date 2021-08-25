<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDedurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deduras', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->constrained();
            $table->bigInteger('genba_id')->constrained();
            $table->date('date');
            $table->tinyInteger('shift');
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
        Schema::dropIfExists('deduras');
    }
}
