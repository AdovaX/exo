<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model_sub_categories;
use App\Model_lang_step1;
use App\Model_lang_para_step1;
use App\Model_single_questions;
use App\Model_para_questions;
use App\Model_all_exam_names;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class Language_test_controller extends Controller
{
public function __construct()
{
 $this->middleware('auth');
}
public function index(){

 $books = Model_sub_categories::all();



 return view('admin.language_test_home', ['title' => 'Language test','cats' => $books ]);

}
public function store(Request $request){

$validatedData = $request->validate([
'cat_name' => 'required|unique:Sub_categories'
]);
$request['made_by']= "Admin";
$request['main_cat_id']= 1;
Model_sub_categories::create($request->all());
return redirect()->back()->with('success', 'You have created a new category.');
}
public function ajax_delete_Request(Request $request)
{

$blog = Model_sub_categories::findOrFail($request['id']);
$blog->delete();
echo "1";
}

public function step1(Request $request){

$language_category_id      = $request['id'];

$request->session()->put('session_sub_cat',$request['id']);

$lang_cat_name = DB::table('Sub_categories')->where('id', $language_category_id )->first(); 

$list_of_para_questions    = DB::table('Lang_para_questions')
                             ->where('sub_cat_id', '=',$language_category_id)
                             ->where('made_by', '=','Admin')->get();

$list_of_single_questions  = DB::table('Lang_questions')
                             ->where('sub_cat_id', '=',$language_category_id)
                             ->where('made_by', '=','Admin')->get();

$list_of_all_exam_names = DB::table('Sub_categories')
   ->join('all_exam_names', 'Sub_categories.id', '=', 'all_exam_names.sub_cat_id') 
   ->where('all_exam_names.made_by', '=','Admin')->get();

 

return view('admin.language_test_maker' ,
	['title' => 'Language test making',
	 'lang_cat' => $language_category_id,
	 'list_of_single_questions' => $list_of_single_questions, 
	 'list_of_para_questions' => $list_of_para_questions,
	 'lang_cat_name' => $lang_cat_name,
	 'list_of_all_exam_names' => $list_of_all_exam_names,
	 'n'=>1 ]);
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
public function del_question(Request $request){

DB::table('all_exam_names')->where('id', '=', $request['id'])->delete();
 
echo "Deleted the record.";
}
public function del_para(Request $request){

DB::table('Lang_para_questions')->where('id', '=', $request['id'])->delete();
 
echo "Deleted the record.";
}

public function reset(Request $request){

DB::table('Lang_questions')->where('made_by', '=', "admin")->delete();
DB::table('Lang_para_questions')->where('made_by', '=', "admin")->delete();
 

}

public function edit_question(Request $request){

 

$question_name = $request['exam_name'];
$questions =  DB::table('all_exam_names')
->join('SingleQuestions','all_exam_names.exam_name','=','SingleQuestions.question_name')
->join('ParaQuestions','all_exam_names.exam_name','=','ParaQuestions.question_name')
->where('all_exam_names.exam_name',$question_name)
->select('*')
->get();
$all_single_Q = json_decode($questions[0]->single_question);
$all_para_Q = json_decode($questions[0]->para_question);
$created_by =$questions[0]->made_by;

return view('admin.question_paper_edit' ,
	['title' => 'Language test making',
	'created_by' =>$created_by,
	'question_name'=>$question_name,
	'all_single_Q' => $all_single_Q,
	'all_para_Q'=> $all_para_Q] );
}

public function edit_single_q(Request $request){

$question_id =$request['id'];
$question =$request['question'];
$category   =1;
$question_name =$request['question_name']; 

$questions =  DB::table('all_exam_names')
->join('SingleQuestions','all_exam_names.exam_name','=','SingleQuestions.question_name')
->join('ParaQuestions','all_exam_names.exam_name','=','ParaQuestions.question_name')
->where('all_exam_names.exam_name',$question_name)
->select('*')
->get();

 

if ($category == 1) {

$all_single_Q = json_decode($questions[0]->single_question);
 
$new  ="";
 

foreach ($all_single_Q as   $value) {
	if ( $value->id == $question_id) {
   $new_questions['id'] = $value->id;
   $new_questions['made_by'] = $value->made_by;
   $new_questions['the_question']=$question;
   $new_questions['sub_cat_id']=$value->sub_cat_id;
   $new_questions['created_at']=$value->created_at;
   $new_questions['updated_at']=$value->updated_at;

	}else{
   $new_questions['id'] = $value->id;
   $new_questions['made_by'] = $value->made_by;
   $new_questions['the_question']=$value->the_question;
   $new_questions['sub_cat_id']=$value->sub_cat_id;
   $new_questions['created_at']=$value->created_at;
   $new_questions['updated_at']=$value->updated_at;

	}
	 $new .= json_encode($new_questions).",";

}
$new = substr($new, 0, -1);
$new = "[".$new."]";


DB::update('update SingleQuestions set single_question = ? where question_name = ?',[$new,$question_name]);

}
 
 
}
 


public function examination(Request $request){

$question_name = $request['name'];

$questions =  DB::table('all_exam_names')
->join('SingleQuestions','all_exam_names.exam_name','=','SingleQuestions.question_name')
->join('ParaQuestions','all_exam_names.exam_name','=','ParaQuestions.question_name')
->where('all_exam_names.exam_name',$question_name)
->select('*')
->get();
$all_single_Q = json_decode($questions[0]->single_question);
$all_para_Q = json_decode($questions[0]->para_question);
$created_by =$questions[0]->made_by;
 
 
 
return view('admin.question_paper' ,
	['title' => 'Language test making',
	'created_by' =>$created_by,
	'question_name'=>$question_name,
	'all_single_Q' => $all_single_Q,
	'all_para_Q'=> $all_para_Q] );
 
}

public function finished(Request $request){

$validatedData = $request->validate([
'exam_name' => 'required|unique:all_exam_names'
]);


$total_single_Q = $request['s_bulk'];
$total_P_Q      = $request['p_bulk'];
$sub_cat_id     = $request->session()->get('session_sub_cat');
 	
DB::table('all_exam_names')->insert(
    ['exam_name' => $request['exam_name'], 'made_by' => "Admin", 
    'sub_cat_id' => $sub_cat_id ,'main_cat_id' => 1,
    'created_at' =>date("Y-m-d H:i:s", time()) ]
);

if (!is_null($total_single_Q)) {
$request['main_cat_id']     = 1;
$request['made_by']         = "Admin";
$request['question_name']   = $request['exam_name']; 
$request['single_question'] = $total_single_Q; 
$request['sub_cat_id']      = $sub_cat_id; 
Model_single_questions::create($request->all());
echo "Single";
}
if (!is_null($total_P_Q)) {
$request['main_cat_id']   = 1;
$request['made_by']       = "Admin";
$request['question_name'] = $request['exam_name']; 
$request['para_question'] = $total_P_Q; 
$request['sub_cat_id']    = $sub_cat_id; 
Model_para_questions::create($request->all());
echo "Para";
}
  


}

}
