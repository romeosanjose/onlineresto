@extends('frontend.layout.default')

@section('content')
<section id="login" name="login">
    <div id="loginwrap">

        <div class="col-md-4 col-md-offset-4">
              <form method="post" action="{{action('CustomerController@dologin')}}" />
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <div class="form-group">
                   <input type="email" placeholder="Email" class="form-control" name="email" required>
                 </div>
                 <div class="form-group">
                   <input type="password" placeholder="Password"  class="form-control" name="password" required>
                 </div>
                 <button type="submit" class="btn btn-primary login-button">login  </button>
              </form>
              <div class="form-group" style="margin-top:2%;">
                <a href="/customer/register">Sign-up Now</a>
              </div>
        </div>
      
  </div>
</section>
@stop
