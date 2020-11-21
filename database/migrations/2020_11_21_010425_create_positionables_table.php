<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positionables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('position_id');
            $table->morphs('positionable');
            $table->foreignId('character_id');
            $table->timestamp('from');
            $table->timestamp('till');
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
        Schema::dropIfExists('positionables');
    }
}
