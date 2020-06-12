@extends('layouts.app')

@section('content')



<div class="container panel panel-default">
<div class="row">
<div class="col-sm-4">
<form method="post" action="{{url('/Language_test/store')}}">
<input name="_token" type="hidden" value="{{ csrf_token() }}">
<div class="input-group">New catagory name
<input type="text" name="cat_name" class="form-control" placeholder="An unique name is preffered">
<div class="input-group-btn">
<button class="btn btn-default" type="submit">
<i class="fa fa-plus"></i>
</button>
</div>
</div>
</form>
</div>
<div class="col-sm-4">
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
</div>
<div class="col-sm-4">

</div>
</div>
<br />
<div class="row">

@foreach ($cats as $catagory_name)

<div class="col-sm-3">

<div class="cardz purple">
<button type="button" class="close color_white delete_btn" value="{{$catagory_name->id}}" >&times;</button>

  <h2> {{$catagory_name->cat_name}}  </h2>
  <p> 
Created by : {{$catagory_name->made_by}}  <br>
Created time : {{ $catagory_name->created_at}} <br>
Total exams in : 2
  </p>

<a href="{{ route('step1', ['parameter' => $catagory_name->id]) }}" class="buttonz">
Make new</a>

</div>
</div>

@endforeach
</div>


<br />
</div>
</div>
<div id="snackbar">Success ... </div>

<script type="text/javascript">

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

    $(".delete_btn").click(function(e){

        e.preventDefault();
        var id = $(this).val(); 

var flag = confirm("Are you sure to delete the category and it's contents ?");

if (flag){  
	$.ajax({
           type:'POST',
           url:'/ajax_delete_Request',
           data:{id:id},
           success:function(data){
             if (data) {
             	popup();
             }
             setTimeout(function () { document.location.reload(true); }, 2000);
           }
        });}

      
	});

function popup() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>


@endsection

