<?php
session_start();
function checkLoginAndPassword($login,$password){
    $users = ['artem'=>'123','alina'=>'456'];
    return isset($users[$login]) && $password == $users[$login];
}

function login($login){
    setcookie('auth',$login,time()+86400);
}

/*
 *
 *
 *
 *
 *
 *
 */

if (empty($_POST['login'])||empty($_POST['password'])){
    $_SESSION['error'] = 'Пустой логин или пароль';
    header('Location: /form.php');
    exit;
}
$login  = $_POST['login'];
$password = $_POST['password'];


if (!checkLoginAndPassword($login,$password)){
    $_SESSION['error'] = "Неверный логин или пароль";
    header('Location: /form.php');
    exit;
}

login($login);
header('Location: /index.php');
exit;




