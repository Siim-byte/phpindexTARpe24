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


echo "<h2>Arvmõistatus. Arva ära kaks arvu vahemikus 0 - 10</h2>";
$salaarv1= 6;
$salaarv2= 2;
//kirjuta matemaatilise tehtega või funksioonide abil 5 vihjet
echo "<ol><li>Kui esimene arv korrutada 5, siis tuleb ";
echo ($salaarv1*5)."</li>";
echo "<li> liita kokku esimene arv neljaga ja jagada see 2, siis tuleb ";
echo (($salaarv1+4)/2)."</li>";
echo "<li> Jagada esimene number teise numbrida, siis tuleb ";
echo ($salaarv1/$salaarv2)."</li>";
echo "<li> Teine arv ruudus on ";
echo ($salaarv2*$salaarv2)."</li>";
echo "<li> Esimene arv ruut on ";
echo ($salaarv1*$salaarv1)."</li></ol>";
function clearVarsExcept($url, $varname){
    $url=basename($url);
    if(str_starts_with($url, "?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];

}
?>
<form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "leht")?>" method="post">
    <label for="arv1">Arv1</label>
    <input type="number" id="arv2" name="arv2" min="0" max="10" step="1">
    <br>
    <label for="arv2">Arv2</label>
    <input type="number" id="arv2" name="arv2" min="0" max="10" step="1">
    <input type="submit" value="Kontrolli">
</form>
<?php

if (isset($_REQUEST["arv1"])) {
    if ($_REQUEST["arv1"] == "6") {
        echo "Õige";
    } else {
        echo $_REQUEST["arv1"] . " on vale";
    }
}if (isset($_REQUEST["arv2"])) {
    if ($_REQUEST["arv2"] == "2") {
        echo "Õige";
    } else {
        echo $_REQUEST["arv2"] . " on vale";
    }
}
