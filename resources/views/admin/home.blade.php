@extends('layouts.app')

@section('content')
<style type="text/css">


</style>

 
    <section class="container pt-3 mb-3">

         <div class="row pt-5 mt-30  ">
            <div class="col-lg-4 col-sm-6 mb-30 pb-5 top_margin2  ">
                <div class="card " href="#"><i class="fa fa-bullseye live_icon color_green   beats"></i>
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;">
                      <i class="fa fa-language fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Language Test</h3>
                        <p class="card-text text-sm">
                          Language test includes different levels of JLPT exams. You can easily create exams in each catagory.
                        </p>
                          <div class="w3-row   no_margin">
                          <div class="w3-col l6 s6 w3-left"><p>Total exams : 5</p></div>
                          <div class="w3-col l6 s6 w3-right "><p>Total catagories : 5</p></div>
                          </div>
                          <br>
                          <a href="{{route('Language')}}" class=" cust_button w3-pink btn"> Click to Manage</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5  top_margin">
                <div class="card " href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;">
                      <i class="fa fa-hourglass-end fa-3x head-icon"></i></div>
                  <div class="card-body text-center">
                      <h3 class="card-title pt-1">General Test</h3>
                      <p class="card-text text-sm">
                      You can upload Aptitude test, IQ test , test for interviews and other type of questions.
                       </p>
                        <div class="w3-row   no_margin">
                        <div class="w3-col l6 s6 w3-left"><p>Total exams : 5</p></div>
                        <div class="w3-col l6 s6 w3-right "><p>Total catagories : 5</p></div>
                        </div>
                        <br>
                        <form  action="" method="post">
                        <button type="button" name="button" class=" cust_button w3-pink btn">
                        Click to Manage&nbsp; </button>
                        </form>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5  top_margin">
                <div class="card " href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;">
                    <i class="fa fa-gears fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Technical Test</h3>
                        <p class="card-text text-sm">
                        It test based on Language eg PHP, Java, Dot net etc, also various sub tests can be able to make.
                         </p>
                          <div class="w3-row   no_margin">
                          <div class="w3-col l6 s6 w3-left"><p>Total exams : 5</p></div>
                          <div class="w3-col l6 s6 w3-right "><p>Total catagories : 5</p></div>
                          </div>
                          <br>
                          <form  action="" method="post">
                          <button type="button" name="button" class=" cust_button w3-pink btn">
                          Click to Manage&nbsp; </button>
                          </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5 mob_top_margin">
                <div class="card " href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-car fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Teachers Data</h3>
                          <p class="card-text text-sm">
                          Click the button to see all the teachers' data like exams conducted , students owned etc.
                           </p>
                            <div class="w3-row   no_margin">
                            <div class="w3-col l6 s6 w3-left"><p>Total teachers : 5</p></div>
                            <div class="w3-col l6 s6 w3-right "><p>Live teachers : 5</p></div>
                            </div>
                            <br>
                            <form  action="" method="post">
                            <button type="button" name="button" class=" cust_button w3-pink btn">
                            Click to Manage&nbsp; </button>
                            </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5 mob_top_margin">
                <div class="card " href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-camera fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Student Data</h3>
                          <p class="card-text text-sm">
                          Click the button to see the student data like profile and completed exams etc.
                           </p>
                            <div class="w3-row   no_margin">
                            <div class="w3-col l6 s6 w3-left"><p>Total students : 5</p></div>
                            <div class="w3-col l6 s6 w3-right "><p>Live students : 5</p></div>
                            </div>
                            <br>
                            <form  action="" method="post">
                            <button type="button" name="button" class=" cust_button w3-pink btn">
                            Click to Manage&nbsp; </button>
                            </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-30 pb-5 mob_top_margin">
                <div class="card" href="#">
                    <div class="box-shadow bg-white rounded-circle mx-auto text-center" style="width: 90px; height: 90px; margin-top: -45px;"><i class="fa fa-image fa-3x head-icon"></i></div>
                    <div class="card-body text-center">
                        <h3 class="card-title pt-1">Exam List</h3>
                        <p class="card-text text-sm">
                        It shows the all exams from all teachers with approvel management and report generations.
                         </p>
                          <div class="w3-row   no_margin">
                          <div class="w3-col l6 s6 w3-left"><p>Total list : 5</p></div>
                          <div class="w3-col l6 s6 w3-right "><p>Total approved : 5</p></div>
                          </div>
                          <br>
                          <a href="{{route('Language')}}" class=" cust_button w3-pink btn"> Click to Manage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<br>
@endsection
