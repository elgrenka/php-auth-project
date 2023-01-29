<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/style_register.css">
</head>
<body>
<form action="includes/signup.php" method="POST" enctype="multipart/form-data">
    <label for="name">ФИО</label>
    <input type="text" name="name" id="name" placeholder="Введите своё ФИО">
    <label for="login">Логин</label>
    <input type="text" name="login" id="login" placeholder="Введите свой логин">
    <label for="email">Почта</label>
    <input type="email" name="email" id="email" placeholder="Введите эл. почту">
    <label for="avatar">Изображение профиля</label>
    <input type="file" name="avatar" id="avatar">
    <label for="pass">Пароль</label>
    <input type="password" name="password" id="pass" placeholder="Введите пароль">
    <label for="pass_confirm">Подтверждение пароля</label>
    <input type="password" name="password_confirm" id="pass_confirm" placeholder="Подтвердите пароль">
    <button type="submit" class="register-btn">Зарегистрироваться</button>
    <p>
        Уже есть аккаунт? - <a href="/">Авторизация</a>
    </p>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<p class='msg'>$_SESSION[message]</p>";
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>


