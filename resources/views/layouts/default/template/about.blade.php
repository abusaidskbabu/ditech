@include('layouts.default.header')
    <!-- Breadcrumb Start -->
<style type="text/css">
    .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.7" /><feFuncG type="linear" slope="0.7" /><feFuncB type="linear" slope="0.7" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.7);
  -webkit-filter: brightness(0.7);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  font-size: 17px;
  padding: 10px;
  width: 100%;
}

.hovereffect:hover h2 {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
  transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect .rotate {
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  width: 100%;
  height: 100%;
  position: absolute;
}

.hovereffect hr {
  width: 50%;
  opacity: 0;
  filter: alpha(opacity=0);
}

.hovereffect  hr:nth-child(2) {
  -webkit-transform: translate3d(-50%,-50%,0) rotate(0deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate(0deg) scale3d(0,0,1);
}

.hovereffect  hr:nth-child(3) {
  -webkit-transform: translate3d(-50%,-50%,0) rotate(90deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate(90deg) scale3d(0,0,1);
}

.hovereffect h2, .hovereffect hr {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
  background-color: transparent;
  margin: 0px;
}

.group1, .group2 {
  left: 50%;
  position: absolute;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
  background-color: transparent;
  margin: 0px;
  padding: 0px;
}

.group1 {
  top: 40%;
}

.group2 {
  top: 60%;
}

.hovereffect p {
  width: 30%;
  text-transform: none;
  font-size: 15px;
  line-height: 2;
}

.hovereffect p a {
  color: #fff;
}

.hovereffect p a:hover,
.hovereffect p a:focus {
  opacity: 0.6;
  filter: alpha(opacity=60);
}

.hovereffect  a i {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  padding: 10px;
  font-size: 20px;
}

.group1 a:first-child i {
  -webkit-transform: translate3d(-60px,-60px,0) rotate(45deg) scale(2);
  transform: translate3d(-60px,-60px,0) rotate(45deg) scale(2);
}

.group1 a:nth-child(2) i {
  -webkit-transform: translate3d(60px,-60px,0) rotate(45deg) scale(2);
  transform: translate3d(60px,-60px,0)  rotate(45deg) scale(2);
}

.group2 a:first-child i {
  -webkit-transform: translate3d(-60px,60px,0) rotate(45deg) scale(2);
  transform: translate3d(-60px,60px,0) rotate(45deg) scale(2);
}

.group2 a:nth-child(2) i {
  -webkit-transform: translate3d(60px,60px,0)  rotate(45deg) scale(2);
  transform: translate3d(60px,60px,0)  rotate(45deg) scale(2);
}

.hovereffect:hover hr:nth-child(2) {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(-50%,-50%,0) rotate(0deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate(0deg) scale3d(1,1,1);
}

.hovereffect:hover hr:nth-child(3) {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(-50%,-50%,0) rotate(90deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate(90deg) scale3d(1,1,1);
}

.hovereffect:hover .group1 i:empty, .hovereffect:hover .group2 i:empty {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0) rotate(45deg) scale(1);
  opacity: 1;
  filter: alpha(opacity=100);
}
</style>
<div style="background-color:#0000">
    
    <section class="breadcrumb-menu">
        <article class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="listmenu">
                        <div class="hero-list">
                            <nav aria-label="Breadcrumb">

                                <ol class="breadcrumb rmv-breadcrum navbar-left hidden-tab">
                                    <li class="dropdown mega-dropdown">
                              
                                        <a href="about.html" class="dropdown-toggle disabled" data-toggle="dropdown">
                                        {{ $title }}
                                        <i class="fa fa-chevron-circle-down reverseArrow" aria-hidden="true"></i>
                                    
                                        </a>
                                    </li>
                           
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
</div>

<div class="banner parbase @if(empty($breadcum->image)) l3-gradient aem-GridColumn @endif aem-GridColumn--default--12" @if(!empty($breadcum->image)) style="background-image: url('{{url('/')}}/uploads/images/banner/{{$breadcum->image}}'); background-repeat: no-repeat;background-position: center;" @endif>
    <section id="sml_ht_home_banner">
        <div id="main-cnt"> </div>
        <article class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 ">
                    <h1 class="h2-heading white-color l-top">
                        {{ $title }}
                    </h1>
                </div>
            </div>
        </article>
    </section>
</div>

         <!-- Intro Section -->
        <div class="intro-section-about-page d-flex h-100 mt50 ">
            <div class="base-content-intro align-self-center w-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
                          <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
                          <h2 class="h2-heading black-color">{{ $title }}</h2>
                          
                        </div>
                        <div class="col-lg-6 mt50 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="content-intro">
                                {!! $about->about !!}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="images-page-about mt50 wow fadeInUp" data-wow-delay="0.9s">
                              <img src="{{url('/')}}/uploads/images/{{ $about->image }}" alt="" width="100%" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Intro Section -->

         <!-- Our Team Section -->
        <div class="the-team mt50 bg-amethyst-medium">
            <div class="title-page">
                <div class="container">
                    <div class="row mt50">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
                          <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
                          <h2 class="h2-heading black-color">Our Team</h2>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-tour-guide pb50">
                <div class="container wow fadeInUp" data-wow-delay="0.6s">
                    <div class="owl-carousel owl-theme" id="card-team">
                        @foreach(DB::table('con_team')->where('status', 1)->orderBy('sort_number','ASC')->get() as $row)
                            <div class="item">
                                <div class="card card-team animated-Fade-In-1 text-center">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="{{url('/')}}/uploads/images/team/{{ $row->image }}" alt="" style="height: 250px;width:100%;">
                                        <div class="overlay">
                                            <h2></h2>
                                            <div class="rotate">
                                                <p class="group1">
                                                    <a href="{{ $row->twitter }}">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="{{ $row->facebook }}">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </p>
                                                    <hr>
                                                    <hr>
                                                <p class="group2">
                                                    <a href="{{ $row->linkedin }}">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                    <a href="mailto:{{ $row->email }}">
                                                        <i class="fa fa-envelope"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h4>{{ $row->name }}</h4>
                                        <h5 class="card-title"><b>{{ $row->position }}</b></h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Team Section -->

        <!-- Our Vision Section -->
        <div class="our-vision bg-light mt50">
            <div class="gr-card-our-vision">
                <div class="container " >
                    <div class="row mb50">
                        <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="card-our-vision text-center">
                                <div class="block-icon-card text-info"> <i class="fas fa-cloud"></i> 
                                </div>
                                <div class="content-card">
                                    <h4 class="my-3 font-weight-light text-info">Our Mission</h4>
                                    <p class="text-justify">{{ $about->our_mission }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6  wow fadeInUp" data-wow-delay="0.6s">
                            <div class="card-our-vision text-center">
                                <div class="content-card">
                                    <img src="{{url('/')}}/uploads/images/{{ $about->what_out_value }}" alt="" class="img-fluid" width="100%" height="300px">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 mt30 wow fadeInUp" data-wow-delay="0.12s">
                            <div class="card-our-vision text-center">
                                <div class="content-card">
                                    <img src="{{url('/')}}/uploads/images/{{ $about->who_we_are }}" alt="" class="img-fluid" width="100%" height="300px">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 mt30  wow fadeInUp" data-wow-delay="0.9s">
                            <div class="card-our-vision text-center">
                                <div class="block-icon-card text-info"> <i class="fas fa-marker"></i> 
                                </div>
                                <div class="content-card">
                                    <h4 class="my-3 font-weight-light text-info">Our Vission</h4>
                                    <p class="text-justify">{{ $about->our_company }}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

       

        <!-- End Our Vision Section -->

@include('layouts.default.coll-us')

@include('layouts.default.footer')