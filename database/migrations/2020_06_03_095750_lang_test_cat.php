<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LangTestCat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lang_test_cat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_name', 100)->unique();
            $table->string('made_by',100);
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
              Schema::drop("Lang_test_cat");

    }
}
