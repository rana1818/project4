<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yards', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('courseidYard')->default(-1);
            $table->integer('teeidYard')->default(-1);
          //  $table->integer('courseId_yard')->references('id')->on('courses');
           // $table->integer('teeId_yard')->references('id')->on('tees');
                        $table->integer('dist1')->default(-1);
                        $table->integer('dist2')->default(-1);
                        $table->integer('dist3')->default(-1);
                        $table->integer('dist4')->default(-1);
                        $table->integer('dist5')->default(-1);
                        $table->integer('dist6')->default(-1);
                        $table->integer('dist7')->default(-1);
                        $table->integer('dist8')->default(-1);
                        $table->integer('dist9')->default(-1);
                        $table->integer('dist10')->default(-1);
                        $table->integer('dist11')->default(-1);
                        $table->integer('dist12')->default(-1);
                        $table->integer('dist13')->default(-1);
                        $table->integer('dist14')->default(-1);
                        $table->integer('dist15')->default(-1);
                        $table->integer('dist16')->default(-1);
                        $table->integer('dist17')->default(-1);
                        $table->integer('dist18')->default(-1);




      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('yards');
    }
}
