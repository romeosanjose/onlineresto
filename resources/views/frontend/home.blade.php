@extends('frontend.layout.default')

@section('content')

<!-- ========== HEADER SECTION ========== -->
<section id="home" name="home"></section>
<div id="headerwrap">
  <div class="container">
    <br>
    <h1>Onassis</h1>
    <h2>Free Bootstrap 4 Theme</h2>
    <div class="row">
      <br>
      <br>
      <br>
      <div class="col-lg-6 col-lg-offset-3">
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /headerwrap -->


<!-- ========== WHITE SECTION ========== -->
<div id="w">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
      <h3>WELCOME TO <bold>ONASSIS</bold>. <bold>A FREE BOOTSTRAP 3</bold> THEME. CRAFTED WITH LOVE BY <bold>BLACKTIE.CO</bold>. <br/>
        <bold>IDEAL FOR</bold> AGENCIES & FREELANCERS.
      </h3>
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /w -->

<!-- ========== SERVICES - GREY SECTION ========== -->
<section id="services" name="services"></section>
<div id="g">
  <div class="container">
    <div class="row">
      <h3>OUR SERVICES</h3>
      <br>
      <br>
      <div class="col-lg-3">
        <img src="assets/img/s1.png">
        <h4>London</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      </div>
      <div class="col-lg-3">
        <img src="assets/img/s2.png">
        <h4>Berlin</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      </div>
      <div class="col-lg-3">
        <img src="assets/img/s3.png">
        <h4>Paris</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      </div>
      <div class="col-lg-3">
        <img src="assets/img/s4.png">
        <h4>Tokyo</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /g -->

<!-- ========== CHARTS - DARK GREY SECTION ========== -->
<div id="dg">
  <div class="container">
    <div class="row">
      <h3>SOME CHARTS</h3>
      <br>
      <br>
      <div class="col-lg-4">
        <canvas id="javascript" height="130" width="130"></canvas>
        <br>
        <h4>Javascript</h4>
        <br>
        <script>
          var doughnutData = [
              {
                value: 70,
                color:"#f85c37"
              },
              {
                value : 30,
                color : "#ecf0f1"
              }
            ];
            var myDoughnut = new Chart(document.getElementById("javascript").getContext("2d")).Doughnut(doughnutData);
        </script>

      </div>
      <div class="col-lg-4">
        <canvas id="bootstrap" height="130" width="130"></canvas>
        <br>
        <h4>Bootstrap</h4>
        <br>
        <script>
          var doughnutData = [
              {
                value: 90,
                color:"#f85c37"
              },
              {
                value : 10,
                color : "#ecf0f1"
              }
            ];
            var myDoughnut = new Chart(document.getElementById("bootstrap").getContext("2d")).Doughnut(doughnutData);
        </script>
      </div>
      <div class="col-lg-4">
        <canvas id="wordpress" height="130" width="130"></canvas>
        <br>
        <h4>Wordpress</h4>
        <br>
        <script>
          var doughnutData = [
              {
                value: 55,
                color:"#f85c37"
              },
              {
                value : 45,
                color : "#ecf0f1"
              }
            ];
            var myDoughnut = new Chart(document.getElementById("wordpress").getContext("2d")).Doughnut(doughnutData);
        </script>
      </div>

    </div>
  </div><!-- /container -->
</div><!-- /dg -->

<section id="portfolio" name="portfolio"></section>
<div id="portfoliowrap">
  <div class="container">
    <div class="row">
      <h3>COOL WORKS</h3>
      <br>
      <br>
      <div class="col-lg-4 port-space">
        <a href="item.html"><img src="assets/img/work1.png"></a>
      </div>
      <div class="col-lg-4 port-space">
        <a href="item.html"><img src="assets/img/work2.png"></a>
      </div>
      <div class="col-lg-4 port-space">
        <a href="item.html"><img src="assets/img/work3.png"></a>
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /portfoliowrap -->

