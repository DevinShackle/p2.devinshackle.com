<!DOCTYPE html>
<html>
<head>
    <title><?php if(isset($title)) echo $title; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />   
    <!-- Common CSS/JSS -->
    <link rel="stylesheet" href="/css/app.css" type="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>

    <!-- Bootstrap CSS/JS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <!--jQuery Validator-->
    <script type="text/javascript" src="/js/jquery.validate.min.js"></script>

    <!-- Controller Specific CSS/JS -->
    <?php if(isset($client_files_head)) echo $client_files_head; ?>

</head>


<body>  

	<div class="navbar">
	  	<div class="navbar-inner">
	   	 	<span class="brand"><?=APP_NAME?></span>
	   	 	<ul class="nav">
	   	 		<li><a href="/">Home</a></li>

	   	 	<?php if($user): ?>
	      		<li><a href='/users/logout'>Logout</a></li>
	      		<li><a href='/users/profile'>Profile</a></li>
	      		<li><a href='/posts/users'>Users</a></li>
	      		<li><a href='/posts/index'>My Stream</a></li>
	      		<li><a href='/posts/add'><b>Post</b></a></li>
	      	<?php else: ?>

	      		<li><a href='/users/signup'>Sign Up</a></li>
	      		<li><a href='/users/login'>Login</a></li>

	      	<?php endif; ?>

	   		</ul>
	  	</div>
	</div>



    <br>

    <?php if(isset($content)) echo $content; ?>

</body>
</html>