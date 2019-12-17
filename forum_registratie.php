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

        <h1 class="rainbow">FIVE NIGHT AT FREDDY FANFICTION FORUM</h1>

        <h2 class= "rainbow">
        <img src="fnaf.jpg" width="460" height="345"> <br>
         Enter Personal Info<br>
        
        </h2> 

        </h3>
        <form action="registratie_handler.php" method="post" class="number">
            <div class="mail">
                <label> Enter email: </label> <br>
                <input type="mail" name="mail" id="mail" required> <br>
            </div>

            <div class="name">
                <label> Enter username: </label> <br>
                <input type="name" name="name" id="name" required> <br>
            </div>

            <div class="age">
                <label> Enter age: </label> <br>
                <input type="num" name="number" id="num" required> <br>
            </div>
            <div class="button">
                <input type="submit" name="button" value="submit" id="sub">
            </div>
        </form>
    </body>
</html>