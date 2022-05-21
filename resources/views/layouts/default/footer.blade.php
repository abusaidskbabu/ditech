<footer id="footer">
  <article>
    <div class="container pt50 pb50">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 col-xs-12">
          
          <ul class="list-unstyled footer-txt">
            <li class="m-t-0">
              <a class="" href="{{ url('/') }}" title="Go to Infosys Home" aria-label="Go to Infosys Home">
                <img id="logo" src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}">
              </a>
            </li>
            <li><a class="" href="{{ route('about') }}">Overview</a></li>
            <li><a class="e" href="{{ route('management.profile') }}">Management Profile</a></li>
            <li><a class="" href="{{ route('portfolio') }}">Portfolio</a></li>
            <li><a class="" href="{{ route('career')}}">Careers</a></li>
            <li><a class="" href="{{ route('newsroom')}}">Newsroom</a></li>
            <li><a class="" href="{{ route('blogs')}}">Blogs</a></li>
            <li><a class="" href="{{ route('whyUs') }}">Why Choose Us</a></li>
            <li><a class="" href="{{ route('faqs')}}">FAQs</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 col-xs-12">
          <h3 class="ftr-head mt-xs-20">Solutions</h3>
          <ul class="list-unstyled footer-txt">
			@foreach(DB::table('dit_services')->where('status',1)->where('parrent','Yes')->get() as $row)
				<li><a href="{{ route('company.services.single', $row->id )}}" title="EdgeVerve Systems" target="_blank">{{ $row->service_name }}</a></li>
			@endforeach
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12 col-xs-12">
          <h3 class="ftr-head mt-xs-20">Services</h3>
          <ul class="list-unstyled footer-txt">
            <li>
              <a href="{{ route('products') }}" title="" >Service</a>
            </li>
            <li>
              <a href="{{ route('consultancy') }}" >Consultancy</a>
            </li>
			<li>
              <a href="{{ route('training') }}" >Training</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-12 col-xs-12">
          <h3 class="ftr-head mt-xs-20">Industries</h3>
          <ul class="list-unstyled footer-txt">
			@foreach(DB::table('industries')->where('status',1)->get() as $row)
				<li><a href="{{ route('industry.details',$row->id) }}" title="">{{ $row->title }}</a></li>
			@endforeach
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12 col-xs-12">
          <h3 class="ftr-head mt-sm-20">Connect with us</h3>
          
          <ul class="list-unstyled footer-txt">
            <li>
              <p class="text-white"><i class="fas fa-map-marker-alt"></i> 
                {{ $setting->address }}
              </p>
            </li>
            <li><a href="mailto:{{ $setting->email }}" title=""><i class="fas fa-envelope "></i> {{ $setting->email }}</a></li>
            <li><a href="tel:{{ $setting->phone }}" class="font-weight-bold" title=""><i class="fas fa-phone "></i> {{ $setting->phone }}</a></li>
          </ul>
          <ul class="list-inline footer-txt">
            <li> 
              <a title="Follow us on Twitter" target="_blank" href="{{ $setting->twitter }}"> 
                <i class="fab fa-twitter"></i>
              </a> 
            </li>
            <li> 
              <a title="Follow us on Facebook" target="_blank" href="{{ $setting->facebook }}"> 
                <i class="fab fa-facebook"></i>
              </a> 
            </li>
            <li> 
              <a title="Follow us on Linkedin" target="_blank" href="{{ $setting->linkedin }}"> 
                <i class="fab fa-linkedin"></i>
              </a> 
            </li>
            <li> 
              <a title="Follow us on Youtube" target="_blank" href="{{ $setting->youtube }}"> 
                <i class="fab fa-youtube"></i>
              </a> 
            </li>
            <li> 
              <a title="Follow us on Instagram" target="_blank" href="{{ $setting->instagram }}"> 
                <i class="fab fa-instagram"></i> 
              </a> 
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid ptb15 bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12 col-xs-12 text-center">
            <p class="mb0 text-white" style="font-size: 12px;">{{ $setting->copyright_text }}</p>
          </div>
        </div>
      </div>
    </div>
  </article>
</footer>
<a href="javascript:void(0)" class="scroll-up"> 
  <i class="fas fa-chevron-up"></i>
</a> 


    



</div>

    
</div>

</div>
</div>

    
</div>
</div>


            
    
    


    
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery-ui.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/utils.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/jquery/granite.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/legacy/shared.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/clientlib-commons.js"></script>
<script type="text/javascript" src="{{ asset('assets') }}/js/clientlib-base.js"></script>




<script type="text/javascript" src="{{ asset('assets') }}/js/kih5gnb.js"></script>
<script>
  try {
    Typekit.load({
      async : true
    });
  } catch (e) {
  }
</script>

<script>
	$(document).ready(function(){
		$(".dropdown").hover(function(){
			$(".dropdown-2").removeClass('d-block');
			$(".dropdown-2").addClass('d-none');
		});
	});  

$(document).on('mouseover','.expend-dropdown',function(){

      var dropdownMenu = $(this).attr('id');
      $(".dropdown-2").each(function() {
        $(this).removeClass('d-block');
        $(this).addClass('d-none');
      })
      
      $(".ex"+dropdownMenu).removeClass('d-none');
      $(".ex"+dropdownMenu).addClass('d-block');
  
})


</script>


<script type="text/javascript">
   
</script>

    

    

        <!--<p>Design and Developed by DITS</p>-->
            

        </div>
        
        
    </body>

</html>
