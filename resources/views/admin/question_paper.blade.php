@extends('layouts.app')

@section('content')
 

<div class="row"> 
<div class="col-sm-2"> </div>
<div class="col-sm-8"> 

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
<p class="txt_justify">
 {{$n++}} ) {{$value->the_question}}
</p>
@endforeach

@foreach($all_para_Q as $value)
<p class="txt_justify">
 {{$n++}} ) {{$value->the_question}}
</p>
@endforeach

 

</div>
 
</div> 
</div>
<div class="col-sm-2"> </div>
</div> 


@endsection