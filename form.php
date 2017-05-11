<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php if (!empty($_SESSION['error']))
{
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<form action="/login.php" method="post">
    <label for="login">Логин</label>
    <input type="text" name="login" id="login"><br>
    <label for="password">Пароль</label>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Войти">
</form>
</body>
</html>