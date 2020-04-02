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
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/218537C4-CE47-9149-BD33-C905F24CC791/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/106D475C-5144-0941-9636-E5FA6AAF787E/abn/main.css"/>
<!-- <script type="text/javascript">
  var array = new Array(
    "https://img3.akspic.ru/image/106662-priroda-dikaya_mestnost-ozero_luiza-gora-morennoe_ozero-2880x1800.jpg",
    "https://img11.postila.ru/data/7d/e6/aa/04/7de6aa04ab4bacc797bc9a1b37a884c526e47b29ea5440c8f20f2af649cb9148.jpg",
    "https://s1.1zoom.ru/big3/118/353170-admin.jpg",
    "https://c.wallhere.com/photos/4d/c9/summer_mountains_nature_lake_river_grass-1012487.jpg!d",
    "https://404store.com/2018/09/05/mount-rainier-national-park-mountain-summer-flowers-america.jpg",
    "https://wallpaperscave.ru/images/original/18/03-05/earth-lake-25152.jpg",
    "https://avatars.mds.yandex.net/get-pdb/2030894/38db3bd7-049a-43dd-a94e-175a808ea726/s1200",
    "https://s1.1zoom.ru/big3/381/Italy_Mountains_Lake_508499.jpg"
  );//массив с путями к картинкам
  var i = 0;
  function left() {
    var image = document.getElementById("rotatorbutton");
    i--;
    if (i < 0) i = array.length - 1;
    image.src = array[i];
  }
  function right() {
    var image = document.getElementById("rotatorbutton");
    i++;
    if (i == array.length) i = 0;
    image.src = array[i];
  }
</script> -->
</head>
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
<div style="padding-left: 40px; padding-right: 45%;">
    <h1 style="background-color: blue">This is a Gallery!</h1>
<!--     <div>
    <img src = 'https://img3.akspic.ru/image/106662-priroda-dikaya_mestnost-ozero_luiza-gora-morennoe_ozero-2880x1800.jpg'  class="photo" width = '170' onclick = 'setBigImage(this)' alt = 'Изображение 1'  />
    <img src = 'https://img11.postila.ru/data/7d/e6/aa/04/7de6aa04ab4bacc797bc9a1b37a884c526e47b29ea5440c8f20f2af649cb9148.jpg' class="photo" width = '170' onclick = 'setBigImage(this)' alt = 'Изображение 2' />
    <img src = 'https://s1.1zoom.ru/big3/118/353170-admin.jpg' class="photo" width = '170' onclick = 'setBigImage(this)' alt = 'Изображение 3' />
    <img src = 'https://c.wallhere.com/photos/4d/c9/summer_mountains_nature_lake_river_grass-1012487.jpg!d' class="photo" width = '170' onclick = 'setBigImage(this)' alt = 'Изображение 4' />
    <p style = 'text-align: center; border-radius: 5px;'>
        <input type = 'button' name = 'left' value = '<' onclick = 'left()' />
        <script type = 'text/javascript'>
        document.write("<img id = 'rotatorbutton' src = '" + array[0] + "' alt = 'Ротатор изображений с кнопками' width = '45%'/>");
        </script>
        <input type = 'button' name = 'right' value = '>' onclick = 'right()' />
    </p>
    <img src = 'https://404store.com/2018/09/05/mount-rainier-national-park-mountain-summer-flowers-america.jpg' class="photo" width = '170' onclick = 'setBigImage(this)' alt = 'Изображение 5' />
    <img src = 'https://wallpaperscave.ru/images/original/18/03-05/earth-lake-25152.jpg' class="photo"  width = '170' onclick = 'setBigImage(this)' alt = 'Изображение 6' />
    <img src = 'https://avatars.mds.yandex.net/get-pdb/2030894/38db3bd7-049a-43dd-a94e-175a808ea726/s1200' class="photo"  width = '170' onclick = 'setBigImage(this)' alt = 'Изображение 7' />
    <img src = 'https://s1.1zoom.ru/big3/381/Italy_Mountains_Lake_508499.jpg' class="photo"  width = '170' onclick = 'setBigImage(this)' alt = 'Изображение 8' />
</div> 
<script type="text/javascript">
  function setBigImage(foto) {
    document.getElementById("bigimg").src = foto.src;
  }
</script>
        <form enctype="multipart/form-data" action="saveFile.php" method="POST">
            <input type="file" class="btn btn-dark" name="userfile"><br><br>
            <input type="submit" class="btn btn-success" name="Отправить файл" style="margin-left: 100px;">
        </form><br>
<style>
  .photo {
    border-radius: 5px;
    margin: 10px;
  }
