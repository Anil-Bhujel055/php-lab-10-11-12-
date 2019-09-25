<?php

if($_POST['username'] == 'prakash' && $_POST['password'] == 'rabbit'){
    setcookie('uName', $_POST['username'], time() + 86400);
    header("location: main.php");
}else{
    header("location: login.php?error=Worng username or password");
}