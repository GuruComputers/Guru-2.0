<?php

// Make a MySQL Connection
$host="localhost";
$user="client";
$password="JD44EcdZxAjd4Hqy";
$db = "zadmin_gurubookingsystem";

$link = mysqli_connect($host, $user, $password);
mysqli_select_db($link, $db) or die(mysql_error());

?>