<?php
require_once './connect.php';
$f_id = $_GET['id'];
$sql = "DELETE FROM flowers WHERE id = '$f_id'";
header("location:/tempaltes/manage.php");
mysqli_query($link_sql, $sql);
