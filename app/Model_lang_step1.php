<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_lang_step1 extends Model
{
    protected $table ="Lang_questions";
    protected $fillable = ['the_question','sub_cat_id','made_by'];
}
