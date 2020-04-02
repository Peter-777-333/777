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
    <il><a href="4game.php">The games</a></il>
    <il><a href="logout.php" style="color: black">
    <?php
    if (isset($_POST['login']) && isset($_POST['password'])) {
        include('config.php');
        $login = $_POST['login'];
        $password = $_POST['password'];
        $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
        $authQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
        if (!$result = $mysqli->query($authQuery)) {
            die('Ошибка запроса: '. $mysqli->error);
        }
        if (!$result->num_rows) {
            echo('<font color="red">Неверный логин или пароль!</font>');
        } else {
            $user = $result->fetch_assoc();
            if ($user['password'] !== hash('sha1', $password)) {
                echo('<font color="red">Неверный логин или пароль!</font>');
            } else {
                $_SESSION['user'] = $user;
            }
        }
    }
    if (isset($_SESSION['user'])) {
        echo("<p>Welcome, " . $_SESSION['user']['name'] . "</p>");
    } else {
    ?></a></il>
    <il><a href="login.php" class="btn btn-lg btn-outline-light" style="margin-top:-3px">Input</a></il>
    <il><a href="index.php" class="btn btn-lg btn-outline-light" style="margin-top:-3px">Registration</a></il>
</ul>
<div class="container">
            <form action="" class="form-signin" method="POST">
                <h2>Input</h2>
                <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?></div><?php }?>
                <input type="text" name="login" class="form-control" placeholder="Login" required>
                <input type="password" name="password" class="form-control" placeholder="Password" required style="margin-top:14px">
                <button class="btn btn-lg btn-block btn-success" type="submit" style="margin-top:14px">Input!</button>
            </form>
</div>
<?php
}
?>
</a>
<?php
if (isset($_SESSION['user'])) {
    header('Location: 1i.php');
    exit;
}
?>
</body>
</html>