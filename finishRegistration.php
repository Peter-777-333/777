<?php
    session_start()
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
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FFC64CD7-8B3C-104E-B131-3E6B349F19E0/main.js" charset="UTF-8"></script><script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/218537C4-CE47-9149-BD33-C905F24CC791/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/106D475C-5144-0941-9636-E5FA6AAF787E/abn/main.css"/></head>
<body>
    <h1 style="background-image: url(https://static.tildacdn.com/tild6362-6530-4364-b233-363337343236/emile-perron-190221-.jpg); background-repeat: no-repeat; background-position: center center; background-attachment: fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; color: red;">
<?php
    include('config.php');
    $registrationSuccess = true;
    $registrationUserErrors = [];
    $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
    
    if ($mysqli->connect_errno) {
        $registrationSuccess = false;
        die("Ошибка подключения к базе данных: " . $mysqli->connect_errno . " " . $mysqli->connect_error);
    } else {
        $name = $_POST['name'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $verificationPassword = $_POST['verificationPassword'];
        
        if ($password !== $verificationPassword) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'The entered passwords do not match!';
        }
        if (2 > strlen($name) || strlen($name) > 32) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'The length of the name must be between 2 and 32 characters!';
        }
        if (6 > strlen($login) || strlen($login) > 32) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Length of the login must be from 6 to 32 characters!';
        }
        if (6 > strlen($password) || strlen($password) > 20) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'The length of the password must be from 6 to 20 characters';
        }
        $loginQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
        if (!$loginSelect = $mysqli->query($loginQuery)) {
            $registrationSuccess = false;
            die('Request error:'. $mysqli->error);
        } else {
            if ($loginSelect->num_rows) {
                $registrationSuccess = false;
                $registrationUserErrors[] = 'Input login already exists!';
            }
        }
        
        $hashPassword = hash('sha1', $password);
        
        if ($registrationSuccess) {
            $query = "INSERT INTO `users` (`name`, `login`, `password`) VALUES ('$name', '$login', '$hashPassword')";
            if (!$mysqli->query($query)) {
                die('Ошибка запроса: '. $mysqli->error);
            }
        } else {
            foreach ($registrationUserErrors as $error) {
                ?>
                    <div style="size: 100px; color: red;">
                        <?php
                            echo($error . '<br>');
                        ?>
                    </div>
                <?php
            }
            ?>
                <br><a href="index.php" class="btn btn-secondary btn-lg">Return</a>
        <?php
        }

        if ($registrationSuccess) {
            ?>
            <title>CONGRATULATIONS YOU HAVE REGISTERED!!!</title>
                <p>CONGRATULATIONS YOU HAVE REGISTERED!!!</p>
                <a href='login.php' class='btn btn-lg btn-block btn-success'> ON THE HOMEPAGE! </a>
            <?php
        }
    }
    $mysqli->close();
?>
    </h1>
</body>
</html>