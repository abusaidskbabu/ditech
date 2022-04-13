@include('layouts.default.header')
  <div class="wrapper-page">
    <div class="content-page">
        <div class="page-breadcrumb d-flex h-100 " style="background-image: url({{url('/')}}/uploads/images/banner/{{ $breadcum->image }});">
            <div class="container align-self-center w-100">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="content-page-breadcrumb text-center">
                            <div class="title-page-breadcrumb">
                                <h1>Value Detail</h1>
                                <h3 class="mt-4 mb-4 font-weight-lighter text-white">{{ $breadcum->title }}</h3>
                            </div>
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page"><a href="#">Values</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $value->title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="news-detail">
            <div class="container">
                <div class="base-news-detail">
                    <div class="row no-gutters">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="content-news-detail">
                                <img src="{{url('/')}}/uploads/images/values/{{ $value->image }}" alt="" class="img-fluid">
                                <h2 class="font-weight-bold mt-4 mb-4">{{ $value->title }}</h2>
                                <div class="block-times">
                                    <em class="info-author">{{ $value->short_details }}</em>
                                </div>
                                <br>
                                {!! $value->details !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo-partner">
            <div class="title-page text-white text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-8 offset-lg-2">
                            <h1>Our Values</h1>
                            <hr class="line-title my-3">
                            <h4>Help improve local economies, make roads safer, and bring opportunities to millions of people around the world.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gr-card-services">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="owl-carousel owl-theme" id="other-values">
                                @foreach(DB::table('tbl_our_values')->where('status', 1)->orderBy('title', 'ASC')->get() as $row)
                                    <div class="item">
                                        <div class="card card-services p-2 box-shado text-center animated-Fade-In-1 " style="height:251px">
                                            <div class="icon-card-services"> <i class="{{ $row->icon }}"></i></div>
                                            <div class="card-body">
                                                <h2 class="card__title mt-0 mb-1"><a href="{{ route('value.details', $row->id) }}">{{ $row->title }}</a></h2>
                                                <p>{{  Str::limit(strip_tags($row->short_details), $limit = 80, $end = '..') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.default.template.work-together')
        <!-- Button Back Top -->
        <div class="back-top"> <a href="#top"><i class="fas fa-angle-up"></i></a> 
        </div>
        <!-- End Button Back Top -->
    </div>
    <!-- Content Page -->
</div>
@include('layouts.default.footer')