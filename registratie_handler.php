<?php
    session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet">
<title>Bruhe</title>
</head>
<body>
    <h1>
        <?php
            echo "mail bruh: " . $_SESSION["mail"];
            echo "<br> name uwu: " . $_SESSION["username"];
            echo "<br> age owo: " . $_SESSION["age"];
        ?>
    </h1>
</body>
</html>
