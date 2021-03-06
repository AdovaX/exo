@extends('layouts.app')

@section('content')



<div class="container">
<div class="row">
<div class="col-md-12"> 
<!-- Nav tabs -->
<div class="card">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active">
<a href="#make" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-file"></i>  <span>Make</span></a>
</li>
<li role="presentation">
<a href="#inbox" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-inbox"></i>  <span>Inbox</span></a>
</li>
<li role="presentation">
<a href="#published" aria-controls="messages" role="tab" data-toggle="tab"><i class="fa fa-eye"></i> <span>Published</span></a>
</li>
<li role="presentation">
<a href="#live" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-bullseye"></i>  <span>Live</span></a>
</li>
<li role="presentation">
<a href="#extra" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-plus-square-o"></i>  <span>extra</span></a>
</li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="make">

<div class="w3-bar">
<a href="{{route('Language')}}" class="w3-bar-item w3-button" >Go back 
<span class="fa fa-backward"> </span> </a>
<button class="w3-bar-item w3-button w3-black" data-toggle="modal" data-target="#single">Single 
<span class="fa fa-snowflake-o"> </span> </button>
<button class="w3-bar-item w3-button w3-black" data-toggle="modal" data-target="#paragraph">Paragraph  
<span class="fa fa-paragraph"> </span> </button>
<button class="w3-bar-item w3-button w3-black" data-toggle="modal" data-target="#optional">Optional 
<span class="fa fa-check-square-o "> </span></button>
<button class="w3-bar-item w3-button w3-black" data-toggle="modal" data-target="#image">Image 
<span class="fa fa-image"> </span></button>
<button class="w3-bar-item w3-button w3-black" data-toggle="modal" data-target="#multi">Multi type 
<span class="fa fa-braille"> </span></button>
<button class="w3-bar-item w3-button w3-black" data-toggle="modal" data-target="#pdf">Document
<span class="fa fa-file"> </span></button>
<button class="w3-bar-item w3-button w3-black reset_tb" >Reset
<span class="fa fa-refresh"> </span></button>
</div>
@if($errors->any())
<div class="alert  no_margin error_msg">
<p>{{$errors->first()}}</p>
</div>
@endif
@if (\Session::has('success'))
<div class="alert success_msg">
{{ \Session::get('success') }}
</div>
@endif

<form action="{{url('/Language_test/finished')}}" method="post">
  <input name="_token" type="hidden" value="{{ csrf_token() }}">
<input type="hidden" name="s_bulk" value="{{$list_of_single_questions}}">
<input type="hidden" name="p_bulk" value="{{$list_of_para_questions}}">

<div class="show_questions  "> 


<div class="row">

@foreach ($list_of_single_questions as $value)
<div class="col-lg-6 m-15px-tb">
<div  class="resume-box single_boxer">
<span class="time">{{$value->updated_at}}</span>
<span class="time_green">{{$value->made_by}}</span> &nbsp;
<span class=""> <i class="fa fa-snowflake-o"></i> </span>
<button type="button" class="w3-button w3-right time del_single_btn" value="{{$value->id}}"> Delete 
<span class="fa fa-trash "></span> </button>
<h5>{{$n++.' ) '.$value->the_question}}</h5>
<p>
{{$lang_cat_name->cat_name}} 
</p>

</div>
</div>

@endforeach
</div>

<div class="row">
@foreach ($list_of_para_questions as $value)

<div class="col-lg-6 m-15px-tb">
<div  class="resume-box para_boxer">
<span class="time">{{$value->updated_at}}</span>
<span class="time_green">{{$value->made_by}}</span> &nbsp;
<span class=""> <i class="fa fa-paragraph"></i> </span>
<button type="button" class="w3-button w3-right time del_para_btn" value="{{$value->id}}"> Delete 
<span class="fa fa-trash "></span> </button>
<h5>{{$n++.' ) '.$value->the_question}}</h5>
<p>
{{$lang_cat_name->cat_name}} 
</p>

</div>
</div>


@endforeach
</div> 
</div>

<div class="row"> 
<div class="col-sm-6"> </div> 
<div class="col-sm-6"> 

<div class="finished_s1  ">
<input type="text" name="exam_name" class="form-control" placeholder="Question paper name" required>
<div class="input-group-btn">
<button class="btn btn-success" type="submit" type="submit">
Finished making 
<span class="fa fa-share"></span>
</button>
</div>
</div>

</div>
 
</div>


</form>

</div>
<div role="tabpanel" class="tab-pane" id="inbox">



</div>
<div role="tabpanel" class="tab-pane" id="published">

<section   >
<div class=" ">
 
<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Exam name</th>
        <th>Made by</th>
        <th>Category</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php $n = 1; ?>
