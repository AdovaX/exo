<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllExamNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
           Schema::create('all_exam_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('made_by', 100);
            $table->string('exam_name', 100); 
            $table->integer('sub_cat_id');
            $table->integer('main_cat_id');
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
        //
    }
}
