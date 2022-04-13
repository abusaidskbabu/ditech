@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'ourservices?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
	<div class="toolbar-nav">
		<div class="row">
			
			<div class="col-md-6 " >
				<div class="submitted-button">
					<button name="apply" class="tips btn btn-sm btn-default  "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-check"></i> {{ __('core.sb_apply') }} </button>
					<button name="save" class="tips btn btn-sm btn-default"  id="saved-button" title="{{ __('core.btn_back') }}" ><i class="fa  fa-paste"></i> {{ __('core.sb_save') }} </button> 
				</div>	
			</div>
			<div class="col-md-6 text-right " >
				<a href="{{ url($pageModule.'?return='.$return) }}" class="tips btn btn-default  btn-sm "  title="{{ __('core.btn_back') }}" ><i class="fa  fa-times"></i></a> 
			</div>
		</div>
	</div>	


	<div class="p-5">
		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>		
		<div class="row">
	<div class="col-md-12">
						<fieldset><legend> Our Services</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Parrent Id" class=" control-label col-md-4 text-left"> Parrent Id </label>
										<div class="col-md-6">
										  <select name='parrent_id' rows='5' id='parrent_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Service Name" class=" control-label col-md-4 text-left"> Service Name </label>
										<div class="col-md-6">
										  <input  type='text' name='service_name' id='service_name' value='{{ $row['service_name'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Service Icone" class=" control-label col-md-4 text-left"> Service Icone </label>
										<div class="col-md-6">
										  <input  type='text' name='service_icone' id='service_icone' value='{{ $row['service_icone'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Short Description" class=" control-label col-md-4 text-left"> Short Description </label>
										<div class="col-md-6">
										  <textarea name='short_description' rows='5' id='short_description' class='form-control form-control-sm '  
				           >{{ $row['short_description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Details" class=" control-label col-md-4 text-left"> Details </label>
										<div class="col-md-6">
										  <textarea name='details' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['details'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Banner Image" class=" control-label col-md-4 text-left"> Banner Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="banner_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="banner_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["banner_image"],"/uploads/images/services") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Parrent" class=" control-label col-md-4 text-left"> Parrent </label>
										<div class="col-md-6">
										  <?php $parrent = explode(",",$row['parrent']); ?>
					  
					<input type='checkbox' name='parrent[]' value ='Yes'   class=' minimal-green' 
					@if(in_array('Yes',$parrent))checked @endif 
					 /> Yes  
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  <select name='status' rows='5' id='status' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Child" class=" control-label col-md-4 text-left"> Child </label>
										<div class="col-md-6">
										  <?php $created_at = explode(",",$row['created_at']); ?>
					  
					<input type='checkbox' name='created_at[]' value ='1'   class=' minimal-green' 
					@if(in_array('1',$created_at))checked @endif 
					 /> Yes  
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset></div>
	
		</div>

		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		
		$("#parrent_id").jCombo("{!! url('ourservices/comboselect?filter=dit_services:id:service_name') !!}",
		{  selected_value : '{{ $row["parrent_id"] }}' });
		
		$("#status").jCombo("{!! url('ourservices/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("ourservices/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop