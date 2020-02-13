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

<form action="signup.php" method="POST" enctype="multipart/form-data">
	<label>ФИО</label>
	<input type="text" name="full_name" placeholder="Введите свое полное имя">
	<label>Логин</label>
	<input type="text" name="login" placeholder="Введите логин">
	<label>Почта</label>
	<input type="email" name="email" placeholder="Введите почту">
	<label>Изображение профиля</label>
	<input type="file" name="avatar">
	<label>Пароль</label>
	<input type="password" name="password" placeholder="Введите пароль">
	<label>Повторите пароль</label>
	<input type="password" name="password_confirt" placeholder="Потвердите пароль">
	<button>Регистрация</button>
	<p> У вас уже есть аккаунта? - <a href="/"> Авторизируйся! </a> </p>
        <?php
            if ($_SESSION["message"]) {
                echo '<p class="msg"> ' . $_SESSION["message"] . ' </p>';
            }
            unset($_SESSION["message"]);
        ?>
</form>

</body>
</html>