
<div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <section id="hero_slider" class="scroll-section">
      <article class="container-fluid slider">
        <div class="row"> 
          <!--<img class="portal-mob visible-xs" src="/content/dam/infosys-web/en/global-resource/background-image/portals.png" alt="Portals"/>-->
          <div id="hero_slider_carousel" class="owl-carousel owl-theme">
          <div class="item">
              <div class="repeated-css bg-amethyst-medium"> 
                <img src="{{ asset('uploads') }}/images/slider/{{ $allslider->image }}" class="slide-image hidden-xs" alt="Australian Open and Infosys extend Digital Innovation Partnership until 2026"> 
                <img class="slide-image visible-xs" src="{{ asset('uploads') }}/images/slider/{{ $allslider->image }}" alt="Australian Open and Infosys extend Digital Innovation Partnership until 2026"> </div>
              <div class="slider-overlay-black"></div>
              <div class="caption ">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <h2 class="h2-heading white-color mb-xs-10">{{ $allslider->title }}</h2>
                      <a href="{{ $allslider->btn_link }}" class="btn btn-shutter-more text-uppercase">{{ $allslider->btn_text }}</a> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </article>
    </section>

</div>


@php
  $about = DB::table('tbl_about_us')->where('status', 1)->first();
@endphp

<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12 pb50">
     <section id="do_more" class="scroll-section pt75">
	  <article class="container relative">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
			  <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
			  <h2 class="h2-heading black-color">OUR COMPANY</h2>
			  
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
		
	  </article>
</section>


    



</div>



<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <section id="core_capabilities" class="scroll-section relative  home_promo_banner" style="background-color: #85C1E9 !important; height:auto !important;"> 
        <article class="container"> 
          <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
              <h2 class="h2-heading white-color  mb-xs-10">OPTIMAL TECHNOLOGY SERVICES & SOLUTIONS</h2>
              <p class="fullpage-desc black-color"> <em>Reach out to the country’s most reliable IT services.</em></p>
            </div>
          </div>

          <div class="row mt10">
			<div class="col-lg-12 career-explore text-center mt-0">
				<button class="btn btn-no-effect reques-btn text-uppercase" id="solution_btn">Solutions</button>
				<button class="btn btn-no-effect reques-btn text-uppercase" id="service_btn">SERVICES</button>
			</div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.6s" id="solution_area"> 
              @php
                $services = DB::table('dit_services')->where('status',1)->where('created_at',1)->limit(8)->get();
              @endphp
              @foreach($services as $row)
				      <a href="{{ route('company.services.single', str_replace(' ', '-', $row->service_name))}}" class="col-lg-3 col-md-3 col-sm-12 col-xs-12  p-3" style="height:100%;">
                  <div  class="row service_col_border" style="height:300px;">
                    <div class="col-lg-12 col-12 text-center">
                      <h3 class=" text-uppercase ">{!! $row->service_icone !!}</h3>
                      <h5 class=" text-uppercase ">{{$row->service_name}}</h5>
                      <p class=" text-dark">{{ Str::limit($row->short_description, $limit = 100, $end = '...')}}</p>
                      <span >Discover now <i class="fa fa-arrow-right"></i></span>
                    </div>
                  </div>
                </a>
              @endforeach
            </div>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-none text-center wow fadeInUp" data-wow-delay="0.6s" id="service_area"> 
              
              @foreach(DB::table('products_solution')->where('status',1)->limit(8)->get() as $row)
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mt10 ">
                  	<div class="webinar-box">
		              	<div class="wcard-up">
		                	<div class="wcard-img"> 
		                		<img src="{{url('/')}}/uploads/images/products/{{ $row->image }}" alt="" class="img-responsive"> 
		                	</div>
							<div class="wcard-text">
		                  		<p></p>
		                	</div>
		                	<div class="wcard-add"><i class="fa fa-plus"></i></div>
		              	</div>
						<div class="wcard-down">
		                	<div class="wcard-down-content">
		                  		<p class="mb0 text-uppercase"> <b>{{ $row->title }}</b></p>
		                	</div>
		              	</div>
		              	<div class="wcard-back">

		              		<a href="{{ route('products.single',str_replace(' ', '-', $row->title)) }}">
			                	<span>Read More</span>
			                </a>
			            </div>
		            </div>
                </div>
              @endforeach
            </div>
          </div>

          <div class="row career-explore text-center wow fadeInUp" data-wow-delay="0.9s">
			<a class="btn btn-no-effect reques-btn text-uppercase" href="{{ route('company.services') }}" title="Explore Careers">Explore More Solutions</a> 
		  </div>

        <div class="closeWrpr hidden-xs"></div>
    </article> 
  </section>

