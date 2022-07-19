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

@php
  $why_us = DB::table('dit_why_us_basic')->orderBy('id', 'DESC')->first();
@endphp

<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <section id="do_more" class="scroll-section pt75">
	  <article class="container relative">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
			  <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
			  <h2 class="h2-heading black-color">{{ $why_us->heading }}</h2>
			  
			</div>
			<div class="col-lg-6 mt50 wow fadeInUp" data-wow-delay="0.6s">
				<div class="content-intro">
					{!! $why_us->subheading !!}
				</div>
			</div>
			<div class="col-lg-6">
				<div class="images-page-about mt50 wow fadeInUp" data-wow-delay="0.9s">
				  <img src="https://ditech.vmsl.com.bd/uploads/images/1636868723-68816270.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
		
		<div class="row">
		  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb50">
			  <div class="aboutus-grid text-center">
				<p class="aboutus-grid-title"> <span>{{ $why_us->years }} </span></p>
				<p class="aboutus-grid-desc">YEARS’ EXPERIENCE WORKING</p>
				<a href="">Learn more about our Success Stories</a>
			  </div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mb50">
			  <div class="aboutus-grid text-left">
				<div class="col-xl-12">
					<div class="card proj-progress-card">
						<div class="card-block">
							<div class="row">
								@php
								  $progress_bar = DB::table('dit_progress_bar')->get();
								@endphp
								@foreach($progress_bar as $row)
								<div class="col-xl-12 col-md-12">
									<h5 class="m-b-30 f-w-700">{{ $row->name}}</h5>
									<div class="progress">
										<div class="progress-bar bg-{{$row->background_color}}" style="width:{{$row->percent}}%;">{{$row->percent}}%</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
		
		<div class="closeWrpr hidden-xs"></div>
		
	   
	  </article>
</section>


    



</div>

@include('layouts.default.coll-us')
        
@include('layouts.default.footer')