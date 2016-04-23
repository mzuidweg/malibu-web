<?php
function getShows()
{
  setlocale(LC_ALL, 'nl_NL');
  mysqli_report(MYSQLI_REPORT_STRICT);

  if (!file_exists("config/db.ini")) {
    return dummyShows();
  }

  $dbconf = parse_ini_file("config/db.ini");
  $link = mysqli_connect($dbconf['url'], $dbconf['user'], $dbconf['password'], $dbconf['db']);

  $shows = array();

  $result = $link->query("SELECT * FROM `malibushows` WHERE date >= DATE_SUB(NOW(), INTERVAL 10 DAY) ORDER BY date ASC");
  while ($row = mysqli_fetch_array($result)) {
    $show = array(
        "date" => strftime("%a %e %B", strtotime($row['date'])),
        "url" => $row['url'],
        "shortname" => $row['shortname'],
        "fburl" => $row['fburl']
    );

    $shows[] = $show;
  }

  $link->close();

  return $shows;
}

function dummyShows()
{
  date_default_timezone_set("UTC");
  return array(
      array(
          "date" => strftime("%a %e %B", strtotime("1900-01-01 00:00:00")),
          "url" => "http://www.malibumalibu.nl",
          "shortname" => "dit is een testshow",
          "fburl" => ''
      ),
      array(
          "date" => strftime("%a %e %B", strtotime("1900-01-01 00:00:00")),
          "url" => '',
          "shortname" => "een testshow zonder link",
          "fburl" => "http://facebook.com/malibumuziek"
      ),
      array(
          "date" => strftime("%a %e %B", strtotime("1900-01-01 00:00:00")),
          "url" => "http://www.malibumalibu.nl",
          "shortname" => "dit is nog een testshow",
          "fburl" => "http://facebook.com/malibumuziek"
      )
  );
}

?>