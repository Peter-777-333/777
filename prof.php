<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <title>SITE</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/218537C4-CE47-9149-BD33-C905F24CC791/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/106D475C-5144-0941-9636-E5FA6AAF787E/abn/main.css"/></head>
<body>
<ul class="menu">
    <il><a href="1i.php">Сreator</a></il>
    <il><a href="2inf.php">Information about site</a></il>
    <il><a href="3gall.php">Gallery</a></il>
    <il><a href="4game.php">The game</a></il>
</ul></a>
<div style="padding-left: 40px; padding-right: 700px;">
    <h1><?php
    if (isset($_SESSION['user'])) {
        echo("<p>Your profile settings " . $_SESSION['user']['name'] . "!</p>");
    } ?></h1><br>
    <!-- START -->
    <h2>Add your photo</h2><br>
        <form enctype="multipart/form-data" action="saveFile.php" method="POST">
            <input type="file" class="btn btn-dark" name="userfile"><br><br>
            <input type="submit" class="btn btn-success" name="Отправить файл" style="margin-left: 100px;">
        </form><br>
    <!-- STOP -->
    <a href="logout.php" style="color: black" onclick="return confirm('Log out of your account?')">
        <?php
        if (isset($_SESSION['user'])) {
            echo("<button type='button' class='btn btn-danger'>" . $_SESSION['user']['name'] . ", log out of your profile!</button>");
        }
        ?>
    </a><br>
</div>
</body>
</html>