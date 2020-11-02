<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('rank_group_id');
            $table->timestamps();
            $table->string('name');
            $table->string('short_name');
        });

        Schema::table('characters', function($table) {
            $table->unsignedInteger('rank_id')->nullable()->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranks');
    }
}
