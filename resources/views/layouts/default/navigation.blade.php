<div>
                  
  <div class="root responsivegrid">


    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
      <div class="pagedetails parbase aem-GridColumn aem-GridColumn--default--12"></div>
      <div class="header aem-GridColumn aem-GridColumn--default--12">

      <header>
        <nav class="navbar navbar-default navbar-fixed-top scrollbg-show" role="navigation">
          <div class="container mt20 mb20">
            <div class="navbar-header page-scroll">
              <a class="navbar-brand" href="{{ url('/') }}" title="Go to Ditech Home" aria-label="Go to Ditech Home">
                <img id="logo" data-src="{{ asset('uploads/images/'.$setting->logo)}}" data-main-src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}">

              </a>
            </div>
            <div class="header-menu hidden-tab">
              <ul class="nav navbar-nav navbar-right pos-right">
          
             {{--  <li> 
                <a href="{{ url('/') }}" class="text-uppercase" title="Explore Careers Opportunities">Home</a> 
              </li>
           --}}
          

          
              <li class="dropdown"> 
                <a href="#" title="About" class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a> 
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 200px;">
                  <ul class="nav">
                    <li><a class="dropdown-item text-uppercase" href="{{ route('about') }}">Overview</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('management.profile') }}">Management Profile</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('career')}}">Careers</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('newsroom')}}">Newsroom</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('blogs')}}">Blogs</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('whyUs') }}">Why Choose Us</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('faqs')}}">FAQs</a></li>
                    
                  </ul>
                </div>
              </li>

             
            <li class="dropdown"> 
                <a href="#" title="Solutions" class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solutions</a> 
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 300px;">
                    <ul class="nav">
          						@foreach(DB::table('dit_services')->where('status',1)->where('parrent','Yes')->get() as $row)
          							<li class="expend-dropdown" id="{{$row->id}}">
          								<a class="dropdown-item text-uppercase"  href="{{ route('company.services.single', $row->id )}}">{{ $row->service_name }} @if(DB::table('dit_services')->where('status',1)->where('parrent_id', $row->id)->count() > 0) <i class="nav-arr-icn fa fa-arrow-right"></i> @endif</a>
          								<ul class="nav d-none dropdown-2 ex{{$row->id}}" id="{{$row->id}}">
          									@foreach(DB::table('dit_services')->where('status',1)->where('parrent_id', $row->id)->get() as $row2)
          										<li><a class="dropdown-item text-uppercase" href="{{ route('company.services.single', $row2->id )}}">{{ $row2->service_name }}</a></li>
          									@endforeach
          								</ul>
          							</li>
          						@endforeach
                    </ul>
                </div>
            </li>
			
			<li class="dropdown"> 
                <a href="#" title="Services" class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a> 
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="width: 250px;">
                    <ul class="nav">
						
						<li class="expend-dropdown" id="service">
							<a class="dropdown-item text-uppercase"  href="{{ route('products') }}">Service 
                @if(DB::table('products_solution')->where('status',1)->where('type', 'service')->count() > 0) 
                  <i class="nav-arr-icn fa fa-arrow-right"></i> 
                @endif
              </a>
							<ul class="nav d-none dropdown-2 exservice" id="">
								@foreach(DB::table('products_solution')->where('status',1)->where('type', 'service')->get() as $row3)
									<li><a class="dropdown-item text-uppercase" href="{{ route('products.single', $row3->id )}}">{{ $row3->title }}</a></li>
								@endforeach
							</ul>
						</li>
						
						<li class="expend-dropdown" id="consultancy">
							<a class="dropdown-item text-uppercase"  href="{{ route('consultancy') }}">Consultancy
                @if(DB::table('products_solution')->where('status',1)->where('type', 'consultancy')->count() > 0)
                  <i class="nav-arr-icn fa fa-arrow-right"></i> 
                @endif
              </a>
							<ul class="nav d-none dropdown-2 exconsultancy" id="consultancy">
								@foreach(DB::table('products_solution')->where('status',1)->where('type', 'consultancy')->get() as $row3)
									<li><a class="dropdown-item text-uppercase" href="{{ route('products.single', $row3->id )}}">{{ $row3->title }}</a></li>
								@endforeach
							</ul>
						</li>
						
						<li class="expend-dropdown" id="training">
							<a class="dropdown-item text-uppercase"  href="{{ route('training') }}">Training
                @if(DB::table('products_solution')->where('status',1)->where('type', 'training')->count() > 0)
                  <i class="nav-arr-icn fa fa-arrow-right"></i> 
                @endif
              </a>
							<ul class="nav d-none dropdown-2 extraining" id="training">
								@foreach(DB::table('products_solution')->where('status',1)->where('type', 'training')->get() as $row3)
									<li><a class="dropdown-item text-uppercase" href="{{ route('products.single', $row3->id )}}">{{ $row3->title }}</a></li>
								@endforeach
							</ul>
						</li>
						
                    </ul>
                </div>
            </li>

             <!-- <li> <a href="{{ route('products') }}" class="text-uppercase" title="Navigate your next digital framework">Service</a> </li>-->
              
              <li> <a href="{{ route('industry') }}" class="text-uppercase" title="Industry">Industry</a> </li>

              {{-- <li> <a href="{{ route('news')}}" class="text-uppercase" title="Navigate your next digital framework">Blog</a> </li> --}}
          
          

          
              <li> <a href="{{route('contact.page')}}" class="text-uppercase" title="Contact">Contact</a> </li>

              <li class="pt-1"> <a href="{{route('under.attack.hotline')}}" class="btn btn-no-effect under-attack-btn text-uppercase" title="Under Attack ?">Under Attack ?</a> </li>
          
          
      </ul>

      </div>
            <div role="search">
      <div class="search__color">
        <svg class="hidden1">
          <defs>
            <symbol id="icon-search" viewBox="0 0 24 24">
              <title>search</title>
              <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
            </symbol>
            <symbol id="icon-cross" viewBox="0 0 24 24">
              <title>cross</title>
              <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
            </symbol>
          </defs>
        </svg>
        <div class="main-wrap">
        <div class="search-wrap search-icon">
          <button id="btn-search" class="btn1 btn--search" aria-label="Click to search">
            <svg class="icon icon--search">
                <use xlink:href="#icon-search"></use>
            </svg>
          </button>
        </div>
        </div>
        <div class="search" aria-label="Site Search">
          <div class="search__inner search__inner--up">
            <!--action needs to be attached-->
            <form class="search__form" action="https://www.infosys.com/search.html" method="get">
              <input id="k" class="search__input" name="k" type="search" placeholder="What are you looking for?" autocomplete="off" spellcheck="false" title="Search" aria-label="search text"/>
                                     <label for="k" class="none">Search</label>
              <span class="search__info">Hit enter to search or ESC to close</span>
              <label id="iki"><input type="checkbox" name="iki" Checked/> Search only in IKI</label>
              <!-- <sly data-sly-test=""><input id="search-categories" type="hidden" name="c" value="" /></sly> -->

            </form>
          </div>
                       <button id="btn-search-close" class="btn1 btn--search-close" aria-label="Close search form">
            <svg class="icon icon--cross">
              <use xlink:href="#icon-cross"></use>
            </svg>
          </button>
          <div class="search__inner search__inner--down">
            <!-- search related content-->
            <div class="search__related"></div>
          </div>
        </div>
        
          
        
      </div>
      </div>
          </div>
          <div class="progressbar" aria-label="Page progress bar">
            <div class="width"></div>
          </div>
        </nav>
      </header>
