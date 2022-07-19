@include('layouts.default.header')

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
                        {{-- {{ $title }} --}}
                    </h1>
                </div>
            </div>
        </article>
    </section>
</div>

  <div class="intro-section-about-page d-flex h-100 mt50 pb50">
    <div class="base-content-intro align-self-center w-100">
        <div class="container">
            <div class="row">
	      		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left wow fadeInUp" data-wow-delay="0.3s"> 
	      			<img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
	        		<h2 class="h2-heading">Solutions</h2>
	        		
      			</div>
    		</div>
		    <div class="row mb50">
		      <div class="grid-do_more col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
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
		    </div>
		    
		    <div class="row">
	      		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left wow fadeInUp" data-wow-delay="0.3s"> 
	      			<img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
	        		<h2 class="h2-heading">Services</h2>
	        		
      			</div>
    		</div>
		    <div class="row mb50">
                @foreach($products as $row)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb10 ">
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
		    
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left wow fadeInUp" data-wow-delay="0.3s"> 
                <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
                <h2 class="h2-heading black-color">New & Blogs</h2>
              </div>
             
              <div class="content home-second-heading-top">
                <div class="row1 m0 row-eq-ht col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-eq-ht">
                      <div class="row row-eq-ht">
                        @foreach($blog_news as $row)
                        <div class="
                        @if($loop->iteration <= 2)
                          col-lg-6 col-md-4 col-sm-6 col-xs-12 
                        @elseif($loop->iteration > 2 && $loop->iteration <= 5)
                          col-lg-4 col-md-4 col-sm-6 col-xs-12 
                        @elseif($loop->iteration > 5 && $loop->iteration <= 7)
                          col-lg-6 col-md-6 col-sm-6 col-xs-12 
                        @else
                          col-lg-3 col-md-3 col-sm-6 col-xs-12 
                        @endif
                          mb-xs-20 p-1 ctrl-width-mob">
                          <div class="col-eq-ht"> 
                            <a href="{{ route('news.details', str_replace(' ', '-', $row->heading))}}" title="{{ $row->heading }}">
                            <div class="bg-index-artificial">
                              <div class="news-grid-imgs"> 
                                <img src="{{url('/')}}/uploads/images/news/{{ $row->image }}" class="img-responsive" alt="{{ $row->heading }}" style="height:250px;width:100%;"> 
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
        </div>
      </div>
    </div>
<style type="text/css">

#counter {
	position: absolute;
	bottom: -35px;
	left: 50%;
	font-size: 20px;
	z-index: 9;
	transform: translateX(-50%);
	font-weight: 500;
	color: #FFFFFF;
}
/* Webinar START*/
.webinar-box {
	width: 100%;
	height: 505px;
	/* margin-bottom: 40px; */
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-ms-border-radius: 10px;
	-o-border-radius: 10px;
	border-radius: 10px;
	background-color: #0000002e;
	-webkit-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
	-moz-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
	-ms-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
	-o-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
	box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
	position: relative;
	overflow: hidden;
	cursor: pointer;
}
/****************
Back
****************/

.webinar-box .wcard-back {
	color: #fff;
	text-align: center;
	position: absolute;
	left: 0;
	right: 0;
	top: 50%;
	transform: translateY(-50%);
	padding: 15px;
	font-weight: 300;
	z-index: 1;
}
.webinar-box .wcard-back a {
	color: #fff;
	display: block;
	text-decoration: none;
	font-weight: 300;
}
.webinar-box .wcard-back a span {
	display: inline-block;
	background-image: url(/content/dam/infosys-web/en/global-resource/18/quote-arrow-right.png);
	background-repeat: no-repeat;
	background-position: 115px center;
	padding: 0 25px;
	text-transform: uppercase;
	background-size: contain;
	font-weight: 400;
}
/****************
UP
****************/
 
