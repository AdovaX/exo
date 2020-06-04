<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model_lang_cat;

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
}