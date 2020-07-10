<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_lang_para_step1 extends Model
{
    
    protected $table ="Lang_para_questions";
    protected $fillable = ['made_by','the_question','sub_cat_id',];
}
