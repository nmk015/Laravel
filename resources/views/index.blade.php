@extends('layouts.main')

@section('main-container')
    <!-- hero-section -->
    <header>
    <section class="py-lg-16 py-8" style="padding-top:5%; padding-bottom:5%; ">
                <!-- container -->
               <div class="container">
                  <!-- row -->
                 <div class="row align-items-center">
                    <!-- col -->
                   <div class="col-lg-6 mb-6 mb-lg-0">
                     <div class="">
                        <!-- heading -->
                       <h5 class="text-dark mb-4"><i class="fe fe-check icon-xxs icon-shape bg-light-success text-success rounded-circle me-2"></i>Most
                         trusted education platform</h5>
                          <!-- heading -->
                       <h1 class="display-3 fw-bold mb-3">Grow your skills and advance career</h1>
                        <!-- para -->
                       <p class="pe-lg-10 mb-5">Start, switch, or advance your career with more than 5,000 courses, Professional
                         Certificates, and degrees from world-class universities and companies.</p>
                          <!-- btn -->
                       <a href="{{url('/')}}/register" class="btn btn-primary">Join Free Now</a>
                       </div>
                   </div>
                   <div class="col-lg-6 mb-6 mb-lg-0">
                      <img src="images/girl-image.png" alt="">
                  </div>
                 </div>
                </div> 
             </section>
</header>
<!-- hero-section -->
<section id="courses">
<h1 style="text-align:center"> Our Top Catagories </h1>
<div class="container mt-100">
                            <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                <div class="inner">
                  <div class="main-img"><img src="images/IT-software.jpg" alt="Category"></div>
                  
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">IT and Software</h4>
                <p class="text-muted">Starting from $4</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Courses</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                <div class="inner">
                  <div class="main-img"><img src="images/bussi.jpg" alt="Category"></div>
                  
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Bussiness</h4>
                <p class="text-muted">Starting from $4</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Courses</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                <div class="inner">
                  <div class="main-img"><img src="images/marketing.jpg" alt="Category"></div>
                 
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Marketing</h4>
                <p class="text-muted">Starting from $4</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Courses</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                <div class="inner">
                  <div class="main-img"><img src="images/music.jpg" alt="Category"></div>
                  
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Music</h4>
                <p class="text-muted">Starting from $4</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Courses</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                <div class="inner">
                  <div class="main-img"><img src="images/trading.jpg" alt="Category"></div>
                  
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Trading</h4>
                <p class="text-muted">Starting from $4</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Courses</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mb-30"><a class="card-img-tiles" href="#" data-abc="true">
                <div class="inner">
                  <div class="main-img"><img src="images/comu.jpg" alt="Category"></div>
                 
                </div></a>
              <div class="card-body text-center">
                <h4 class="card-title">Communication</h4>
                <p class="text-muted">Starting from $4</p><a class="btn btn-outline-primary btn-sm" href="#" data-abc="true">View Courses</a>
              </div>
            </div>
          </div>
        </div>
        </div>
</section>
@endsection

