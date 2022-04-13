@extends('layouts.app')

@section('content')
<div class="page-header"><h2> {{ $pageTitle }} <small> {{ $pageNote }} </small> </h2></div>

	{!! Form::open(array('url'=>'whytalentsourcing?return='.$return, 'class'=>'form-horizontal validated sximo-form','files' => true ,'id'=> 'FormTable' )) !!}
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
						<fieldset><legend> Why Talent Sourcing</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Heading" class=" control-label col-md-4 text-left"> Heading </label>
										<div class="col-md-6">
										  <input  type='text' name='heading' id='heading' value='{{ $row['heading'] }}' 
						     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Heading Position" class=" control-label col-md-4 text-left"> Heading Position </label>
										<div class="col-md-6">
										  
					<?php $heading_position = explode(',',$row['heading_position']);
					$heading_position_opt = array( 'left' => 'Left' ,  'center' => 'Center' ,  'right' => 'Right' , ); ?>
					<select name='heading_position' rows='5'   class='select2 '  > 
						<?php 
						foreach($heading_position_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['heading_position'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Content" class=" control-label col-md-4 text-left"> Content </label>
										<div class="col-md-6">
										  <textarea name='content' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['content'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Content Image" class=" control-label col-md-4 text-left"> Content Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="content_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="content_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["content_image"],"/uploads/images/whyus") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Image Left" class=" control-label col-md-4 text-left"> Image Left </label>
										<div class="col-md-6">
										  <?php $image_left = explode(",",$row['image_left']); ?>
					  
					<input type='checkbox' name='image_left[]' value ='1'   class=' minimal-green' 
					@if(in_array('1',$image_left))checked @endif 
					 /> Show Right  
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Content Background Color" class=" control-label col-md-4 text-left"> Content Background Color </label>
										<div class="col-md-6">
										  <input  type='text' name='content_background_color' id='content_background_color' value='{{ $row['content_background_color'] }}' 
						     class='form-control  colorpicker' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Content Bg Image" class=" control-label col-md-4 text-left"> Content Bg Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="content_bg_image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="content_bg_image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["content_bg_image"],"/uploads/images/whyus") !!}
						</div>
					 
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
									  </div> </fieldset></div>
	
		</div>

		<input type="hidden" name="action_task" value="save" />
		
		</div>
	</div>		
	{!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		
		$("#status").jCombo("{!! url('whytalentsourcing/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 	
		 	 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("whytalentsourcing/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop