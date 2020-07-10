<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_single_questions extends Model
{
    protected $table ="SingleQuestions";
    protected $fillable = ['made_by','question_name','single_question','sub_cat_id','main_cat_id'];
}
