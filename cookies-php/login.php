<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
        echo ($_GET['error']?? '');
    ?>

    <form action="./process-login.php" method="POST">
        <input type="text" name="username" placeholder="username"/>
        <input type="password" name="password" placeholder="pasword"/>
        <input type="submit" value="login"/>
    </form>
</body>
</html>