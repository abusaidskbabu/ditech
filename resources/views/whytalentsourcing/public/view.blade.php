<div class="container" class="pt-3 pb-3">
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-container" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Heading', (isset($fields['heading']['language'])? $fields['heading']['language'] : array())) }}</td>
						<td>{{ $row->heading}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Heading Position', (isset($fields['heading_position']['language'])? $fields['heading_position']['language'] : array())) }}</td>
						<td>{{ $row->heading_position}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Content', (isset($fields['content']['language'])? $fields['content']['language'] : array())) }}</td>
						<td>{{ $row->content}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Content Image', (isset($fields['content_image']['language'])? $fields['content_image']['language'] : array())) }}</td>
						<td>{{ $row->content_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Image Left', (isset($fields['image_left']['language'])? $fields['image_left']['language'] : array())) }}</td>
						<td>{{ $row->image_left}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Content Background Color', (isset($fields['content_background_color']['language'])? $fields['content_background_color']['language'] : array())) }}</td>
						<td>{{ $row->content_background_color}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Content Bg Image', (isset($fields['content_bg_image']['language'])? $fields['content_bg_image']['language'] : array())) }}</td>
						<td>{{ $row->content_bg_image}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->status,'status','1:status:id:title') }} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	