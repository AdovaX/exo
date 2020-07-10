<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_all_exam_names extends Model
{
     protected $table ="all_exam_names";
    protected $fillable = ['exam_name','made_by','sub_cat_id','main_cat_id'];
}
