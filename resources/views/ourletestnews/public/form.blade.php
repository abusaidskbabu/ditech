

		 {!! Form::open(array('url'=>'ourletestnews', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Our Letest News</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title </label>
										<div class="col-md-6">
										  <input  type='text' name='title' id='title' value='{{ $row['title'] }}' 
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
										<label for="Descriptions" class=" control-label col-md-4 text-left"> Descriptions </label>
										<div class="col-md-6">
										  <textarea name='descriptions' rows='5' id='editor' class='form-control form-control-sm editor '  
						 >{{ $row['descriptions'] }}</textarea> 
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
							{!! SiteHelpers::showUploadedFile( $row["image"],"/uploads/images/news") !!}
						</div>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Date" class=" control-label col-md-4 text-left"> Date </label>
										<div class="col-md-6">
										  
				<div class="input-group input-group-sm m-b" style="width:150px !important;">
					{!! Form::text('date', $row['date'],array('class'=>'form-control form-control-sm date')) !!}
					<div class="input-group-append">
					 	<div class="input-group-text"><i class="fa fa-calendar"></i></span></div>
					 </div>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Author" class=" control-label col-md-4 text-left"> Author </label>
										<div class="col-md-6">
										  <input  type='text' name='author' id='author' value='{{ $row['author'] }}' 
						     class='form-control form-control-sm ' /> 
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
					 /> Show  
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
		
		
		$("#status").jCombo("{!! url('ourletestnews/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
