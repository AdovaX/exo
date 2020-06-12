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

      
      make


          </div>
          <div role="tabpanel" class="tab-pane" id="inbox">







          </div>
          <div role="tabpanel" class="tab-pane" id="published">


<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Question</th>
        <th>Published on</th>
        <th>Authur</th>
        <th>Attended</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
      </tr>
    </tbody>
  </table>
  </div> 

          </div>
          <div role="tabpanel" class="tab-pane" id="live">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..
          </div>
          <div role="tabpanel" class="tab-pane" id="extra">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
        </div>
      </div>
    </div>
  </div>
</div>














@endsection