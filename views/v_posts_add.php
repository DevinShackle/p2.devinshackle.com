<div class="row">
	<div class="well span4 offset1">
		<form method='POST' action='/posts/p_add'>

			<label for='content'>New Post:</label><br>
			<textarea name='content' id='content'></textarea>

			<br><br>
			<input type='submit' value='Post it!'>

		</form> 
	</div>
	<div class='span6 offset1'>
		<h2>What's on your mind<?php if($user) echo ', '.$user->first_name; ?>?</h2>
	</div>
</div><!--/row-->