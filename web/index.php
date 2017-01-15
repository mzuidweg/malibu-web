<!DOCTYPE html>
<? date_default_timezone_set("UTC"); ?>
<html lang="nl">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width"/>
  <title>Malibu</title>
  <link href="https://fonts.googleapis.com/css?family=Monofett" rel="stylesheet" type="text/css"/>
  <link href="css/malibu.css?version=3" rel="stylesheet" type="text/css"/>
</head>
<body>
<script>
  function expand(extra, knop) {
    document.getElementById(extra).className = "";
    document.getElementById(knop).className = "verborgen";
  }
</script>
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

     <?php /*****TEMP GHETTOBLASTERTOUR MARKER START ******/ ?>

        <?php if (strpos($showLine["date"], " 3 februari") !== false) {?>
            <div style="padding-top: 10px;font-style: italic; color: darkgray">--//-- GHETTOBLASTERTOUR --//--</div>
        <?php } ?>
     <?php /*****TEMP GHETTOBLASTERTOUR MARKER END ******/ ?>

    <div class="showline <?= $showLine['passed'] == 'T' ? 'passedShow' : '' ?>">
      <?php if ($showLine['displayDate'] && $showLine['displayDate'] != '') { ?>
        <span class="date"><?= $showLine["displayDate"] ?></span>
      <?php } else { ?>
        <span class="date"><?= $showLine["date"] ?></span>
      <?php } ?>
      <span class="separator">-</span>
      <span class="showname">
      <?php if ($showLine['passed'] != 'T' && $showLine['url'] && $showLine['url'] != '') { ?>
        <a target="_blank" href="<?= $showLine['url'] ?>"><?= $showLine['shortname'] ?></a>
      <?php } else { ?>
        <?= $showLine['shortname'] ?>
      <?php } ?>
      </span>
      <?php if ($showLine['passed'] != 'T' && $showLine['fburl'] && $showLine['fburl'] != '') { ?>
        <span class="fblink"><a target="_blank" href="<?= $showLine['fburl'] ?>"><img src="img/fb.png" alt="facebook event"/></a></span>
      <?php } ?>
      <br/>
    </div>
    <?php } ?>
      <?php /*****TEMP GHETTOBLASTERTOUR MARKER START ******/ ?>
                  <div style="padding-bottom: 10px;font-style: italic; color: darkgray">--//-- GHETTOBLASTERTOUR --//--</div>
      <?php /*****TEMP GHETTOBLASTERTOUR MARKER END ******/ ?>
    </div>
  </div>

  <div class="stukje">
      <div class="kopje">Media</div>
      <div class="paragraaf">
        <i>"<span id="recensieoorfull" class="verborgen">Malibu is weer zo'n ongeslepen parel uit Tilburg en Utrecht.
          De muziek kun je vergelijken met die van Jonathan Richman en Stuurbaard Bakkebaard,
          maar ook Mozes &amp; The Firstborn, want opener en single Venice Beach (spoor die knullige clip op!)
          zou op Lowlands net zo'n meezinger verdienen te worden als Mozes' I Got Skills.
          Malibu doet het dus in het Nederlands. Zanger/rapper Twan van Bragt schudt de ene na de andere leuke tekst
          uit zijn mouw, maar
          </span><span id="knopjerecensieoor"><a href="#" onclick="expand('recensieoorfull', 'knopjerecensieoor');">(...)</a> </span>
          ook als je uitgeglimlacht bent, rest er een geweldig charmant rammelend bandje om
          op te dansen. (...) Heerlijk plaatje!"
        </i> - <a href="img/OOR.jpg">Recensie OOR</a><br/>
        <i>"Geestig, tegendraads en - vooral - zonnig."</i> - <a target="_blank" href="http://www.kindamuzik.net/recensie/malibu/malibu/26714/">Recensie Kindamuzik</a><br/>
        <i>"Vol ogenschijnlijke  desinteresse, maar op het podium juist met bakken vol energie"</i> - <a target="_blank" href="http://3voor12.vpro.nl/lokaal/tilburg/nieuws/2016/juni/Album-presentatie-Malibu.html">Live-verslag VPRO 3voor12</a><br/>
      </div>
    </div>

  <div class="stukje">
    <div class="kopje">Audio/Video</div>
    <div class="paragraaf">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/1deseJscSzY"
              allowfullscreen></iframe>
    </div>
    <div class="paragraaf">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/09G6-wUu3cM"
              allowfullscreen></iframe>
    </div>
    <div class="paragraaf">
      <iframe style="border: 0; width: 560px; height: 257px;" src="http://bandcamp.com/EmbeddedPlayer/album=2289377884/size=large/bgcol=ffffff/linkcol=0687f5/artwork=small/transparent=true/" seamless><a href="http://bastaardplaten.bandcamp.com/album/malibu">Malibu by Bastaard Platen</a></iframe>
    </div>
  </div>

  <div class="stukje">
    <div class="kopje">Contact</div>
    <div class="paragraaf">
      Boekingen: <a href="mailto:info@monkeyman.nl">info@monkeyman.nl</a><br/>
      Contact: <a href="mailto:info@malibumalibu.nl">info@malibumalibu.nl</a><br/>
      <a href="http://www.facebook.com/malibumuziek">facebook</a> //
      <a href="http://www.instagram.com/malibumalibumalibumalibu">instagram</a>
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
