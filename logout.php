<?php
session_start();
session_destroy(); //удалит файл сессии на сервере
setcookie('PHPSESSID','',1); //удалит куки в браузере  
session_destroy();
header('Location: login.php');
exit;
?>