<?php 
// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = "123"; // Пароль БД
$db_base = "bd_reg"; // Имя БД
$db_table = "users"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = mysqli_connect($db_host,$db_user,$db_password,$db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}