<!-- ========== WHITE SECTION ========== -->
<div id="w">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
      <h3>WE WORK HARD TO DELIVER A <bold>HIGH QUALITY SERVICE</bold>. OUR AIM IS YOUR COMPLETE <bold>SATISFACTION</bold>.
      </h3>
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /w -->

<!-- ========== ABOUT - GREY SECTION ========== -->
<section id="about" name="about"></section>
<div id="g">
  <div class="container">
    <div class="row">
      <h3>ABOUT US</h3>
      <br>
      <br>
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lectus elit, tincidunt nec turpis sed, accumsan iaculis ipsum. Nulla at augue auctor, tristique erat in, ultricies nunc. Mauris eget metus leo. Ut in mi lacinia, mattis nisl non, ultrices risus. Vestibulum aliquet aliquam ipsum ut ullamcorper. Pellentesque fringilla, massa vel rutrum consequat, nulla velit fermentum dolor, sed scelerisque.</p>
      <br>
      <br>
      </div>
      <div class="col-lg-2"></div>
      <div class="col-lg-3 team">
        <img class="img-circle" src="assets/img/team01.jpg" height="90" width="90">
        <h4>Liz Stewart</h4>
        <h5><i>Product Manager</i></h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <p>
          <a href="index.html#"><i class="icon-facebook"></i></a>
          <a href="index.html#"><i class="icon-twitter"></i></a>
          <a href="index.html#"><i class="icon-envelope"></i></a>

        </p>
      </div>

      <div class="col-lg-3 team">
        <img class="img-circle" src="assets/img/team02.jpg" height="90" width="90">
        <h4>Brad Casey</h4>
        <h5><i>Front-end Developer</i></h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <p>
          <a href="index.html#"><i class="icon-facebook"></i></a>
          <a href="index.html#"><i class="icon-twitter"></i></a>
          <a href="index.html#"><i class="icon-envelope"></i></a>

        </p>
      </div>

      <div class="col-lg-3 team">
        <img class="img-circle" src="assets/img/team03.jpg" height="90" width="90">
        <h4>Pamela Chow</h4>
        <h5><i>Web Designer</i></h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <p>
          <a href="index.html#"><i class="icon-facebook"></i></a>
          <a href="index.html#"><i class="icon-twitter"></i></a>
          <a href="index.html#"><i class="icon-envelope"></i></a>

        </p>
      </div>

      <div class="col-lg-3 team">
        <img class="img-circle" src="assets/img/team04.jpg" height="90" width="90">
        <h4>Tim Gates</h4>
        <h5><i>Back-end Guru</i></h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <p>
          <a href="index.html#"><i class="icon-facebook"></i></a>
          <a href="index.html#"><i class="icon-twitter"></i></a>
          <a href="index.html#"><i class="icon-envelope"></i></a>

        </p>
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /g -->

<!-- ========== FOOTER SECTION ========== -->
<section id="contact" name="contact"></section>
<div id="f">
  <div class="container">
    <div class="row">
        <h3><b>CONTACT US</b></h3>
        <br>
        <div class="col-lg-4">
          <h3><b>Send Us A Message:</b></h3>
          <h3>onassis@blacktie.co</h3>
          <br>
        </div>

        <div class="col-lg-4">
          <h3><b>Call Us:</b></h3>
          <h3>+55 3984-4389</h3>
          <br>
        </div>

        <div class="col-lg-4">
          <h3><b>We Are Social</b></h3>
          <p>
            <a href="index.html#"><i class="icon-facebook"></i></a>
            <a href="index.html#"><i class="icon-twitter"></i></a>
            <a href="index.html#"><i class="icon-envelope"></i></a>
          </p>
          <br>
        </div>
      </div>
    </div>
  </div><!-- /container -->
</div><!-- /f -->

<div id="c">
  <div class="container">
    <p>Created by <a href="http://www.blacktie.co">BLACKTIE.CO</a></p>

  </div>
</div>


@stop

@section('script')
    <script src="{{asset('assets/js/home.js')}}"></script>
@stop
