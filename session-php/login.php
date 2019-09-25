<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
        echo ($_GET['error']?? '');
    ?>

    <form action="./session-process.php" method="POST">
        <input type="text" name="user" placeholder="Username"/>
        <input type="password" name="pass" placeholder="password"/>
        <input type="submit" value="login"/>
    </form>
</body>
</html>