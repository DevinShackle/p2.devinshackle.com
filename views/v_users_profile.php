<div class="row">
	<div class="well span4 offset1">
		<h3>You've made <?=$user->numPosts?> posts</h3>
		<h3>You are following <?=$user->numFollowed?> users</h3>
		<h3>You are being followed by <?=$user->numFollowing?> users</h3>
	</div>
	<div class='span6 offset1'>
		<h1>Hi, <?=$user->first_name?>!</h1>
		<h3>This is your user profile</h3>
		<img class="profilePic" alt="Profile Picture" src=<?='/uploads/avatars/'.$user->user_id.'.png'?> 
			onError="this.onerror=null;this.src='/uploads/avatars/default.jpg';" />
	</div>
</div><!--/row-->