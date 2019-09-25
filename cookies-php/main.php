<?php

if(!isset($_COOKIE['uName'])){
   header("location: login.php"); 
}
    echo "Hello: ", $_COOKIE['uName']; 