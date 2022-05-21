@php 
	$call_us = DB::table('con_banner_slider')->where('type','call-us')->where('status', 1)->first();
@endphp
<div class="freeflowhtml aem-GridColumn aem-GridColumn--default--12" style="background-image: url('{{url('/')}}/uploads/images/banner/{{ $call_us->image}}');background-repeat: no-repeat;background-size: cover;">
     <section id="investors" class="scroll-section pt75 pb75">
  <article class="container">
    <div class="row">
      <div class="video-img-container wow fadeInUp" data-wow-delay="0.6s">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
         
         
        
          
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-sm-20">
           <span class="investors-news-head text-uppercase">by 35+ customers for 50+ clients</span>
          <div class="aboutus-inthenews-row"> 
            <a href="tel:{{ $setting->phone }}" title="Call For Advice Now!">
            <span class="investors-news-head text-uppercase">Call For Advice Now!</span>
            <h4 class="aboutus-inthenews-head"><i class="fas fa-phone "></i> {{ $setting->phone }}</h4>
            </a>
          </div>
          <div class="aboutus-inthenews-row"> 
            <a href="mailto:{{ $setting->email }}" title="Say Hello">
            <span class="investors-news-head text-uppercase">Say Hello</span>
            <h4 class="aboutus-inthenews-head"><i class="fas fa-envelope "></i>  {{ $setting->email }}</h4>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </article>
</section>


</div>