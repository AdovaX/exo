<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_sub_categories extends Model
{
    protected $table ="Sub_categories";
    protected $fillable = ['cat_name','made_by','description','main_cat_id'];

}
