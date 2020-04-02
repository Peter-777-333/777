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
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>SITE</title>
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/218537C4-CE47-9149-BD33-C905F24CC791/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/106D475C-5144-0941-9636-E5FA6AAF787E/abn/main.css"/></head>
<body>
<ul class="menu">
    <il><a href="1i.php">Сreator</a></il>
    <il><a href="2inf.php">Information about site</a></il>
    <il><a href="3gall.php">Gallery</a></il>
    <il><a href="4game.php">The game</a></il>
    <!-- <il><a href="blog.php">Blog</a></il> -->
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
<div class="info">
    <h1 style="text-indent: 20px;">Hello, my name is Peter<h1>
    <h2>I'm from Ulyanovsk<br>I'm 14 years old</h2>
    <h3>You can find my contacts and photo <b style="color: #8B00FF"> below</b></h3>
    <img src="im.jpg" style="height: 350px; border: 5px solid #ffd700;" alt="Сreator"> 
</div>
    <div style="position:absolute; bottom:0px;">   
        <ul class="menu1">
            <il style="font-size: 20px;">My contacts:</il>
            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://t.me/binadm"><i class="fa fa-telegram"></i></a></li>
            <li><a href="https://www.instagram.com/and_pg_i/?r=nametag"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://vk.com/pgultaev"><i class="fa fa-vk"></i></a></li>
        </ul>
    </div> 
    <style>
        ul.menu1 li {
          display: inline-block;
          margin: 8px;
        }
        ul.menu1 li a i.fa {
          display: inline-block;
          height: 40px;
          width: 40px;
          text-align: center;
          line-height: 30px;
          padding: 6px;
          border-radius: 40px;
          color: #424242;
          position: relative;
          transition: all ease 0.2s;
        }
        ul.menu1 li a i.fa::after {
          content: "";
          position: absolute;
          top: 0;
          bottom: 0;
          left: 0;
          right: 0;
          margin: auto;
          height: 100%;
          width: 100%;
          z-index: -1;
          border-radius: 40px;
          background-color: #9E9E9E;
        }
        ul.menu1 li a i.fa:hover {
          color: #fff;
          font-size: 18px;
        }
        ul.menu1 li a i.fa:hover::after {
          animation: animate ease 0.6s forwards;
        }
        ul.menu1 li a i.fa-facebook:hover::after {
          background-color: #3b5998;
        }
        ul.menu1 li a i.fa-telegram:hover::after {
          background-color: #0088cc; 
        }
        ul.menu1 li a i.fa-instagram:hover::after {
          background-color: #833AB4; 
        }
        ul.menu1 li a i.fa-vk:hover::after {
          background-color: #4d7198; 
        }

        @keyframes animate {
          0%,20% {
            transform: scale(1);
            border-radius: 40px;
            background-color: #9E9E9E;
          }
          30% {
            transform: scale(1.2);
          }
          40% {
            transform: scale(1.1);
          }
          50% {
            transform: scale(1);
            border-radius: 10px;
          }
          60%,100% {
            transform: scale(1);
            border-radius: 5px;
          }
        }
        .seehere {
          font-size: 50px;
          position: absolute;
          bottom: 20px;
          right: 20px;
          color: #ff0000;
        }
        .info {
          padding-left: 40px;
        }
    </style>
</body>
</html>