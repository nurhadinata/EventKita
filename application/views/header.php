<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>EventGo</title>	
</head>
<body>
		<header>
			<hgroup>
				<h1>EventGo</h1>
			</hgroup>
			<nav>
				<ul>
					<li><a href="<?php echo base_url().'index.php/web' ?>">Home</a></li>
					<li><a href="<?php echo base_url().'index.php/web/about' ?>">About</a></li>
					<li><a href="<?php if(empty($user)){ echo base_url().'event/signup';} else {echo base_url().'event/user_update';} ?>">Akun</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</header>