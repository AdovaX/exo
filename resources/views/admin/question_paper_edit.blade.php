@extends('layouts.app')

@section('content')
 

<div class="row"> 
<div class="col-sm-2"> </div>
<div class="col-sm-8"> 
<form action="{{url('/Language_test/edit_question')}}" method="post">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
<input name="question_name" id="question_name" type="hidden" value="{{$question_name}}">
<div class="modal-content w3-leftbar w3-border-blue">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"> </button>
<h4 class="modal-title w3-center">{{$question_name}}</h4>
<i>Created by {{$created_by}}</i>
</div>
<div class="modal-body"> 
<!--
id made_by  the_question 	 	
-->
<?php $n=1; ?>

@foreach($all_single_Q as $value)
<div class="w3-padding">{{$n++}} ) <i>single question</i>
<textarea name="all_single_Q[]" class="form-control" id="single{{$value->id}}">{{$value->the_question}}</textarea> 
<button type="button" class="btn w3-button w3-right sq_btn" id="" value="{{$value->id}}">
	<span class="fa fa-refresh"></span></button>
</div>
@endforeach

@foreach($all_para_Q as $value)
<div class="w3-padding">{{$n++}} ) <i>paragraph question</i>
<textarea name="all_para_Q[]" class="form-control">{{$value->the_question}}</textarea>
 <button type="button" class="btn  w3-button w3-right"><span class="fa fa-refresh"></span></button>
</div>
@endforeach
 
<br>
</div>
  
</div> 
</form>

</div>
<div class="col-sm-2"> </div>
</div> 
<script type="text/javascript">
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$('.sq_btn').click(function(){
var id = $(this).val();
 
var question = $("#single"+id).val();
var question_name = $('#question_name').val(); 
var flag = 1; 
$.ajax({
type:'POST',
url:'{{URL::route('edit_single_q')}}',
data:{id:id,question:question,flag:flag,question_name:question_name},
success:function(data){
alert(data); 


}
});


	});
</script>

@endsection