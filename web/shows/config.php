<?
$dbconf = parse_ini_file("../config/db.ini");
$link = mysqli_connect($dbconf['url'], $dbconf['user'], $dbconf['password'], $dbconf['db']);
?>