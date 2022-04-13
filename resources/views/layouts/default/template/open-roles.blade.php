@include('layouts.default.header')
 <div class="wrapper-page">
    <div class="content-page">
        <div class="page-breadcrumb d-flex h-100 " style="background-image: url({{url('/')}}/uploads/images/banner/{{ $breadcum->image }});">
            <div class="container align-self-center w-100">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="content-page-breadcrumb text-center">
                            <div class="title-page-breadcrumb">
                                <h1>{{ $title }}</h1>
                            </div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="services p-0">
	        <div class="title-page text-center animated-Fade-In-Up-1">
	          <div class="container">
	            <div class="row">
	              <div class="col-md-12 col-lg-8 offset-lg-2">
	                <h1>{{ $title }}</h1>
	                <hr class="line-title my-3">
	                <h4>We believe in learning by doing and that there is no better classroom than real-world experience</h4>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="gr-card-services">
	          <div class="container">
	            <div class="row">
	              @foreach($role as $row)
	              	@php 
	              		$total_job = DB::table('con_circular')->where('category', $row->id)->where('status', 1)->count();
	              	@endphp
	                <div class="col-md-6 col-lg-3">
	                  <div class="card card-services p-2 box-shado text-center animated-Fade-In-{{ $loop->iteration }}" style="height:251px">
	                    <div class="icon-card-services"> <i class="{{ $row->icon }}"></i>
	                    </div>
	                    <div class="card-body">
	                      <h2 class="card__title mt-0 mb-1"><a href="{{ route('jobs',['id'=>$row->id,'name'=>$row->category_name]) }}">{{ $row->category_name }}</a></h2>
	                      <p>{{  Str::limit(strip_tags($row->descriptions), $limit = 50, $end = '.') }}</p>
	                    </div>
	                    <div class="card__footer"> 
	                    	<span class="icon ion-chatbox"></span>
	                    	<a href="{{ route('jobs',['id'=>$row->id,'name'=>$row->category_name]) }}"> {{ $total_job }} Jobs</a>
                    	</div>
	                  </div>
	                </div>
	                @endforeach
	                <div class="blog-pagination">
                        <nav>
                            <ul class="pagination justify-content-center">
                                {{ $role->links() }}
                            </ul>
                        </nav>
                    </div>
	            </div>
	          </div>
	        </div>
	    </div>
        <!-- End Our Vision Section -->
        @include('layouts.default.template.work-together')
        <!-- Button Back Top -->
        <div class="back-top"> <a href="#top"><i class="fas fa-angle-up"></i></a> 
        </div>
        <!-- End Button Back Top -->
    </div>
</div>
    <!-- Content Page -->
@include('layouts.default.footer')