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
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.3s"> 
                <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="">
                <h2 class="h2-heading black-color">BLOGS</h2>
                <p class="col-lg-8 col-md-8 col-md-offset-2 para-txt black-color mb50">Latest Tech blogs.</p>
              </div>
              @php
                  $blog_news = DB::table('dit_blocg_news')->where('status',1)->where('extra1','blog')->orderBy('id','DESC')->get();
              @endphp
              <div class="content home-second-heading-top">
                <div class="row1 m0 row-eq-ht col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="col-eq-ht">
                      <div class="row row-eq-ht">
                        @foreach($blog_news as $row)
                        <div class="
                        @if($loop->iteration <= 3)
                          col-lg-4 col-md-4 col-sm-6 col-xs-12 
                        @elseif($loop->iteration > 3 && $loop->iteration <= 5)
                          col-lg-6 col-md-6 col-sm-6 col-xs-12 
                        @elseif($loop->iteration > 5 && $loop->iteration <= 8)
                          col-lg-4 col-md-4 col-sm-6 col-xs-12 
                        @else
                          col-lg-3 col-md-3 col-sm-6 col-xs-12 
                        @endif
                          mb-xs-20 p-1 ctrl-width-mob">
                          <div class="col-eq-ht"> 
                            <a href="{{ route('news.details', $row->id)}}" title="{{ $row->heading }}">
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


@include('layouts.default.coll-us')
@include('layouts.default.footer')