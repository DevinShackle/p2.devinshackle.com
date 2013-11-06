<div class="row">
	<div class="well span4 offset1">
		<form method='POST' action=<?='/posts/p_delete/'.$post_id?>>

			<label>Delete post?</label>
			<label id='deleteWarning'>This can NOT be undone</label>
			<br><br>
			<input type='submit' value='Delete Post'>

		</form> 
	</div>
	<div class='span6 offset1'>
		<h2>Please confirm that you want to delete this post.</h2>
		<p><?=$toDelete?></p>
	</div>
</div><!--/row-->