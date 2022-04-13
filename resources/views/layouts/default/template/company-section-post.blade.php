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

{{-- <div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
    <section id="hero_slider">
  		<article class="container-fluid slider">
        	<div class="row"> 
        		<div id="hero_slider_carousel" class="owl-carousel owl-theme">
        			@foreach($breadcum as $row)
	              		<div class="item @if($loop->iteration == 1) active @endif">
	              			<div class="repeated-css bg-sapphire-medium">
	              				<img src="{{url('/')}}/uploads/images/banner/{{ $row->image }}?pq=medium" class="slide-image hidden-xs">
	              				<img class="slide-image visible-xs" src="{{url('/')}}/uploads/images/banner/{{ $row->image }}?pq=low" >
	              			</div>
	              			<div class="slider-overlay-amethyst"></div>
	              			<div class="caption">
	              				<div class="container">
	              					<div class="row">
	                    				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						                    <h2 class="h2-heading white-color mb-xs-10">{{ $row->title }}</h2>
	                    				</div>
	              					</div>
	              				</div>
	              			</div>
	        			</div>
			        @endforeach
        		</div>
        	</div>
  		</article>
  	</section>
</div> --}}



<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
    <section id="do_more" class="scroll-section pt75">
  		<article class="container relative">
    		<div class="row">
	      		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
	      			<img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
	        		<h2 class="h2-heading"></h2>
	        		<p class="col-lg-8 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 para-txt light-gray mb50"></p>
      			</div>
    		</div>
		    <div class="row mb50">
		      <div class="grid-do_more col-md-12 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
		        @php
		          $company_section_post = DB::table('dit_our_company_section_post')->where('status',1)->orderBy('id', 'DESC')->get();
		        @endphp
		        @foreach($company_section_post as $row)
		        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb-xs-20 p1 ctrl-width-mob"> 
		          <a href="{{ route('company.section.post.details', $row->id)}}" >
		          <figure class="img-effect"> <img src="{{url('/')}}/uploads/images/company-section-post/{{ $row->image }}"  class="img-responsive" />
		            <div class="bottom-gradient-do_more"></div>
		            <figcaption>
		              <h2 class="do_more-grid-title">{{ $row->heading }}</h2>
		              <p class="do_more-grid-desc"><span class="hidden-1024">{{ $row->short_description }}</span> </p>
		            </figcaption>
		          </figure>
		          </a> </div>
		          @endforeach

		       
		      </div>
		    </div>
		    <div class="closeWrpr hidden-xs"></div>
  		</article>
	</section>
</div>
@include('layouts.default.footer')