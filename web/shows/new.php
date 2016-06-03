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
if (isset($_POST['submitted'])) {
  $sql = $link->prepare("INSERT INTO malibushows ( date , displayDate, shortname ,  url , fburl,  description  ) VALUES(?,?,?,?,?,?)");
  $sql->bind_param("ssssss", $_POST['date'], $_POST['displayDate'], $_POST['shortname'], $_POST['url'], $_POST['fburl'], $_POST['description']);
  $sql->execute() or die($sql->error);
  $sql->close();
  $link->close();
  echo "Show toegevoegd.<br />";
  echo "<a href='index.php'>Terug naar de lijst.</a>";
}
?>

<form action='' method='POST'>
  <p><span class="kopje">Datum voor sortering (jjjj-mm-dd):</span><br/><input type="date" name="date"/></p>
  <p><span class="kopje">Datum voor weergave (optioneel):</span><br/><input type="text" name="displayDate"/></p>
  <p><span class="kopje">Naam:</span><br/><input type="text" name="shortname"/></p>
  <p><span class="kopje">Link:</span><br/><input type="text" name="url"/></p>
  <p><span class="kopje">Link naar FB event:</span><br/><input type="text" name="fburl"/></p>
  <p><span class="kopje">Langere omschrijving:</span><br/><input type="text" name="description"/></p>
  <p><input type="submit" value="Voeg toe"/><input type="hidden" value="1" name="submitted"/></p>
</form>
<a href='index.php'>Terug naar lijst</a>
</body>
</html>