</div>

<style type="text/css">
    .hovereffect {
	  width: 100%;
	  height: 100%;
	  float: left;
	  overflow: hidden;
	  position: relative;
	  text-align: center;
	  cursor: default;
	  box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
	  border-radius: 5%;
	}
.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}
.hovereffect:hover{
	background: #42b078;
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feComponentTransfer color-interpolation-filters="sRGB"><feFuncR type="linear" slope="0.6" /><feFuncG type="linear" slope="0.6" /><feFuncB type="linear" slope="0.6" /></feComponentTransfer></filter></svg>#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

  </style>

 <!-- Logo Partner Section -->
<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
  <section id="our_protfolio" class="scroll-section relative  home_promo_banner" style="height:auto !important;"> 
    <div class="logo-partner " id="">
      <div class="title-page text-white text-center">
        <div class="container">
			<div class="row ">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
				  <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
				  <h2 class="h2-heading black-color">Our Protfolio</h2>
				  
				</div>
			</div>
        </div>
      </div>
      <div class="base-logo-partner mt50 mb50">
        <div class="container wow fadeInUp" data-wow-delay="0.6s">
			@php
			  $section_four = DB::table('dit_about_basic')->where('status',1)->orderBy('id','DESC')->FIRST();
			@endphp
			<div class="row">
			  <div class="row1 initiate-counter wow fadeInUp">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb50">
				  <div class="aboutus-grid text-center">
					<p class="aboutus-grid-title"> <span>{{ $section_four->happy_client}} </span></p>
					<p class="aboutus-grid-desc ">HAPPY CLIENTS</p>
				  </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb50">
				  <div class="aboutus-grid text-center">
					<p class="aboutus-grid-title"><span>{{ $section_four->finished_project}}</span></p>
					<p class="aboutus-grid-desc ">FINISHED PROJECTS</p>
				  </div>
				</div>
				<div class="clearfix visible-sm visible-xs"></div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb50">
				  <div class="aboutus-grid text-center">
					<p class="aboutus-grid-title"> <span>{{ $section_four->skiled_expart}}</span></p>
					<p class="aboutus-grid-desc ">SKILLED EXPERTS</p>
				  </div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb50">
				  <div class="aboutus-grid text-center">
					<p class="aboutus-grid-title"> <span>{{ $section_four->midea_post}}</span></p>
					<p class="aboutus-grid-desc ">MEDIA POSTS</p>
				  </div>
				</div>
			  </div>
			</div>
          <div class="row">
            <div class="col-lg-12">
                <!-- Tabs navs -->
                <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                  <li class="nav-item " role="presentation">
                    <a class="btn btn-no-effect reques-btn category" id="all" style="background-color: #eee;">All</a>
                  </li>
                  @foreach(DB::table('portfolio_category')->where('status',1)->get() as $row)
                  <li class="nav-item" role="presentation">
                    <a class="btn btn-no-effect reques-btn category" id="{{$row->id}}" style="background-color: #eee;">{{$row->title}}</a>
                  </li>
                  @endforeach
                </ul>
                <!-- Tabs navs -->

                <!-- Tabs content -->
                <div class="tab-content" id="">
                    <div class="tab-pane" id="ex1-tabs-1" role="tabpanel">
                      <div class="row mt10">
                        @foreach(DB::table('our_protfolios')->where('status',1)->orderBy('created_at', 'asc')->get() as $row)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb10 pitem pitem{{ $row->category_id}}" id="{{ $row->category_id}}">
                          <div class="hovereffect" style="">
								            <img class="img-responsive" src="{{url('/')}}/uploads/images/portfolio/{{ $row->image }}" alt="" style="height: 190px; padding: 20%;object-fit: contain;width:100%;">
								              <div class="overlay">
                                  <h2>{{$row->title}}</h2>
                                  <p>
                                    <a href="{{ route('portfolio.details', str_replace(' ', '-', $row->title))}}">VIEW MORE</a>
                                  </p>
								              </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                </div>
                <!-- Tabs content -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!--
<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <section id="about_us_index" class="scroll-section bg-topaz-medium pt50">
  <article class="container">
    @php
      $section_four = DB::table('dit_about_basic')->where('status',1)->orderBy('id','DESC')->FIRST();
    @endphp
    <div class="row">
      <div class="row1 initiate-counter wow fadeInUp">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb50">
          <div class="aboutus-grid text-center">
            <p class="aboutus-grid-title"> <span>{{ $section_four->happy_client}} </span></p>
            <p class="aboutus-grid-desc white-color">HAPPY CLIENTS</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb50">
          <div class="aboutus-grid text-center">
            <p class="aboutus-grid-title"><span>{{ $section_four->finished_project}}</span></p>
            <p class="aboutus-grid-desc white-color">FINISHED PROJECTS</p>
          </div>
        </div>
        <div class="clearfix visible-sm visible-xs"></div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb50">
          <div class="aboutus-grid text-center">
            <p class="aboutus-grid-title"> <span>{{ $section_four->skiled_expart}}</span>+</p>
            <p class="aboutus-grid-desc white-color">SKILLED EXPERTS</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 mb50">
          <div class="aboutus-grid text-center">
            <p class="aboutus-grid-title"> <span>{{ $section_four->midea_post}}</span></p>
            <p class="aboutus-grid-desc white-color">MEDIA POSTS</p>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>
</div>-->


<!--
<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <section id="operating_models" class="scroll-section relative  home_promo_banner">
        <article class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
              <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
              <h2 class="h2-heading black-color">CASE STUDIES</h2>
              <p class="col-lg-8 col-md-8 col-md-offset-2 para-txt black-color mb50">Proud projects make us excel.</p>
            </div>
            @php
              $case_study_section = DB::table('dit_case_studies_section')->where('status',1)->orderBy('id','DESC')->FIRST();
            @endphp
            <div class="content home-third-heading-top">
              <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                <h3 class="fullpage-second-desc black-color">{{ $case_study_section->heading }}</h3>
                <p class="mb20 mb-xs-10 mt50 mt-xs-0 animateThird"> 
                <div class="row hidden-xs">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-xs-20">
                    <p class="fullpage-second-title black-color">{{ $case_study_section->sub_heading }}</p>
                    <p class="fullpage-second-more black-color mt20">
                      {!! $case_study_section->descriptions !!}
                     </p>                  
                   </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6  col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
                <img src="{{url('/')}}/uploads/images/case-study/{{ $case_study_section->side_image }}" width="100%" height="400px" alt="">
              </div>

            </div>
          </div>
        </article>
      </section>
</div>-->


<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <section id="talent_transformations" class="scroll-section relative bg-amethyst-medium home_promo_banner pb30" style="background-color: #ABB2B9;"> 
       <article class="container"> 
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
              <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
              <h2 class="h2-heading white-color">BLOGS & NEWS</h2>
              <p class="col-lg-8 col-md-8 col-md-offset-2 para-txt black-color mb50">Latest Tech updates.</p>
            </div>
            <div class="content home-second-heading-top">
              <div class="row1 m0 row-eq-ht col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 mb-xs-20 p0">
                  <div class="col-eq-ht bg-black">
                    <div class="investors-news">
                      @php
                        $blog_news = DB::table('dit_blocg_news')->where('status',1)->orderBy('id','DESC')->limit(4)->get();
                      @endphp
                      @foreach($blog_news as $row)
                      <div class="investors-news-row relative"> 
                        <a href="{{ route('news.details', str_replace(' ', '-', $row->heading))}}" target="_blank" title="{{ $row->heading }}">
                        <h3 class="investors-news-desc">{{ $row->heading }}
                          <img class="img-right-arrow" src="{{ asset('assets') }}/images/responsive/newdesign/right-arrow.svg" alt="arrow"></h3>
                        </a> 
                      </div>
                      @endforeach
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                  <div class="col-eq-ht">
                    <div class="row row-eq-ht">
                      @foreach($blog_news as $row)
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb-xs-20 p0 ctrl-width-mob">
                        <div class="col-eq-ht"> 
                          <a href="{{ route('news.details', str_replace(' ', '-', $row->heading))}}" title="{{ $row->heading }}">
                          <div class="bg-index-artificial">
                            <div class="news-grid-imgs"> 
                              <img src="{{url('/')}}/uploads/images/news/{{ $row->image }}" class="img-responsive" alt="{{ $row->heading }}" style="height:230px; width:100%;"> 
                            </div>
                            <div class="latest-event-box">
                              <p class="robotics-text">{{ $row->heading }} </p>
                              @php $date = DateTime::createFromFormat("Y-m-d", $row->date); @endphp
                              <p class="white-color">{{ date('F') }} {{ date('d') }}, {{ date('Y') }}</p>
                            </div>
                          </div>
                          </a> 
                        </div>
                      </div>
                      @endforeach
                      
                      <div class="clearfix visible-lg visible-md visible-sm hidden-xs"></div>
                      
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div> 
        </article> 
      </section>
</div>



<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <section id="careers" class="scroll-section pt75">
      <article class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
            <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
            <h2 class="h2-heading">Career</h2>
            <p class="col-lg-8 col-md-8 col-md-offset-2 para-txt light-gray mb50">Every open role in DITECH</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 plr-xs-0 wow fadeInUp" data-wow-delay="0.6s">
            <div class="careers-img-container relative">
              <div class="careers-img-wrapper"> 
                <img src="{{ asset('assets') }}/images/responsive/newdesign/careers-video-img.jpg" alt="" class=""> 
              </div>
              <div class="career-vido-caption">Life at DITECH</div>
              <div class="careers-employeespeak">
                <h5 class="employeespeak-head text-uppercase">What our people say</h5>
                <div id="employeespeak_slider" class="owl-carousel owl-theme">
                  @php
                    $happy_client = DB::table('tbl_client_say')->where('status',1)->orderBy('id','DESC')->get();
                  @endphp
                  @foreach($happy_client as $row)
                  <div class="item"> 
                    <img class="img-employee" src="{{url('/')}}/uploads/images/clients/{{ $row->image }}" alt="Danielle" /> 
                    <em class="employeespeak-content">&quot;{{ $row->comment }}&quot; <br>
                    - {{ $row->client_name }}, {{ $row->address }}</em> 
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row career-explore text-center wow fadeInUp" data-wow-delay="0.9s">
          <p class="careers-findopportunites">Find opportunities right for you</p>
          <a class="btn btn-no-effect reques-btn text-uppercase" href="{{ route('career')}}" title="Explore Careers">Explore Career</a> </div>
      </article>
    </section>

</div>

<div class="contactus aem-GridColumn aem-GridColumn--default--12">

    <section id="contact_us" class="scroll-section bg-topaz-medium">
		<article class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
					<img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
					<h2 class="h2-heading white-color">Contact Us</h2>
					<p class="col-lg-8 col-md-8 col-md-offset-2 para-txt white-color mb50">
						Contact to require a detailed analysis and assessment of your plan.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8406980912973!2d90.36854091486107!3d23.753059494591948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bfd5926ebcb7%3A0xac503abf49a03eba!2sDekko%20Isho%20Group!5e0!3m2!1sen!2sbd!4v1644646513105!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-sm-40">
					<section id="request_for_services">
					  <form class="row" method="post" action="{{ route('contact.store') }}">
						@csrf
						<div class="form-group col-lg-6">
						  <input type="text" name="name" class="form-control" placeholder="Name *">
						</div>
						<div class="form-group col-lg-6">
						  <input type="text" name="email" class="form-control" placeholder="Email *">
						</div>
						<div class="form-group col-lg-12">
						  <select class="form-control" name="subject">
							<option value="">Select</option>
							@foreach(DB::TABLE('dit_services')->WHERE('status',1)->get() as $row)
							<option value="{{$row->service_name}}">{{$row->service_name}}</option>
							@endforeach
							<option value="Others">Others</option>
						  </select>
						</div>
						<div class="col-lg-12">
						  <textarea class="form-control" name="message" cols="40" rows="10" placeholder="Write your message here."></textarea>
						</div>
						<div class="col-lg-12 mt30 text-center">
						  <button class="btn btn-no-effect reques-btn text-uppercase" type="submit" title="Explore Careers">Send</button>
						</div>
					  </form>
					</section>
				</div>
				
			</div>
		</article>
    </section>
</div>

@include('layouts.default.coll-us')

<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <div class="left-navigation relative"> 
   <nav class="sticky-left-nav top-menu"> 
      <ul class="stick-left-nav-ul">
          <li class="nav-active mb50"> 
            <a href="#hero_slider">
               <span>Get Started</span>
            </a>
          </li>
          <li> 
            <a href="#do_more">
               <span>Our Company</span></a>
          </li>
          <li> 
            <a href="#core_capabilities">
               <span>Solution & Service</span>
            </a>
          </li>
          <li> 
            <a href="#our_protfolio">
               <span>Portfolio</span>
            </a>
          </li>
		  <!--
          <li> 
            <a href="#about_us_index">
               <span>About</span>
            </a>
          </li>
		  
          <li> 
            <a href="#operating_models">
               <span>Case Study</span>
             </a>
           </li> -->
           <li> 
            <a href="#talent_transformations">
               <span>Blog & News</span>
            </a>
            </li>
            <li class="no-scrollify"> 
            <a href="#careers">
               <span>Career</span>
             </a>
           </li>
             <li class="no-scrollify">  
              <a href="#contact_us">
                 <span>Contact us</span>
              </a>
            </li>

              <li class="no-scrollify">  
                <a href="#investors">
                 <span>Call Us</span>
               </a>
             </li>

        </ul> </nav> </div> 
      
      
       <script type="text/javascript" src="{{ asset('assets') }}/js/jquery.scrollify.min.js"></script> 
        <!-- type.js --> 
        <script type="text/javascript" src="{{ asset('assets') }}/js/type.js"></script>
      <script type="text/javascript" src="{{ asset('assets') }}/js/custom.js"></script>
       <div style='display:none' id='hidZone'></div>



    



</div>

    
</div>
</div>
<div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">

    
    

    



<div class="xf-content-height">
    


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">

<script type="text/javascript">
	$(document).on('click', '#solution_btn', function(){
		$('#solution_area').removeClass('d-none');
    $('#solution_area').addClass('d-block');
		
		$('#service_area').removeClass('d-block');
    $('#service_area').addClass('d-none');
		
		$("#solution_btn").addClass('active');
    $("#service_btn").removeClass('active');
	});
	
	$(document).on('click', '#service_btn', function(){
		$('#solution_area').removeClass('d-block');
        $('#solution_area').addClass('d-none');
		
		$('#service_area').removeClass('d-none');
        $('#service_area').addClass('d-block');
		
		$("#solution_btn").removeClass('active');
    $("#service_btn").addClass('active');
	});
	
    $(document).on('click', '.category', function(){  
      var id  = $(this).attr('id');
      $('.category').removeClass('active');
      $(this).addClass('active');
      if (id == 'all') {
        $('.pitem').removeClass('d-none');
        $('.pitem').addClass('d-block');
      }else{
        $('.pitem').removeClass('d-block');
        $('.pitem').removeClass('d-none');

        $('.pitem').each(function() {
          var cat_id =  $(this).attr('id');
          if (cat_id == id) {
            $('.pitem'+cat_id).removeClass('d-none');
            $('.pitem'+cat_id).addClass('d-block');
          }else{
            $('.pitem'+cat_id).removeClass('d-block');
            $('.pitem'+cat_id).addClass('d-none');
          }
        });
      }
      // alert(id);
    }); 
	
	$(".webinar-box").click(function () {
		$(this).toggleClass("wcard-on");
		$(this).find("i").toggleClass("fa-minus");
	});
 </script>