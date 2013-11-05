<div class="row">
	<div class="well span4 offset1">
		<form method='POST' action=<?='/posts/p_edit/'.$post_id?>>

		    <label for='content'>Edit your post:</label><br>
		    <textarea name='content' id='content'><?=$postContent?></textarea>

		    <br><br>
		    <input type='submit' value='Save Changes'>

		</form> 
	</div>
	<div class='span6 offset1'>
		<h2>Here you can edit a previous post.</h2>
	</div>
</div><!--/row-->