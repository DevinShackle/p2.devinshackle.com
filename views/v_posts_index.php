<?php foreach($posts as $post): ?>

<article>

    <h1><?=$post['first_name']?> <?=$post['last_name']?> posted:</h1>

    <p><?=$post['content']?></p>

    <time datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
        <?=Time::display($post['created'])?>
    </time>
   	

   	<!-- This gives users the ability to edit and delete posts that they made -->
   	<?php if($post['post_user_id'] == $user->user_id): ?>

    	<form id="editPost" method='POST' action=<?='/posts/edit/'.$post['post_id']?>>
		    <input type="image" src="/img/edit_icon.gif" name="edit" alt="Edit your post">
		</form> 
		
		<form id="deletePost" method='POST' action=<?='/posts/delete/'.$post['post_id']?>>
		    <input type="image" src="/img/delete_icon.png" name="delete" alt="Delete your post">
		</form> 

	<?php endif; ?>


</article>

<?php endforeach; ?>