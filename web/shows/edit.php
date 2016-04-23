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
if (isset($_GET['id'])) {
  $id = (int)$_GET['id'];
  if (isset($_POST['submitted'])) {
    foreach ($_POST AS $key => $value) {
      $_POST[$key] = $link->escape_string($value);
    }
    $sql = "UPDATE `malibushows` SET  `date` =  '{$_POST['date']}' ,  `shortname` =  '{$_POST['shortname']}' ,  `url` =  '{$_POST['url']}' ,`fburl` =  '{$_POST['fburl']}' ,  `description` =  '{$_POST['description']}'   WHERE `id` = '$id' ";
    $link->query($sql) or die($link->error);
    echo ($link->affected_rows) ? "De wijziging is opgeslagen.<br />" : "Er is niets veranderd. <br />";
    $link -> close();
  } else {
    $row = $link->query("SELECT * FROM `malibushows` WHERE `id` = '$id' ")->fetch_array();
    ?>

    <form action='' method='POST'>
      <p><span class="kopje">Datum (jjjj-mm-dd):</span><br/><input id="date" type="date" name="date"
                                                                   value="<?= stripslashes($row['date']) ?>"/></p>
      <p><span class="kopje">Naam:</span><br/><input type='text' name='shortname'
                                                     value='<?= stripslashes($row['shortname']) ?>'/></p>
      <p><span class="kopje">Link:</span><br/><input type='text' name='url' value='<?= stripslashes($row['url']) ?>'/>
      </p>
      <p><span class="kopje">Link naar FB event:</span><br/><input type='text' name='fburl'
                                                                   value='<?= stripslashes($row['fburl']) ?>'/></p>
      <p><span class="kopje">Langere omschrijving:</span><br/><input type='text' name='description'
                                                                     value='<?= stripslashes($row['description']) ?>'/>
      </p>
      <p><input type='submit' value='Wijzig'/>
        <input type='hidden' value='1' name='submitted'/>
      </p>
    </form>
  <? }
  $link -> close();
} ?>
<a href='index.php'>Terug naar lijst</a>

</body>
</html>