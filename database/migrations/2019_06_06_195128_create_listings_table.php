<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
	        $table->increments('id');
	        $table->string('title');
	        $table->string('country');
	        $table->string('type');
	        $table->integer('stars');
	        $table->text('description');
	        $table->string('img1');
	        $table->string('img2');
	        $table->string('img3');
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
        Schema::dropIfExists('listings');
    }
}
