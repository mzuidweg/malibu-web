<!DOCTYPE html>
<html lang="NL_nl">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Monofett' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<? 
require('config.php'); 
$id = (int) $_GET['id']; 
$link->query("DELETE FROM `malibushows` WHERE `id` = '$id' ") ; 
echo ($link->affected_rows) ? "Show verwijderd.<br /> " : "Niets verwijderd.<br /> ";
$link -> close();
?> 

<a href='index.php'>Terug naar de lijst</a>
</body>
</html>
