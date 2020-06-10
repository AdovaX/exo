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
  <h2>
  {{$catagory_name->cat_name}}</h2>
  <p> 
Created by : Admin <br>
Created time : 22-02-2020 <br>
Total exams in : 2
  </p>


  <button class="buttonz">Make new</button>
</div>



</div>

@endforeach
</div>


<br />
</div>
</div>
@endsection
