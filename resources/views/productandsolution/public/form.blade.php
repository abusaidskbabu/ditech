

		 {!! Form::open(array('url'=>'productandsolution', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Product And Solution</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group row  " >
										<label for="Service Id" class=" control-label col-md-4 text-left"> Service Id </label>
										<div class="col-md-6">
										  <select name='service_id' rows='5' id='service_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Industry" class=" control-label col-md-4 text-left"> Industry </label>
										<div class="col-md-6">
										  <select name='extra1' rows='5' id='extra1' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group row  " >
										<label for="Partner" class=" control-label col-md-4 text-left"> Partner </label>
										<div class="col-md-6">
										  <select name='extra2' rows='5' id='extra2' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
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
										<label for="Image" class=" control-label col-md-4 text-left"> Image </label>
										<div class="col-md-6">
										  
						<div class="fileUpload btn " > 
						    <span>  <i class="fa fa-camera"></i>  </span>
						    <div class="title"> Browse File </div>
						    <input type="file" name="image" class="upload"   accept="image/x-png,image/gif,image/jpeg"     />
						</div>
						<div class="image-preview preview-upload">
							{!! SiteHelpers::showUploadedFile( $row["image"],"/uploads/images/products") !!}
						</div>
					 
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
										<label for="Type" class=" control-label col-md-4 text-left"> Type </label>
										<div class="col-md-6">
										  
					<?php $type = explode(',',$row['type']);
					$type_opt = array( 'product' => 'Product' ,  'service' => 'Service' ,  'consultancy' => 'Consultancy' ,  'training' => 'Training' , ); ?>
					<select name='type' rows='5'   class='select2 '  > 
						<?php 
						foreach($type_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['type'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
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
		
		
		$("#service_id").jCombo("{!! url('productandsolution/comboselect?filter=dit_services:id:service_name') !!}",
		{  selected_value : '{{ $row["service_id"] }}' });
		
		$("#extra1").jCombo("{!! url('productandsolution/comboselect?filter=industries:id:title') !!}",
		{  selected_value : '{{ $row["extra1"] }}' });
		
		$("#extra2").jCombo("{!! url('productandsolution/comboselect?filter=our_protfolios:id:title') !!}",
		{  selected_value : '{{ $row["extra2"] }}' });
		
		$("#status").jCombo("{!! url('productandsolution/comboselect?filter=status:id:title') !!}",
		{  selected_value : '{{ $row["status"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
