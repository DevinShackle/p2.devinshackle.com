<div class="hero-unit">

<!--Hero unit will be customized based on whether the user is logged in-->
	<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>
<?php if($user): ?>
	<p>Jump right in and let us know what's on your mind!</p>
	<p>
		<a class="btn btn-primary btn-large" href="/posts/add">Get to postin'</a>
	</p>
<?php else: ?>
	<p><?=APP_NAME?> is a great way to let other users know what you are thinking.</a>
	<p>
		<a class="btn btn-primary btn-large" href="/users/login">Login</a>
		<small>or <a href="/users/signup">sign up for an account</a></small>
	</p>
	<p> <b>Bonus Features:</b> Now you can even <b>edit</b> and <b>delete</b> your posts!!</p>

<?php endif; ?>  	
</div>
