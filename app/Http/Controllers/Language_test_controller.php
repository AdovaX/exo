<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model_lang_cat;
use App\Model_lang_step1;
use App\Model_lang_para_step1;
use Illuminate\Support\Facades\DB;

class Language_test_controller extends Controller
{
public function __construct()
{
 $this->middleware('auth');
}
public function index(){

 $books = Model_lang_cat::all();



 return view('admin.language_test_home', ['title' => 'Language test','cats' => $books ]);

}
public function store(Request $request){

$validatedData = $request->validate([
'cat_name' => 'required|unique:Lang_test_cat'
]);
$request['made_by']= "Admin";
Model_lang_cat::create($request->all());
return redirect()->back()->with('success', 'You have created a new catagory.');
}
public function ajax_delete_Request(Request $request)
{

$blog = Model_lang_cat::findOrFail($request['id']);
$blog->delete();
echo "1";
}

public function step1(Request $request){

$language_category_id      = $request['id'];

$list_of_para_questions    = DB::table('Lang_para_questions')
                             ->where('sub_cat_id', '=',$language_category_id)->get();

$list_of_single_questions  = DB::table('Lang_questions')
                             ->where('sub_cat_id', '=',$language_category_id)->get();

return view('admin.language_test_maker' ,
	['title' => 'Language test making',
	 'lang_cat' => $language_category_id,
	 'list_of_single_questions' => $list_of_single_questions, 
	 'list_of_para_questions' => $list_of_para_questions]);
}

public function single_type(Request $request){

$request['made_by']= "Admin";
$flag =  Model_lang_step1::create($request->all());
return redirect()->back();
}
public function para_type(Request $request){

$request['made_by']= "Admin";
$flag =  Model_lang_para_step1::create($request->all());
return redirect()->back();
}

public function del_single(Request $request){

DB::table('Lang_questions')->where('id', '=', $request['id'])->delete();
 
echo "Deleted the record.";
}
public function del_para(Request $request){

DB::table('Lang_para_questions')->where('id', '=', $request['id'])->delete();
 
echo "Deleted the record.";
}


}
