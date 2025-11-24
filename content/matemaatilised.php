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
echo "<h3>Omistamise operaatorid: </h3>";
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
echo "<h3><strong>Kõige väiksem ja suurem</strong></h3>";
echo "<br>";
echo "otsib kõige väiksema massiivist ".min($arv1, $arv2, $arv3, $arv4); //otsib kõige väiksema massiivist
echo "<br>";
echo "otsib kõige suurema massiivist ".max($arv1, $arv2, $arv3, $arv4); //otsib kõige suurema massiivist
echo "<br>";
echo "<h3><strong>Ümardamine</strong></h3>";
$arv6 = 10.456;
echo "ümardab täisarvuks ".round($arv6); // ümardab täisarvuks
echo "<br>";
echo "ümardab 2 komakohta ".round($arv6, 2); //ümardab 2 komakohta
echo "<br>";
echo "ümardab ülespoole ".ceil($arv6); //ümardab ülespoole
echo "<br>";
echo "ümardab allapoole ".floor($arv6); //ümardab alla
echo "<br>";
echo "<h3><strong>Juhuslik arv</strong></h3>";
echo "<br>";
echo rand(); //juhuslik arv
echo "<br>";
echo mt_rand();
echo "<br>";
echo "piiratud juhuslik arv arv1 ja arv 2 vahel: ".rand($arv1, $arv2); //piiratud juhuslik arv
echo "<br>";
echo "<h3><strong>Trigonomeetria</strong></h3>";
echo "cosinus ".cos($arv1); //cosinus
echo "<br>";
echo "nurkade teisendamiseks radiaanideks ".deg2rad($arv1); //nurkade teisendamiseks radiaanideks
echo "<h2>Ristküliku pindala ülesanne</h2>";
$a = 8;
$b = 16;
$pindala = $a * $b;
echo "a = ".$a."<br>";
echo "b = ".$b."<br>";
echo "Ristküliku pindala: ".$pindala."<br>";