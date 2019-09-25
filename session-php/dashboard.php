<?php

    session_start();

        if(!isset($_SESSION['uName'])){
            header("location: login.php");
        }

        echo "Hi: ", $_SESSION['uName'];
?>

<html>
        <form action="./logout.php" method="POST">
            <input type="submit" value="logout"/>
        </form>
</html>