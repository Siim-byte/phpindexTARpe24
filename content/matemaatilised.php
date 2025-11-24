<?php
echo "<h2>Matemaatilised tehted/funktsioonid</h2>";
$arv1 = 10;
$arv2 = 15;
$liitmine = $arv1 + $arv2;
$lahut = $arv1 - $arv2;
$korrutis = $arv1 * $arv2;
$jagamine = $arv1 / $arv2;
echo "arv1 on ".$arv1." ja arv2 on ".$arv2."<br>";
echo "<strong>Vastused:</strong> Liitmine: ".$liitmine."<br>";
echo "Lahutamine: ".$lahut."<br>";
echo "Korrutis: ".$korrutis."<br>";
echo "Jagamine: ".$jagamine."<br>";
echo "<h2><Omistamise operaatorid: </h2>";
echo "<br>";
// $arv1++ - suurendamine ühe võrra $arv1=$arv1+1
$arv1++;
echo $arv1."- suurendamine ühe võrra";
echo "<br>";
// $arv-- vähendamine ühe võrra $arv=$arv-1
$arv2--;
echo $arv2."- vähendamine ühe võrra";
echo "<br>";
echo "<strong>Ruutjuur</strong>";