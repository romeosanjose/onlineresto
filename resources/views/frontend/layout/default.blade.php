<!DOCTYPE html>
    <html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OL Store</title>
        <link rel="icon" href="{!! asset('assets/ico/favicon.png') !!}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/datepicker.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}"/>


        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/Chart.js')}}"></script>


        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    </head>

	<body data-spy="scroll" data-offset="0" data-target="#theMenu">
  @include('frontend.layout.partials.navigation')

      @yield('content')

  @include('frontend.layout.partials.footer')
  </body>
</html>


<script src="{{asset('assets/js/classie.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/smoothscroll.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
