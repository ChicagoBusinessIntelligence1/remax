<div class="panel">
	<div class="row noMargin">
		<div class="large-1 column userImgL">
			<img class="userImg"src="{{url('comp/img/userL.png')}}" alt="name">
		</div>
		<div class="large-9 columns userPanel">
			<h1>User Panel</h1>
		</div>
		<div class="large-2 columns"></div>
		<div class="editProfile">
		{{link_to('user-edit/'.Auth::user()->id, 'Edit My Profile', array('class'=>'aEditProfileStyle button tiny secondary'))}} 
		</div>
	</div>          
	<div class="row">
		<div class="large-12 columns requestButtons">
			<ul class="inline-list ulUserPanel">	
				<li>

					{{link_to('dream-home-request', 'Leave a Request for my Dream Home', array('class'=>'aUserPanelStyle  button tiny leaveRequest'))}} 
				</li>
				<li>	
					{{link_to('dream-home-request-management', 'Manage My Previous Request', array('class'=>'aUserPanelStyle manageRequest button tiny'))}} 
				</li>
				<li>	
					{{link_to('saved-homes', 'My Saved Homes', array('class'=>'manageRequest button tiny aUserPanelStyle'))}} 

				</li>
			</ul>
		</div>
	</div>
</div>
