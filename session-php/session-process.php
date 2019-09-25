<?php

session_start();
    if($_POST['user'] == 'anil' && $_POST['pass'] == 'jhapper'){
        $_SESSION['uName'] = $_POST['user'];
        header("location: dashboard.php");
    }else{
        header("location: login.php?error=wrong name or pass");
    }