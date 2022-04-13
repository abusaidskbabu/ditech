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
                        {{ $title }}
                    </h1>
                </div>
            </div>
        </article>
    </section>
</div>


<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12">
     <section id="do_more" class="scroll-section pt75">
		  <article class="container relative">
		    <div class="row">
		      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 

		        
		      </div>
		    </div>
		    <div class="closeWrpr hidden-xs"></div>
		    
		   
		  </article>
</section>


    



</div>

@include('layouts.default.coll-us')
        
@include('layouts.default.footer')