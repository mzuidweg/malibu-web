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
?>
<table>
  <tr>
    <th>Datum</th>
    <th>Naam</th>
  </tr>
  <?
  $result = $link->query("SELECT * FROM `malibushows`") or trigger_error($link->error);
  while ($row = $result->fetch_array()) {
    foreach ($row AS $key => $value) {
      $row[$key] = stripslashes($value);
    }
    ?>
    <tr>
      <td><?= nl2br($row['date']) ?></td>
      <td><?= nl2br($row['shortname']) ?></td>
      <td class="link">
        <a href="edit.php?id=<?= $row['id'] ?>">Wijzig</a>
      </td>
      <td class="link">
        <a href="delete.php?id=<?= $row['id'] ?>">Verwijder</a>
      </td>
    </tr>
  <? 
  } 
  $link -> close();
  ?>
</table>
<a href="new.php">Toevoegen</a>
</body>
</html>