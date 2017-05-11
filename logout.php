<?php

function logout(){
    setcookie('auth','',time()-86400);
}
logout();
header('Location: /index.php');