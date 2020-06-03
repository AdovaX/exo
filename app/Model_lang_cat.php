<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model_lang_cat extends Model
{
    protected $table ="Lang_test_cat";
    protected $fillable = ['cat_name','made_by','description'];

}
