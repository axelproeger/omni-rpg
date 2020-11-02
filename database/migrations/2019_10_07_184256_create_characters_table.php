<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->boolean('active')->default(1);
            $table->boolean('main_character')->default(0);
            $table->string('type')->default('NEW');
            $table->string('slug');
            $table->string('avatar')->default('default.png');

            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->dateTime('birthday')->nullable();
            $table->string('birthplace')->nullable();
            $table->string('home_planet')->nullable();
            $table->string('family_status')->nullable();
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->string('siblings')->nullable();
            $table->string('children')->nullable();

            $table->string('gender')->nullable();
            $table->string('species')->nullable();
            $table->string('stature')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->text('physical_characteristics')->nullable();
            $table->text('race_characteristics')->nullable();

            $table->text('strengths')->nullable();
            $table->text('weaknesses')->nullable();
            $table->text('characteristics')->nullable();

            $table->text('interests')->nullable();

            $table->text('cv')->nullable();

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
        Schema::dropIfExists('characters');
    }
}