@foreach ($list_of_all_exam_names as $value)
      <tr>
        <td>{{$n++}}</td>
        <td>{{$value->exam_name}}</td>
        <td>{{$value->made_by}}</td>
        <td>{{$value->cat_name}}</td>
        <td>{{$value->created_at}}</td>
        <td>
 
 
<div class="btn-group">
<a  class="btn btn-primary edit_q" 
href="{{url('Language_test/edit_question')."/".$value->exam_name}}" target="_blank">Edit 
<span class="fa fa-edit"></span> </a>

<button type="button" class="btn btn-primary delete_q"  value="{{$value->id}}">Delete
<span class="fa fa-trash"></span> 
</button>

<a  class="btn btn-primary view_q"
 href="{{ url('Language_test/examination')."/".$value->exam_name}}" target="_blank">View
<span class="fa fa-eye"></span> 
</a>
</div>
</td>
</tr>
@endforeach
    </tbody>
  </table>
  </div>



</div>
</section>

</div>
<div role="tabpanel" class="tab-pane" id="live">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..
</div>
<div role="tabpanel" class="tab-pane" id="extra">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
</div>
</div>
</div>
</div>
</div>




<div id="single" class="modal fade lang_model" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<form method="post" action="{{url('/Language_test/single_type')}}">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
<input name="sub_cat_id" id="sub_cat_id" type="hidden" value="{{ $lang_cat }}">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Single type questions.</h4>
</div>
<div class="modal-body">
<p>Please enter your question.</p>
<textarea name="the_question" id="the_question" class="form-control" rows="5" required=""></textarea>
</div>
<div class="modal-footer">
<button type="submit" class="btn w3-button single_btn" >Proceed  <span class="fa fa-send"></span> </button>
</div>
</form>
</div>
</div>
</div>

<div id="paragraph" class="modal fade lang_model" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<form method="post" action="{{url('/Language_test/para_type')}}">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
<input name="sub_cat_id" id="sub_cat_id" type="hidden" value="{{ $lang_cat }}">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Paragraph type questions.</h4>
</div>
<div class="modal-body">
<p>Please enter your question.</p>
<textarea name="the_question" class="form-control" rows="5"></textarea>
</div>
<div class="modal-footer">
<button type="submit" class="btn w3-button" >Proceed  <span class="fa fa-send"></span> </button>
</div>
</form>
</div>
</div>
</div>


<div id="optional" class="modal fade lang_model" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Optional type questions.</h4>
</div>
<div class="modal-body">
<p>Please enter your question.</p>
<textarea name="" class="form-control" rows="5"></textarea>
</div>
<div class="modal-footer">
<button type="button" class="btn w3-button" >Proceed  <span class="fa fa-send"></span> </button>
</div>
</div>
</div>
</div>


<div id="image" class="modal fade lang_model" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Image type questions.</h4>
</div>
<div class="modal-body">
<p>Please enter your question.</p>
<textarea name="" class="form-control" rows="5"></textarea>
</div>
<div class="modal-footer">
<button type="button" class="btn w3-button" >Proceed  <span class="fa fa-send"></span> </button>
</div>
</div>
</div>
</div>

<div id="multi" class="modal fade lang_model" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Multiple type question.</h4>
</div>
<div class="modal-body">
<p>Please enter your question.</p>
<textarea name="" class="form-control" rows="5"></textarea>
</div>
<div class="modal-footer">
<button type="button" class="btn w3-button" >Proceed  <span class="fa fa-send"></span> </button>
</div>
</div>
</div>
</div>

<div id="pdf" class="modal fade lang_model" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Upload PDF document.</h4>
</div>
<div class="modal-body">
<p>Choose pdf type file</p>
<input type="file" name="" value="" placeholder="" class="form-control">
</div>
<div class="modal-footer">
<button type="button" class="btn w3-button" >Proceed  <span class="fa fa-send"></span> </button>
</div>
</div>
</div>
</div>


<script>
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$('.delete_q').click(function(){
var id = $(this).val();
$.ajax({
type:'POST',
url:'/Language_test/del_question',
data:{id:id},
success:function(data){
alert(id);
location.reload();
}
});
});


$('.del_single_btn').click(function(){
var id = $(this).val();
$.ajax({
type:'POST',
url:'/Language_test/del_single',
data:{id:id},
success:function(data){
alert(data);
location.reload();
}
});
});




$('.reset_tb').click(function(){
$.ajax({
type:'POST',
url:'/Language_test/reset',
success:function(data){
location.reload();
}
});
});
$('.del_para_btn').click(function(){

var id = $(this).val();

$.ajax({
type:'POST',
url:'/Language_test/del_para',
data:{id:id},
success:function(data){
alert(data);
location.reload();


}
});

});

</script>



@endsection