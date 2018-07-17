@extends('layouts.app')

@section('content')
<div id="page-header">
  <!-- section background -->
  <div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
  <!-- /section background -->

  <!-- page header content -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="header-content">
          <h1>About Us</h1>
          <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#">About</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- /page header content -->
</div>
<div class="section" style="height: 600px;">
    <section id="team">
          <div class="container">
            <div class="section-header wow fadeInUp">
              <h3>Team</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>
    
            <div class="row">
    
              <div class="col-md-3 col-sm-6 wow fadeInUp">
                <div class="member">
                  <img src="./img/team-1.jpg" class="img-fluid" alt="" style="width: 100%">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Walter White</h4>
                      <span>Chief Executive Officer</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="member">
                  <img src="./img/team-2.jpg" class="img-fluid" alt="" style="width: 100%">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sarah Jhonson</h4>
                      <span>Product Manager</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="member">
                  <img src="./img/team-3.jpg" class="img-fluid" alt="" style="width: 100%">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>William Anderson</h4>
                      <span>CTO</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
              <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="member">
                  <img src="./img/team-4.jpg" class="img-fluid" alt="" style="width: 100%">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
            </div>
    
          </div>
        </section>
</div>
@endsection