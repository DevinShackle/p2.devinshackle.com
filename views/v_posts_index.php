<?php foreach($posts as $post): ?>

<article>

	<div class="span10 offset1 well well-small">

		<div class="media">
			
			<img class="pull-left" src=<?='/uploads/avatars/'.$post['post_user_id'].'.png'?> 
				onError="this.onerror=null;this.src='/uploads/avatars/default.jpg';" />

			<div class="media-body">

				<h4><?=$post['first_name']?> <?=$post['last_name']?> posted:</h4>
				<p><?=$post['content']?></p>

				<div class="extras">

					<ul class="nav nav-pills">
					
					<!-- This gives users the ability to edit and delete posts that they made -->
					<?php if($post['post_user_id'] == $user->user_id): ?>

						<li>
							<form id="deletePost" method='POST' action=<?='/posts/delete/'.$post['post_id']?>>
								<input type="image" src="/img/delete_icon.png" name="delete" alt="Delete your post">
							</form> 
						</li>

						<li>
							<form id="editPost" method='POST' action=<?='/posts/edit/'.$post['post_id']?>>
								<input type="image" src="/img/edit_icon.png" name="edit" alt="Edit your post">
							</form> 
						</li>

					<?php endif; ?>

						<li>
							<time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
								<?=Time::display($post['created'])?>
							</time>
						</li>

					</ul>

				</div> <!--/div.extras-->
			</div> <!--/div.media-body-->
		</div> <!--/div.media-->
	</div>
</article>

<?php endforeach; ?>