<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>авторизация и регитрация</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
</head>
<body>

<form action="signin.php" method="POST">
	<label>Логин</label>
	<input type="text" name="login" placeholder="Введите логин">
	<label>Пароль</label>
	<input type="password" name="password" placeholder="Введите пароль">
	<button>Войти</button>
	<p> У вас нет аккаунта? - <a href="register.php"> Регистрируйся! </a> </p>
	        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
</form>

</body>
</html>