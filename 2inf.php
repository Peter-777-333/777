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
    <il><a href="prof.php" style="color: black" onclick="return confirm('Go to the profile?')"><?php
    if (isset($_SESSION['user'])) {
        echo("<p>Welcome, " . $_SESSION['user']['name'] . "</p>");
    } else {
        ?></a></il>
    <il><a href="login.php" class="btn btn-lg btn-outline-light" style="margin-top:-3px">Input</a></il>
    <il><a href="index.php" class="btn btn-lg btn-outline-light" style="margin-top:-3px">Registration</a></il>
    <?php
        }
    ?>
</ul></a>
<div class="info" style="padding-left: 40px; padding-right: 700px; color: #1828FF">
    <div style="background: grey;">
    <h1>This site was created at a course on "Web-programming" in UlSTU. On it I have booth to publish different cool things.</h1></div>
    <img src="https://pbs.twimg.com/media/DBt71NuXkAAGfD6.png" style="height: 300px;" alt="UlSTU">
</div>
</body>
</html>