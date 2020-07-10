<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SingleQuestions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('SingleQuestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('made_by', 100);
            $table->string('question_name', 100);
            $table->text('single_question'); 
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
