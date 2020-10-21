<?php
	include_once'config/Session.php';
	include_once'config/Database.php';
	include_once'config/Utilities.php';
?>
<!DOCTYPE html>
<html>
<head lang="en">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <meta name="googlebot" content="index,follow,snippet,archive">

      <!-- link the connector stylsheet -->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/font-awesome.css">
      <link rel="stylesheet" href="assets/css/sweetalert.css">
      <link rel="stylesheet" href="assets/css/custom.css">
			<link rel="stylesheet" href="assets/css/red.css">

      <title><?php if(isset($page_title)) echo $page_title; ?> | User authenication system</title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Мой сайт</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav"><i class="hide"><?php echo guard(); ?></i>
					<li>
						<a href="index.php">
							Домашняя страница
						</a>
					</li>
					<?php
			            if(isset($_SESSION['username']) || isCookieValid($db)):
			        ?>
			    		<li>
			    			<a href="profile.php">
			    				Мой профиль
			    			</a>
			    		</li>
			    		<li>
			    			<a href="logout.php">
			    				Выйти
			    			</a>
			    		</li>
			    	<?php else: ?>
			    		<li>
			    			<a href="about.php">
			    				About
			    			</a>
			    		</li>
			    		<li>
			    			<a href="contact.php">
			    				Contact
			    			</a>
			    		</li>
			    		<li>
			    			<a href="login.php">
			    				Войти
			    			</a>
			    		</li>
			    		<li>
			    			<a href="register.php">
			    				Регистрация
			    			</a>
			    		</li>
			    	<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