.wcard-img img {
	z-index: -1 !important;
	object-fit: cover;
}
.webinar-box .wcard-up, .wcard-img img {
	position: absolute;
	width: 100%;
	height: 325px;
	z-index: 3;
	text-align: center;
	-webkit-border-top-left-radius: 10px;
	-moz-border-top-left-radius: 10px;
	-ms-border-top-left-radius: 10px;
	-o-border-top-left-radius: 10px;
	border-top-left-radius: 10px;
	-webkit-border-top-right-radius: 10px;
	-moz-border-top-right-radius: 10px;
	-ms-border-top-right-radius: 10px;
	-o-border-top-right-radius: 10px;
	border-top-right-radius: 10px;
	-webkit-transition: 0.5s ease-in-out;
	-moz-transition: 0.5s ease-in-out;
	-ms-transition: 0.5s ease-in-out;
	-o-transition: 0.5s ease-in-out;
	transition: 0.5s ease-in-out;
}
.wcard-on .wcard-up, .wcard-on .wcard-img img {
	height: 100px !important;/* box-shadow: 0 0 30px #cfd8dc; */
}
.webinar-box .wcard-up .wcard-text {
	position: absolute;
	top: 200px;
	padding: 15px;
	left: 0;
	right: 0;
	color: #f1f7f9;
	-webkit-transition: 0.5s ease-in-out;
	-moz-transition: 0.5s ease-in-out;
	-ms-transition: 0.5s ease-in-out;
	-o-transition: 0.5s ease-in-out;
	transition: 0.5s ease-in-out;
}
.wcard-on .wcard-up .wcard-text {
	top: 20px;
}
.webinar-box .wcard-up .wcard-text h2 {
	margin: 0;
	font-size: 22px;
	font-weight: 600;
	text-transform: uppercase;
}
.webinar-box .wcard-up .wcard-text p {
	margin: 0;
	font-size: 14px;
	letter-spacing: 1.5px;
	color: #fff;
	font-weight: 600;
	text-transform: uppercase;
}
.webinar-box .wcard-up .wcard-add {
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-ms-border-radius: 50%;
	-o-border-radius: 50%;
	border-radius: 50%;
	background-color: #000000;
	-webkit-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
	-moz-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
	-ms-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
	-o-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
	box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
	position: absolute;
	top: 290px;
	left: 0;
	right: 0;
	margin: auto;
	width: 68px;
	height: 68px;
	cursor: pointer;
	-webkit-transition: 0.5s ease-in-out;
	-moz-transition: 0.5s ease-in-out;
	-ms-transition: 0.5s ease-in-out;
	-o-transition: 0.5s ease-in-out;
	transition: 0.5s ease-in-out;
}
.wcard-on .wcard-up .wcard-add {
	-webkit-transform: rotate(360deg) scale(0.5);
	-moz-transform: rotate(360deg) scale(0.5);
	-ms-transform: rotate(360deg) scale(0.5);
	-o-transform: rotate(360deg) scale(0.5);
	transform: rotate(360deg) scale(0.5);
	top: 370px;
}
/****************
Down
****************/

.webinar-box .wcard-down {
	background-color: #fff;
	position: absolute;
	bottom: 0px;
	width: 100%;
	height: 180px;
	z-index: 2;
	-webkit-border-bottom-left-radius: 10px;
	-moz-border-bottom-left-radius: 10px;
	-ms-border-bottom-left-radius: 10px;
	-o-border-bottom-left-radius: 10px;
	border-bottom-left-radius: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-bottom-right-radius: 10px;
	-ms-border-bottom-right-radius: 10px;
	-o-border-bottom-right-radius: 10px;
	border-bottom-right-radius: 10px;
	-webkit-transition: 0.5s ease-in-out;
	-moz-transition: 0.5s ease-in-out;
	-ms-transition: 0.5s ease-in-out;
	-o-transition: 0.5s ease-in-out;
	transition: 0.5s ease-in-out;
}
.wcard-on .wcard-down {
	height: 100px;
}
.wcard-down-content {
	padding: 0px 20px;
	text-align: center;
	color: #334750;
	font-weight: 400;
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	align-items: center;
	height: 100%;
	justify-content: center;
}
.webinar-box .wcard-up .wcard-add i {
	color: white;
	font-size: 38px;
	line-height: 68px;
}
.wcard-img:after {
	content: "";
	position: absolute;
	left: 0px;
	right: 0px;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, 0.5);
}
.webinar_slider .owl-nav .owl-prev, .webinar_slider .owl-nav .owl-next {
	background-repeat: no-repeat;
	width: 40px;
	height: 38px;
	text-indent: -9999px;
	position: absolute !important;
	bottom: -42px !important;
	-webkit-transition: all 0.3s ease-in-out;
	-moz-transition: all 0.3s ease-in-out;
	top: unset !important;
	transition: all 0.3s ease-in-out;
	margin: 0 !important;
	padding: 0 !important;
}
.webinar_slider .owl-nav .owl-prev {
	background-image: url(/content/dam/infosys-web/en/global-resource/18/quote-arrow-left.png);
	left: 50%;
	transform: translateX(-150%);
}
.webinar_slider .owl-nav .owl-next {
	background-image: url(/content/dam/infosys-web/en/global-resource/18/quote-arrow-right.png);
	right: 50%;
	transform: translate(160%, -6%);
}
.webinar_slider .owl-dots {
	bottom: -50px;
}

@media screen and (max-width: 767px) {
/*#counter {
	bottom: -180px;
}*/
} 
/* Webinar END */
</style>
<script> 

$(document).ready(function(){
	// webinar
    $(".webinar-box").click(function () {
		$(this).toggleClass("wcard-on");
		$(this).find("i").toggleClass("fa-minus");
	});
});
</script>
@include('layouts.default.coll-us')
@include('layouts.default.footer')