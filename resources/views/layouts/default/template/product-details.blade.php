
@include('layouts.default.header')

<!-- Breadcrumb Start -->
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
	                                 	<a href="#" class="dropdown-toggle disabled text-capitalize" data-toggle="dropdown">
										{{ $service->type }}
	                                    	<i class="fa fa-chevron-circle-down reverseArrow" aria-hidden="true"></i>
	                                 	</a>
	                              	</li>
	                              	<li class="dropdown mega-dropdown">
	                                 	<a href="#" class="dropdown-toggle disabled" data-toggle="dropdown">
	                                    	{{ $title }}
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

@if(empty($single->banner_image))

	<div class="banner parbase l3-gradient aem-GridColumn aem-GridColumn--default--12">
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

@else

	<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
	    <section id="hero_slider">
	  		<article class="container-fluid slider">
	        	<div class="row"> 
	        		<div id="hero_slider_carousel" class="owl-carousel owl-theme">
	              		<div class="item active ">
	              			<div class="repeated-css bg-sapphire-medium">
	              				<img src="{{url('/')}}/uploads/images/services/{{ $single->banner_image }}?pq=medium" class="slide-image hidden-xs">
	              				<img class="slide-image visible-xs" src="{{url('/')}}/uploads/images/services/{{ $single->banner_image }}?pq=low" >
	              			</div>
	              			<div class="slider-overlay-amethyst"></div>
	              			<div class="caption">
	              				<div class="container">
	              					<div class="row">
	                    				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						                    <h2 class="h2-heading white-color mb-xs-10">{{ $single->service_name }}</h2>
	                    				</div>
	              					</div>
	              				</div>
	              			</div>
	        			</div>
	        		</div>
	        	</div>
	  		</article>
	  	</section>
	</div>

@endif

<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
    <section id="do_more" class="scroll-section pt75">
  		<article class="container relative">
    		<div class="row">
	      		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.1s"> 
	      			<img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
	        		<h2 class="h2-heading">{{ $service->title }}</h2>
      			</div>
    		</div>
		    <div class="row mb50">
		      <div class="grid-do_more col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
		        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-xs-20">
					<img src="{{url('/')}}/uploads/images/products/{{ $service->image }}" alt="" class="img-responsive"> 
		        	{!! $service->descriptions !!}
		        </div>
		      </div>
		    </div>
			
		    <div class="closeWrpr hidden-xs"></div>
  		</article>
	</section>
</div>

<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
    <section id="do_more" class="scroll-section pt75" >
  		<article class="container relative">
    		<div class="row">
	      		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
	      			<img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
	        		<h2 class="h2-heading text-capitalize">Related {{ $service->type }}</h2>
	        		<p class="col-lg-8 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 para-txt light-gray mb50"></p>
      			</div>
    		</div>
		    <div class="row mb50">
                @foreach($related_service as $row)
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
		              		<a href="#">
			                	<span>Read More</span>
			                </a>
			            </div>
		            </div>
                </div>
                @endforeach
		    </div>
		    <div class="closeWrpr hidden-xs"></div>
  		</article>
	</section>
</div>
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