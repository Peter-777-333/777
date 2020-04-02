<?php 
if (isset($_FILES) && $_FILES['userfile']['error'] == 0) {
                $mysqli = new mysqli('localhost:3306','root','root','practice');
                define('SITE_DOOT', realpath(dirname('_FILE_')));
                $uploadDir = '/filesGallery/';
                $uploadFile = $uploadDir . basename($_FILES['userfile']['name']);
                if (move_uploaded_file($_FILES['userfile']['tmp_name'], SITE_DOOT . $uploadFile)) {

                }
                else {
                    echo "Файл NE успешно загружен!<br>";
                }
                if($mysql->connect_errno) {
                    echo 'Error!' . $mysql->connect_error;
                    exit();
                }
                $query = "INSERT INTO `gallery` (`path`) VALUES ('$uploadFile')";
                if (!$mysqli->query($query)) {
                    die('Ошибка запроса: '. $mysqli->error);
                }
                if($mysql->connect_errno) {
                    echo 'Error!' . $mysql->connect_error;
                    exit();
                }
                header("Location: http://localhost/Site/3gall.php");
                
            }
?>