<?php
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";
$arv1 = 100;
$arv2 = 15;
$arv3 = 10;
$arv4 = 5;
$liitmine = $arv1 + $arv2;
$lahut = $arv1 - $arv2;
$korrutis = $arv1 * $arv2;
$jagamine = $arv1 / $arv2;
echo "arv1 on ".$arv1." ja arv2 on ".$arv2."<br>";
echo "<strong>Vastused:</strong> <br> Liitmine: ".$liitmine."<br>";
echo "Lahutamine: ".$lahut."<br>";
echo "Korrutis: ".$korrutis."<br>";
echo "Jagamine: ".$jagamine."<br>";
echo "<h2>Omistamise operaatorid: </h2>";
echo "<br>";
// $arv1++ - suurendamine ühe võrra $arv1=$arv1+1
$arv1++;
echo $arv1."- suurendamine ühe võrra";
echo "<br>";
// $arv-- vähendamine ühe võrra $arv=$arv-1
$arv2--;
echo $arv2."- vähendamine ühe võrra";
echo "<br>";
echo "<strong>Ruutjuur /sqrt()</strong>".sqrt($arv1);
echo "<br>";
echo "<strong>Kõige väiksem ja suurem</strong>";
echo "<br>";
echo min($arv1, $arv2, $arv3, $arv4);
echo max($arv1, $arv2, $arv3, $arv4);
$arvud = array($arv1, $arv2, $arv3, $arv4);
echo max($arvud);
$arvud = array($arv1, $arv2, $arv3, $arv4);
$arvud2 = array($arv2, $arv3, $arv4);
echo max(max($arvud), max($arvud2));
echo "<br>";
echo "<strong>Ümardamine</strong>";
$arv6 = 10.456;
echo round($arv6); // ümardab täisarvuks
echo round($arv6, 2); //ümardab 2 komakohta
echo "<br>";
echo ceil($arv6); //ümardab ülespoole
echo floor($arv6); //ümardab alla
echo "<br>";
echo "<strong>Juhuslik arv</strong>";
echo "<br>";
echo rand(); //juhuslik arv
echo mt_rand();
echo rand($arv1, $arv2); //piiratud juhuslik arv
echo "<br>";
echo "<strong>Trigonomeetria</strong>";
echo cos($arv1); //cosinus
echo deg2rad($arv1); //nurkade teisendamiseks radiaanideks