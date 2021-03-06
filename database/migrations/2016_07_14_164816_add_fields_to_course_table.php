<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
        		$table->integer('par1')->default(-1); 
 			$table->integer('par2')->default(-1); 
 			$table->integer('par3')->default(-1); 
 			$table->integer('par4')->default(-1); 
 			$table->integer('par5')->default(-1); 
 			$table->integer('par6')->default(-1); 
 			$table->integer('par7')->default(-1); 
 			$table->integer('par8')->default(-1); 
 			$table->integer('par9')->default(-1); 
 			$table->integer('par10')->default(-1); 
 			$table->integer('par11')->default(-1); 
 			$table->integer('par12')->default(-1); 
 			$table->integer('par13')->default(-1); 
 			$table->integer('par14')->default(-1); 
 			$table->integer('par15')->default(-1); 
 			$table->integer('par16')->default(-1); 
 			$table->integer('par17')->default(-1); 
 			$table->integer('par18')->default(-1); 
  
 			$table->integer('hdcp1')->default(-1); 
 			$table->integer('hdcp2')->default(-1); 
 			$table->integer('hdcp3')->default(-1); 
 			$table->integer('hdcp4')->default(-1); 
 			$table->integer('hdcp5')->default(-1); 
 			$table->integer('hdcp6')->default(-1); 
 			$table->integer('hdcp7')->default(-1); 
			$table->integer('hdcp8')->default(-1); 
 			$table->integer('hdcp9')->default(-1); 
 			$table->integer('hdcp10')->default(-1); 
 			$table->integer('hdcp11')->default(-1); 
 			$table->integer('hdcp12')->default(-1); 
 			$table->integer('hdcp13')->default(-1); 
 			$table->integer('hdcp14')->default(-1); 
 			$table->integer('hdcp15')->default(-1); 
 			$table->integer('hdcp16')->default(-1); 
 			$table->integer('hdcp17')->default(-1); 
 			$table->integer('hdcp18')->default(-1); 
  
			$table->integer('par-in')->default(-1); 
 			$table->integer('par-out')->default(-1); 
 			$table->integer('totalpar')->default(-1); 

	

  //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}
