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



        <!-- Logo Partner Section -->
        <div class="logo-partner pt50 pb50">
          <div class="title-page text-white text-center">
            <div class="container">
              <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
                  <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
                  <h2 class="h2-heading black-color">Our Client</h2>
                  
                </div>
            </div>
            </div>
          </div>
          <div class="base-logo-partner mt50 mb50">
            <div class="container wow fadeInUp" data-wow-delay="0.6s">
              <div class="row">
                <div class="col-lg-12">
                  <div class="owl-carousel owl-theme" id="logo-partner">
                    @foreach(DB::table('our_clients')->where('status', 1)->orderBy('id', 'DESC')->get() as $row)
                    <div class="item">
                      <div class="img-logo-partner animated-Fade-In-Up-{{ $loop->iteration }}">
                        <a href="{{ $row->partner_link }}" target="_blank">
                          <img src="{{url('/')}}/uploads/images/clients/{{ $row->image }}" style="height: 97px;" class="img-fluid" alt="">
                        </a>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Logo Partner Section -->
        <!-- End Our Vision Section -->

        <div class="logo-partner pt50 pb50 " style="background-color: #85C1E9 !important;">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
		                  <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
		                  <h2 class="h2-heading white-color">Testimonial</h2>
		                  
		            </div>
        			<div class="col-md-12">
        				<div class="base-logo-partner mt50 mb50">
            				<div class="container wow fadeInUp" data-wow-delay="0.6s">
		        				<h5 class="employeespeak-head text-uppercase">What our client say</h5>
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
        	</div>
        </div>

@include('layouts.default.coll-us')

@include('layouts.default.footer')