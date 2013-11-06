<div class="row">

	<?php foreach($users as $user): ?>  

		<div class="span3 offset2 well">

			<img class="pull-right" src=<?='/uploads/avatars/'.$user["user_id"].'.png'?> 
				onError="this.onerror=null;this.src='/uploads/avatars/default.jpg';" />

			<!-- Print this user's name -->
			<h4><?=$user['first_name']?> <?=$user['last_name']?></h4>

			<!-- If there exists a connection with this user, show a unfollow link -->
			<?php if(isset($connections[$user['user_id']])): ?>
			<a href='/posts/unfollow/<?=$user['user_id']?>'>Unfollow</a>

			<!-- Otherwise, show the follow link -->
			<?php else: ?>
				<a href='/posts/follow/<?=$user['user_id']?>'>Follow</a>
			<?php endif; ?>

		</div>

	<?php endforeach; ?>
</div>  