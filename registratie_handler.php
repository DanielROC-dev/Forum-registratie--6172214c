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
            echo "mail bruh: " . $_POST["mail"];
            echo "<br> name uwu: " . $_POST["name"];
            echo "<br> age owo: " . $_POST["number"];
        ?>
    </h1>
</body>
</html>
