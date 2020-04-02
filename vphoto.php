<?php
$link = mysqli_connect('localhost:3306', 'root', 'root', 'practice');

if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
}

$sql = mysqli_query($link, 'SELECT `path` FROM `img`');
  while ($result = mysqli_fetch_array($sql)) {
    echo "{$result['path']}";
  }
?>
