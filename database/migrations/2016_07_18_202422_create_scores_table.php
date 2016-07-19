<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	    $table->integer('courseidScore')->default(-1);
	    $table->integer('teeidScore')->default(-1);
	   // $table->integer('courseId_score')->references('id')->on('courses');
	  //  $table->integer('teeId_score')->references('id')->on('tees'); 
                        $table->integer('score1')->default(-1);
			$table->integer('score2')->default(-1); 
 			$table->integer('score3')->default(-1); 
 			$table->integer('score4')->default(-1); 
 			$table->integer('score5')->default(-1); 
 			$table->integer('score6')->default(-1); 
 			$table->integer('score7')->default(-1); 
 			$table->integer('score8')->default(-1); 
 			$table->integer('score9')->default(-1); 
 			$table->integer('score10')->default(-1); 
 			$table->integer('score11')->default(-1); 
 			$table->integer('score12')->default(-1); 
 			$table->integer('score13')->default(-1); 
 			$table->integer('score14')->default(-1); 
 			$table->integer('score15')->default(-1); 
 			$table->integer('score16')->default(-1); 
 			$table->integer('score17')->default(-1); 
 			$table->integer('score18')->default(-1); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('scores');
    }
}
