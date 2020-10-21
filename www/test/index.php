<?php
    $page_title = 'Homepage';
    include_once'includes/header.php';
?>

<div class="jumbotron">
	<div class="container text-center">
		<h1></h1>
		<?php
            if(!isset($_SESSION['username'])):
        ?>
        <div id="loreg">
            <ul class="list-inline">
                <li>
                    <a class="btn btn-primary btn-lg" href="login.php">Войти</a>
                </li>
                <li>
                    <a class="btn btn-primary btn-lg" href="register.php">Регистрация</a>
                </li>
            </ul>
        </div>
        <?php else: ?>
        <div id="usr">
            <p>
                Добро пожаловать, зарегистрированный пользователь!
            </p>
        </div>
        <?php endif; ?>
        </div>

	</div>
</div>
<div class="container text-center">
</div>
<?php include_once'includes/footer.php'; ?>
