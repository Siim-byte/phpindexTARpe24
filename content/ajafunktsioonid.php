<?php
echo "<h1>Ajafunktsioonid</h1>";

echo "Tänane kuupaev ".date("d.m.Y");
//timezone - juhul kui timezone ei ole määratud, siis php kasutab aega mis on localhost-is
date_default_timezone_set("Europe/Tallinn");
echo "<br>";
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezones</a>";
echo "<br>";
echo "time() - aeg sekundites - ".time();
echo "<br>";
echo "date() - ".date("d.m.Y G:i:s", time());
echo "<pre>
date('d.m.Y G:i:s', time())
d - paevad 01...31
m - kuud 1...12
Y - neljakohane arv
G - 24h formaat
i - minutid 0...59
s - sekundid 0...59
</pre>";
echo "<br>";
echo "+1min = time()+60 = ".date('d.m.Y G:i:s', time()+60);
echo "<br>";
echo "+1tund = time()+60*60 = ".date('d.m.Y G:i:s', time()+60*60);
echo "<br>";
echo "+1päev = time()+60*60*24 = ".date('d.m.Y G:i:s', time()+60*60*24);
echo "<div class='flex-box'>";
echo "<h2>Kuupäeva genereerimine</h2>";

$synnipaev = mktime(13,20,2,4,13,2008);
echo "Minu sünnipäev: ".date("d.m.Y G:i:s", $synnipaev)."<br><br>";

echo "Tänane kuu nimega:<br>";
$kuud = array(10=>'jaanuar','veebruar','märts','april','mai','juuni','juuli','august','september','oktoober','november','detsember');
$paev = date('d');
$aasta = date('Y');
$kuu = $kuud[(int)date('m')];

echo "$paev. $kuu $aasta a<br><br>";

echo "Minu sünnipäev kuu nimega:<br>";
$paev = 13;
$aasta = 2008;
$kuu = $kuud[13];

echo "$paev. $kuu $aasta a";

echo "</div>";

echo "</div>";
