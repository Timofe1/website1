<?php

$host = '84.201.184.150';
$user = '090303-pia-21_t';
$pass = 'BEcFckRg4L';
$db_name = '090303-pia-21_TIMA_KOVTUNEC';


$link_sql = mysqli_connect($host, $user, $pass, $db_name);


if (!$link_sql) {
echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
exit;
}
?>