</div>
<div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">

    
    

    



<div class="xf-content-height">
    


<div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
    
    <div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <!-- Custom CSS -->
<link href="{{ asset('assets') }}/css/burger-menu.css" rel="stylesheet">

<!-- Burger Menu START -->
<div class="burger-search-wrapper navbar-fixed-top">
  <div class="container">
    <nav class="hamburger-menu" role="main nav" aria-label="open menu">
      <div class="menu-bg"></div>
      <div class="circle"></div>
      <a href="javascript:void(0);" class="burger" aria-label="open menu" aria-haspopup="false" aria-expanded="false">
      <div class="icon-bar1"></div>
      <div class="icon-bar2"></div>
      <div class="icon-bar3"></div>
      </a>
      <div class="menu">
        <div class="fix-menu hidden-sm hidden-xs col-md-9 col-sm-12 col-xs-12 p0">
          <div class="hidden">
            <div class="col-md-12 col-sm-12 col-xs-12 automate h-50vh">
              <div class="top_menu_img_wrapper"> <img
                  src="{{ asset('assets') }}/images/18/banner/being-resilient-lead-menu.jpg"
                  class="being-resilient" alt="Being Resilient. That's Live Enterprise."> </div>
              <div class="row">
                <div class="top_menu_cont_wrapper">
                  <div class="col-md-6 col-sm-12 col-xs-12"> <a href="navigate-your-next/being-resilient.html" title="Being Resilient. That's Live Enterprise.">
                    <h2 class="head-txt mt100">Being Resilient. That's Live Enterprise.</h2>
                    </a> </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 automate bg-img-pos h-50vh"> <a href="navigate-your-next/digital-capabilities.html" title="Digital Core Capabilities">
              <h2 class="head-txt">Digital Core Capabilities</h2>
              </a> </div>
            <div class="col-md-4 col-sm-12 col-xs-12 innovate bg-img-pos h-50vh"> <a href="navigate-your-next/digital-operating-models.html" title="Digital Operating Models">
              <h2 class="head-txt">Digital Operating Models</h2>
              </a> </div>
            <div class="col-md-4 col-sm-12 col-xs-12 learn bg-img-pos h-50vh"> <a href="navigate-your-next/talent-transformations.html" title="Empowering Talent Transformations">
              <h2 class="head-txt">Empowering Talent Transformations</h2>
              </a> </div>
          </div>
        </div>
        <!-- Side Menu Title -->
        <div class="col-md-3 col-sm-12 col-xs-12 menuItems"> <a href="index.html" title="Go to Infosys Home" aria-label="Go to Infosys Home"> 
          <img src="{{ asset('uploads/images/'.$setting->logo)}}" alt="Infosys"
              class="img-responsive logo-inner"> </a>
          <ul class="list-unstyled">
            <li title="Navigate your next"> 
              <a href="{{ url('/') }}" title="Navigate your next" class="text-uppercase">Home
                <span class="un-line hidden-sm hidden-xs hidden-tab"></span> 
              </a> 
            </li>
            <li title="About Us"> <a href="javascript:void(0);" title="About Us" class="about-txt text-uppercase" target="_self" aria-label="Hover to show submenu" aria-haspopup="false" aria-expanded="false">Company <span
                  class="un-line hidden-sm hidden-xs hidden-tab"></span> </a> </li>
            <li title="Services"> 
              <a href="javascript:void(0);" title="Services" class="services text-uppercase" target="_self">Solutions 
                <span class="un-line hidden-sm hidden-xs hidden-tab"></span> 
              </a> 
            </li>
			
			
			
			<li title="Platforms"> <a href="javascript:void(0);" title="Platforms" class="platforms text-uppercase" target="_self" aria-label="Hover to show submenu" aria-haspopup="false" aria-expanded="false">Services <span
                  class="un-line hidden-sm hidden-xs hidden-tab"></span> </a> </li>
			
            
              <li> <a href="{{ route('industry') }}" class="text-uppercase" title="Navigate your next digital framework">Industry</a> </li>

            <li title="Navigate your next"> 
              <a href="{{ route('contact.page')}}" title="Navigate your next" class="text-uppercase">Contact
                <span class="un-line hidden-sm hidden-xs hidden-tab"></span> 
              </a> 
            </li>

            <li class=""> <a href="{{route('under.attack.hotline')}}" class="btn btn-no-effect under-attack-btn text-uppercase" title="">Under Attack ?</a> </li>

            <li class="social-icons"> 
              <a title="Follow us on Twitter" target="_blank" href="{{ $setting->twitter }}"> 
                <i class="fab fa-twitter"></i>
              </a>  
            </li>
            <li class="social-icons"> 
              <a title="Follow us on Facebook" target="_blank" href="{{ $setting->facebook }}"> 
                <i class="fab fa-facebook"></i>
              </a> 
            </li>
            <li class="social-icons"> 
              <a title="Follow us on Linkedin" target="_blank" href="{{ $setting->linkedin }}"> 
                <i class="fab fa-linkedin"></i>
              </a> 
            </li>
            <li class="social-icons"> 
              <a title="Follow us on Youtube" target="_blank" href="{{ $setting->youtube }}"> 
                <i class="fab fa-youtube"></i>
              </a> 
            </li>
            <li class="social-icons"> 
              <a title="Follow us on Instagram" target="_blank" href="{{ $setting->instagram }}"> 
                <i class="fab fa-instagram"></i> 
              </a>  
            </li>
          </ul>
        </div>
        
        <!-- Services Menu -->
        <div class="services-menu wow fadeInLeftBig" data-wow-duration="0.3s">
          <div class="cross visible1024-cross"> <a title="close" href="javascript:void(0);" alt="Cross" aria-label="Close menu" aria-haspopup="false" aria-expanded="false"> 
            <i class="fas fa-times"></i>
            </a> 
          </div>
          <div class="submenu-portion">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <h2 class="h2-heading mb10">Solutions</h2>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                @php
                  $services = DB::table('dit_services')->where('status',1)->where('parrent', 'Yes')->get();
                @endphp
                @foreach($services as $row)
                <div class="col-md-3 col-sm-3 col-xs-12"> 
                  <a href="{{ route('company.services.single', $row->id )}}" class="black-color">
                  {!! $row->service_icone !!}
                  <h3 class="hear-txt-sub">{{$row->service_name}}</h3>
                </a>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
		
		
		<!-- Platform Menu -->
        <div class="platforms-menu wow fadeInLeftBig" data-wow-duration="0.3s">
          <div class="cross visible1024-cross"> <a title="close" href="javascript:void(0);" alt="Cross" aria-label="Close menu" aria-haspopup="false" aria-expanded="false"> <img
                src="content/dam/infosys-web/burger-menu/en/images/multiply.svg" alt="Cross"> </a> </div>
          <div class="submenu-portion">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <h2 class="h2-heading mb10">Services</h2>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 align-list">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-12"> 
						<a href="{{ route('products')}}" class="black-color"><h3 class="hear-txt-sub">Service</h3></a>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12"> 
						<a href="{{ route('consultancy')}}" class="black-color"><h3 class="hear-txt-sub">Consultancy</h3></a>
					</div>
					<div class="col-md-3 col-sm-3 col-xs-12"> 
						<a href="{{ route('training')}}" class="black-color"><h3 class="hear-txt-sub">Training</h3></a>
					</div>
				</div>
            </div>
            
          </div>
        </div>
        
        <!-- About Us -->
        <div class="aboutus-menu wow fadeInLeftBig" data-wow-duration="0.3s">
          <div class="cross visible1024-cross"> <a title="close" href="javascript:void(0);" alt="Cross" aria-label="Close menu" aria-haspopup="false" aria-expanded="false"> <i class="fas fa-times"></i> </a> </div>
          <div class="submenu-portion">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <h2 class="h2-heading mb10">Company</h2>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 align-list">
              <ul class="list-unstyled li-separator">
                <li><a class="dropdown-item text-uppercase" href="{{ route('about') }}">Overview</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('management.profile') }}">Management Profile</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('career')}}">Careers</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('newsroom')}}">Newsroom</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('blogs')}}">Blogs</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('whyUs') }}">Why Choose Us</a></li>
                    <li><a class="dropdown-item text-uppercase" href="{{ route('faqs')}}">FAQs</a></li>
              </ul>
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </nav>
  </div>
</div>
<!-- Burger Menu End --> 
 

<!-- Custom JS --> 
<script src="{{ asset('assets') }}/js/burger-menu.js"></script>


    



</div>

    
</div>

</div>
</div>

