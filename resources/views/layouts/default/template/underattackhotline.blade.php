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

    <section id="" class="scroll-section mt50">
      <article class="container">
        <div class="row">
          {{-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center wow fadeInUp mb10" data-wow-delay="0.3s"> 
            <img src="{{ asset('assets') }}/images/18/vertical-line.png" alt="" />
            <h2 class="h2-heading">Under Attack Hotline</h2>
          </div> --}}
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-delay="0.3s" style="">
            <section id="request_for_services">
              <h4 class="aboutus-inthenews-head">Attack Protection Hotline</h4>
              <span class="investors-news-head text-uppercase">Complete this form or call us at {{ $setting->phone }}</span>

              @if (\Session::has('success'))
                  <div class="alert alert-success">
                      {!! \Session::get('success') !!}
                       <script>setTimeout(function(){ jQuery('.alert-success').remove(); }, 5000);</script>
                  </div>
              @endif

              <form class="row mt30" method="post" action="{{ route('under.attack.hotline.store') }}">
                @csrf
                <div class="form-group col-lg-12">
                  <input type="text" name="first_name" class="form-control" placeholder="First Name *">
                </div>
                <div class="form-group col-lg-12">
                  <input type="text" name="last_name" class="form-control" placeholder="Last Name *">
                </div>
                <div class="form-group col-lg-12">
                  <input type="text" name="company" class="form-control" placeholder="Company *">
                </div>
                <div class="form-group col-lg-12">
                  <input type="text" name="email" class="form-control" placeholder="Email *">
                </div>
                <div class="form-group col-lg-12">
                  <select class="form-control " name="job_title">
                    <option>Job Title</option>                  
                    <option value="Infrastructure - VP/Director">Infrastructure - VP/Director</option>
                    <option value="Infrastructure - Manager">Infrastructure - Manager</option>
                    <option value="Infrastructure - C-Level">Infrastructure - C-Level</option>
                    <option value="Infrastructure - Architect">Infrastructure - Architect</option>
                    <option value="Eng/DevOps - C-Level">Eng/DevOps - C-Level</option>
                    <option value="Eng/DevOps - VP/Director">Eng/DevOps - VP/Director</option>
                    <option value="Eng/DevOps - Manager">Eng/DevOps - Manager</option>
                    <option value="Eng/DevOps - Staff">Eng/DevOps - Staff</option>
                    <option value="IT - C-Level">IT - C-Level</option>
                    <option value="IT - VP/Director">IT - VP/Director</option>
                    <option value="IT - Manager">IT - Manager</option>
                    <option value="IT - Staff">IT - Staff</option>
                    <option value="Security - C-Level">Security - C-Level</option>
                    <option value="Security - VP/Director">Security - VP/Director</option>
                    <option value="Security - Manager">Security - Manager</option>
                    <option value="Security - Staff">Security - Staff</option>
                    <option value="Finance/Procurement - C-Level">Finance/Procurement - C-Level</option>
                    <option value="Finance/Procurement - VP/Director">Finance/Procurement - VP/Director</option>
                    <option value="Finance/Procurement - Manager">Finance/Procurement - Manager</option>
                    <option value="Finance/Procurement - Staff">Finance/Procurement - Staff</option>
                    <option value="Sales/Marketing - C-Level">Sales/Marketing - C-Level</option>
                    <option value="Sales/Marketing - VP/Director">Sales/Marketing - VP/Director</option>
                    <option value="Product - Product Manager">Product - Product Manager</option>
                    <option value="Press/Media">Press/Media</option>
                    <option value="Student/Intern">Student/Intern</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <div class="form-group col-lg-12">
                  <input type="text" name="phone" class="form-control" placeholder="Phone *">
                </div>
                <div class="form-group col-lg-12">
                  <input type="text" name="website" class="form-control" placeholder="Website *">
                </div>
                <div class="form-group col-lg-12">
                  <select class="form-control " name="type_of_attack">
                    <option>Type Of Attack</option>
                    <option value="DDoS Attack">DDoS Attack</option>
                    <option value="Bot Attack">Bot Attack</option>
                    <option value="Ransomware Attack">Ransomware Attack</option>
                    <option value="Identity or Access Attack">Identity or Access Attack</option>
                    <option value="Network or Firewall Attack">Network or Firewall Attack</option>
                    <option value="Web or Application Attack">Web or Application Attack</option><option value="DNS Hijacking or On Path Attack">DNS Hijacking or On Path Attack</option><option value="Cloud Resources Attack">Cloud Resources Attack</option>
                    <option value="Not Sure? We’ll help you assess">Not Sure? We’ll help you assess</option>
                  </select>
                </div>
                <div class="col-lg-12">
                  <textarea class="form-control" name="comment" cols="40" rows="10" placeholder="Comment"></textarea>
                </div>
                <div class="col-lg-12 mt30 text-center">
                  <button class="btn btn-no-effect reques-btn text-uppercase" type="submit" title="Explore Careers">GET HELP</button>
                </div>
              </form>
            </section>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-sm-40 wow fadeInUp" data-wow-delay="0.3s">
            <h4 class="aboutus-inthenews-head">Are you under attack?</h4>
            <strong>We can protect you in an emergency from the following:</strong>
            <img class="responsive-image mt30" title="Under ddos attack" alt="Under ddos attack" src="{{ asset('assets') }}/images/Cloudflare_Security_Solutions__1_.svg">
            <ul class="list-unstyled footer-txt">
              <li><a href="" class="font-weight-bold" title=""><i class="fas fa-adjust"></i> DDoS Attacks</a></li>
              <li><a href="" class="font-weight-bold" title=""><i class="fas fa-adjust"></i> Ransomware Attacks</a></li>
              <li><a href="" class="font-weight-bold" title=""><i class="fas fa-adjust"></i> Identity or Access Attacks</a></li>
              <li><a href="" class="font-weight-bold" title=""><i class="fas fa-adjust"></i> Network or Firewall Attacks</a></li>
              <li><a href="" class="font-weight-bold" title=""><i class="fas fa-adjust"></i> Web or Application Attacks</a></li>
              <li><a href="" class="font-weight-bold" title=""><i class="fas fa-adjust"></i> DNS Hijacking or On Path Attacks</a></li>
              <li><a href="" class="font-weight-bold" title=""><i class="fas fa-adjust"></i> Not Sure? We’ll help you assess.</a></li>
            </ul>
          </div>
        </div>
      </article>
    </section>
</div>




@if ($errors->any())
    <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
             <script>setTimeout(function(){ jQuery('.alert-danger').remove(); }, 5000);</script>
    </div>
@endif

@include('layouts.default.coll-us')
        
@include('layouts.default.footer')