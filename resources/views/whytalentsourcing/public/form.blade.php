

		 {!! Form::open(array('url'=>'whytalentsourcing', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


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

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-default btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-default btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 <input type="hidden" name="action_task" value="public" />
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#status").jCombo("{!! url('whytalentsourcing/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
