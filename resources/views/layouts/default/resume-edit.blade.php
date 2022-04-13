<div class="row">
	<div class="col-md-12 col-12">
		<p>Here you can edit your resume in five different steps (Personal, Education/ Training, Employment, Other Information and Photograph). To enrich your resume provide authentic information.</p>
	</div>
	<div class="col-md-12 col-12">
		<nav aria-label="breadcrumb">
		  	<ol class="breadcrumb bg-secondary p-2">
		    	<li class="breadcrumb-item"><a href="#"> <i class="fa fa-home" width="24" height="24" role="img" aria-label=""></i> Home</a></li>
		    	<li class="breadcrumb-item active" aria-current="page">Edit Resume</li>
		  	</ol>
		</nav>
	</div>

	<div class="col-12 col-md-12 mt-2">
		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		  	<li class="nav-item">
		    	<a class="nav-link custom-color-a text-center active" id="pills-personal-tab" data-toggle="pill" href="#pills-personal" role="tab" aria-controls="pills-personal" aria-selected="true"><i class="fa fa-user"></i><br> Personal</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link custom-color-a text-center" id="pills-education-tab" data-toggle="pill" href="#pills-education" role="tab" aria-controls="pills-education" aria-selected="false"><i class="fa fa-user-graduate"></i><br> Education/Training</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link custom-color-a text-center" id="pills-employment-tab" data-toggle="pill" href="#pills-employment" role="tab" aria-controls="pills-employment" aria-selected="false"><i class="fa fa-briefcase"></i><br> Employment</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link custom-color-a text-center" id="pills-otherinfo-tab" data-toggle="pill" href="#pills-otherinfo" role="tab" aria-controls="pills-otherinfo" aria-selected="false"><i class="fa fa-info"></i><br> Other Information</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link custom-color-a text-center" id="pills-photograph-tab" data-toggle="pill" href="#pills-photograph" role="tab" aria-controls="pills-photograph" aria-selected="false"><i class="fa fa-camera"></i><br> Photograph</a>
		  	</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
		  	<div class="tab-pane fade show active" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
		  		@include('layouts.default.personal')
		  	</div>
		  	<div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">...</div>
		  	<div class="tab-pane fade" id="pills-employment" role="tabpanel" aria-labelledby="pills-employment-tab">...</div>
		  	<div class="tab-pane fade" id="pills-otherinfo" role="tabpanel" aria-labelledby="pills-otherinfo-tab">...</div>
		  	<div class="tab-pane fade" id="pills-photograph" role="tabpanel" aria-labelledby="pills-photograph-tab">...</div>
		</div>
	</div>
</div>