</style> -->
<style type="text/css">
    .line {
                display: flex;
                width: 100%;
                justify-content: space-around;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .arrow{
                position: relative;
                width: 50px;
                top: 150px;
                height: 50px;
                background-color: purple;
            }
            .block {
                width: 180px;
                margin:10px;
                height: 180px;
                border-radius: 8px 8px 8px 8px;
            }
            .center {
                display: flex;
                justify-content: space-around;
                width: 100%;
            }    
            
            .big-block {
                width: 300px;
                height: 300px;
                border-radius: 8px 8px 8px 8px;
            }
            .php{
                background-color:rgb()
            }
            .ico{
                position: absolute;
                left: 590px;
                top: 60px;
            }
            .text-ico{
                position: absolute;
                text-align: center;
                font: 36pt corbel;
                color: white;
                left: 530px;
                top: 190px;
                width: 205px;
            }
            .text-ico2{
                position: absolute;
                text-align: center;
                font: 14pt corbel;
                color: white;
                left: 530px;
                top: 250px;
                width: 205px;
            }
            .top{
                border: 0px ridge black;
                position: absolute;
                display: flex;
                justify-content:space-around;
                width: 944px;
                height: 65px;
                background: rgb(223, 222, 222);
                left:153px;
                top: 316px;
                padding:7px;
            }
            .button{
                background: rgb(235, 235, 235);
                padding: 20px;
                font:14pt Microsoft YaHei Light;
            }
            .main{
                background:rgb(228, 228, 228);
                position: relative;
                left:153px;
                top: 395px;
                width: 958px;
                height: 1550px
            }
            .block1{
                font:14pt Microsoft YaHei Light;
                padding: 5%;
            }
            .block2{
                
                display: flex;
                justify-content:space-around;
            }
            .block2-3{
                font:13pt Microsoft YaHei Light;
                padding: 5%; 
                text-align: center;
            }
            .img{

            }
            .title{
                font:25pt Microsoft YaHei Light;
            }
            .title2{
                text-align: center;
                font:25pt Microsoft YaHei Light;
            }
            .title3{
                text-align: center;
                font:15pt Microsoft YaHei Light;
            }
            .button1{
                background: rgb(235, 235, 235);
                padding: 10px;
                width: 15%;
                font:14pt Microsoft YaHei Light;
            }
            .void{
                height: 100px;
            }
</style>
<div class="block1">
                <div class="wrapper">
                    <div id="gallery" class="gallery">
                        <div class="line">
                            <?php 
                            function GiveMeImgs ($StartId) {
                                $mysqli = new mysqli('localhost:3306','root','root','practice');
                                if($mysqli->connect_errno) {
                                    echo 'Error! ' . $mysqli->connect_error;
                                    exit();
                                }
                                for ($i = $StartId;$i < $StartId+4;$i++) {
                                    $imgQuery = "SELECT `path` FROM `gallery` WHERE `id` = $i";
                                    if (!$path = $mysqli->query($imgQuery)) {
                                        die('Ошибка запроса: '. $mysqli->error);
                                    }
                                    $row_path = $path -> fetch_assoc();
                                    $path = $row_path['path'];
                                    if ($row_path['path'] == null) {
                                        
                                    }
                                    else {
                                    ?> <div class="block" id="<?php echo $i; ?>"><img src="http://localhost/Site<?php echo $path; ?>" class="block" width="240" height="240"></div> <?
                                    }
                                }
                            }
                            GiveMeImgs(1);
                            ?>
                        </div>
                        <div id="presentation" class="center"></div>
                            <div class="line">
                            <?php 
                            GiveMeImgs(5);
                            ?>
                            </div>
                            <div class="line">
                            <?php 
                            GiveMeImgs(9);
                            ?>
                            </div>
                    </div>
                </div>
            </div>
            <form enctype="multipart/form-data" action="giveImage.php" method="POST">
                <p align="center"><input class="btn btn-dark" type="file" name="userfile"></p>
                <p align="center"><input class="btn btn-success" type="submit" value="Добавить фотографию"></p>
            </form>
            <?php 
            
            
            
            ?>
            <div class="void"></div>
        
            <script>
                let gallery = document.getElementById("gallery");

                gallery.onclick = function(event) {
                    let target = event.target;
                    if (target.classList.contains('block')) {
                        printSquare(target.getAttribute('src'));
                    }
                }
                arrow1.onclick = function(event) {
                    let id = target.id + 1;
                    let elem = document.getElementById(id);
                    printSquare(elem.getAttribute('src'));
                }

                function printSquare(src) {
                    let div = document.createElement("img");
                    div.className += "big-block";
                    div.setAttribute('src',src);
                    let place = document.getElementById("presentation");
                    place.innerHTML = "";
                    place.append(div);
                }
        </script>
</div>
</body>
</html>