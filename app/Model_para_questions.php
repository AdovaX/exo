<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_para_questions extends Model
{
    protected $table ="ParaQuestions";
    protected $fillable = ['made_by','question_name','para_question','sub_cat_id','main_cat_id'];
}
