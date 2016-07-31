@extends('frontend.layout.default')

@section('content')
<section id="registration" name="registration">
    <div id="portfoliowrap">
      <div class="row">
        <div class="col-md-10 col-lg-offset-2">
              <form method="post" action="{{action('CustomerController@doregister')}}" />
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <!--
                  firstname *   last name
                  email     *  re-enter email    *
                  password  *  re-enter password *
                  country   *  region *
                  birthdate   gender

                  -->
                  <div class=" m-b-lg">
                    <div class="col-md-6 col-lg-offset-2" >
                     <h1>Become an Online Chef</h1>
                   </div>
                  </div>
                  <div class="row m-b-lg">

                      <div class="col-sm-4" style="margin:2%;">
                        <div class="row">
                            <div class="form-group">
                               <input type="text" placeholder="* First Name" class="form-control" name="first_name" required>
                            </div>
                            <div class="form-group">
                              <input type="email" placeholder="* Email" class="form-control" name="email" required>
                            </div>
                            <div class="form-group">
                              <input type="password" placeholder="* Password"  class="form-control" name="password" required>
                            </div>
                            <div class="form-group">
                              <input type="text" placeholder="* Country"  class="form-control" name="country" required>
                            </div>
                            <div class="form-group">
                              <label  for="dob">Birthday:</label>
                              <input data-provide="datepicker" name="dob" id="dob">
                            </div>
                        </div>
                      </div>
                      <div class="col-sm-4" style="margin:2%;">
                        <div class="row">
                            <div class="form-group">
                               <input type="text" placeholder="Last Name" class="form-control" name="last_name">
                            </div>
                            <div class="form-group">
                              <input type="email" placeholder="* Re-Enter Email" class="form-control" name="re_email" required>
                            </div>
                            <div class="form-group">
                              <input type="password" placeholder="* Re-Enter Password"  class="form-control" name="re_password" required>
                            </div>
                            <div class="form-group">
                              <input type="text" placeholder="* Region"  class="form-control" name="region" required>
                            </div>
                            <div class="form-group">
                              <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
                              <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                            </div>
                        </div>
                      </div>
                 </div>
                 <div class=" m-b-lg">
                   <div class="col-md-5 col-lg-offset-2" >
                    <button type="submit" class="btn btn-primary login-button" style="width:200px;">Register Now</button>
                  </div>
                 </div>





              </form>

        </div>
      </div>
  </div>
</section>
@stop
