

		 {!! Form::open(array('url'=>'latestvideos', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Videos</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='title' id='title' value='{{ $row['title'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Image" class=" control-label col-md-4 text-left"> Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["image"],"/uploads/images/videos") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Description" class=" control-label col-md-4 text-left"> Description </label>
										<div class="col-md-6">
										  <textarea name='description' rows='5' id='description' class='form-control form-control-sm '  
				           >{{ $row['description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Youtube Link" class=" control-label col-md-4 text-left"> Youtube Link <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  <input  type='text' name='youtube_link' id='youtube_link' value='{{ $row['youtube_link'] }}' 
						required     class='form-control form-control-sm ' /> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Show Home" class=" control-label col-md-4 text-left"> Show Home </label>
										<div class="col-md-6">
										  <?php $show_home = explode(",",$row['show_home']); ?>
					  
					<input type='checkbox' name='show_home[]' value ='1'   class=' minimal-green' 
					@if(in_array('1',$show_home))checked @endif 
					 /> Yes  
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('add_info', $row['add_info']) !!}					
									  <div class="form-group row  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
					<?php $status = explode(',',$row['status']);
					$status_opt = array( '1' => 'Active' ,  '2' => 'Inactive' , ); ?>
					<select name='status' rows='5' required  class='select2 '  > 
						<?php 
						foreach($status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
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
		
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 