<!DOCTYPE html>
<? date_default_timezone_set("UTC"); ?>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width"/>
  <title>Malibu</title>
  <link href="https://fonts.googleapis.com/css?family=Monofett" rel="stylesheet" type="text/css"/>
  <link href="css/malibu.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<div id="content">
  <div>
    <div id="malibutop">
      <img src="img/malibuletterlogo.png" alt=“Malibu”/>
    </div>
  </div>
  <div class="stukje">
    <div class="kopje">
      Live
    </div>
    <div class="paragraaf">
      <?php require 'shows.php' ?>
      <?php foreach (getShows() as $showLine) { ?>
    <div class="showline">
      <span class="date"><?= $showLine["date"] ?></span>
      <span class="separator">-</span>
      <span class="showname">
      <?php if ($showLine['url'] && $showLine['url'] != '') { ?>
        <a target="_blank" href="<?= $showLine['url'] ?>"><?= $showLine['shortname'] ?></a>
      <?php } else { ?>
        <?= $showLine['shortname'] ?>
      <?php } ?>
      </span>
      <?php if ($showLine['fburl'] && $showLine['fburl'] != '') { ?>
        <span class="fblink"><a target="_blank" href="<?= $showLine['fburl'] ?>"><img src="img/fb.png" alt="facebook event"/></a></span>
      <?php } ?>
      <br/>
    </div>
    <?php } ?>
    </div>
  </div>

  <div class="stukje">
    <div class="kopje">Audio/Video</div>
    <div class="paragraaf">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/09G6-wUu3cM"
              allowfullscreen></iframe>
    </div>
    <div class="paragraaf">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/lEgFZ31gJQA"
              allowfullscreen=""></iframe>
    </div>
  </div>

  <div class="stukje">
    <div class="kopje">Boekingen / Contact</div>
    <div class="paragraaf">
      <a href="mailto:boekingen@malibumalibu.nl">boekingen@malibumalibu.nl</a><br/>
      <a href="http://www.facebook.com/malibumuziek">facebook</a>
    </div>
  </div>

  <div class="stukje">
    <div class="kopje">Malibu</div>
    <div class="paragraaf">
      Twan - zang/rap, toetsen<br/>
      Gerrit - gitaar, zang<br/>
      Berend - drums, zang<br/>
      Martijn - basgitaar, trombone <br/>
    </div>
  </div>
  <div class="stukje">
    <div class="kopje">Perskit</div>
    <div class="paragraaf">
      <a href="download/malibukit.zip">Download</a> onze bio, foto (door <a href="http://www.fotographik.nl" target="_blank">fotographik</a>)
      en rider.
    </div>
    <div class="paragraaf">
      Logo door <a href="http://www.woodyveneman.nl" target="_blank">Woody Veneman</a>.
    </div>
  </div>
  <div class="stukje">
    <div class="fb-page" data-href="https://www.facebook.com/malibumuziek" data-tabs="timeline" data-small-header="true"
         data-width="500" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
      <div class="fb-xfbml-parse-ignore">
        <blockquote cite="https://www.facebook.com/malibumuziek"><a
              href="https://www.facebook.com/malibumuziek">Malibu</a></blockquote>
      </div>
    </div>
  </div>
</div>
</body>
</html>
