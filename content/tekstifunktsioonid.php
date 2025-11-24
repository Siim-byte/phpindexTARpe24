<?php
function clearVarsExcept($url, $varname){
    $url=basename($url);
    if(str_starts_with($url, "?")){
        return "?$varname=".$_REQUEST[$varname];
    }
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}
echo "<h2>Tekstifunktsioonid</h2>";
$tekst = 'Veebirakendus on arvutitarkvara programm';
echo $tekst; //näitab muutuja sisu
echo "<br>";
echo "Mitu sõna on lauses -str_word_count()= ".str_word_count($tekst). "tk";
//metshein.com -->PHP alused
echo "<br>";
echo "Kõik tähed muudab väiksemaks -strtolower()= ".strtolower($tekst);
echo '<br>';
echo "Kõik tähed muudab suuremaks -strtoupper()= ".strtoupper($tekst);
echo '<br>';
echo "Muudab ainult esitähe suureks teised jätab väikseks -ucfirst(strtolower())= ".ucfirst(strtolower($tekst));
echo '<br>';
echo "loeb kokku märkide arvu tekstis, ka tühikud ja kirjavahemärgid -strlen()= ".strlen($tekst);			//34
echo '<br>';
echo "loeb kokku sõnade arvu". str_word_count($tekst);	//6
echo '<br>';
echo "Eemaldab tühikud tekstist -trim()= <pre>".trim($tekst)."</pre>";
echo "Eemaldab tühikud teksti eest -ltrim()= <pre>".ltrim($tekst)."</pre>";
echo "Eemaldab tühikud teksti tagant -rtrim()=<pre>".rtrim($tekst)."</pre>";
echo '<br>';
echo "<h3>Tekst kui massiiv</h3>";
echo "võtab tekstist esimese tähe -tekst[]= ".$tekst[0]; 				//A
echo '<br>';
echo "võtab tekstist viienda tähe -tekst[]= ".$tekst[4];
echo '<br>';
echo "Alates neljandast tähest võtab 5 tähte -substr()= ".substr($tekst, 3, 5);
echo '<br>';
echo "Alates viiendast tähest võtab kuni 13  täheni -substr()= ".substr($tekst, 4, -13);
echo '<br>';
echo "Võtab paremalt poolt alates üheksandast tähest  7 tähte -substr()= ".substr($tekst, -8, 7);
echo '<br>';
print_r(str_word_count($tekst, 1)); //Array ( [0] => Veebirakendus [1] => on [2] => arvutitarkvara [3] => programm )
echo '<br>';
$sona = str_word_count($tekst, 1);
echo "Võtab kolmanda sõna teksti massiivist -sona[]= ".$sona[2];
echo "<h3>Teksti asendamine</h3>";
$asendus = 'Tarkvara';
$otsitav_algus = 17;
$otsitav_pikkus = 14;
echo '<br>';
echo "Asendab sõna tarkvara algusega 17 ja pikkusega 14 -substr_replace()= ".substr_replace($tekst, $asendus, $otsitav_algus, $otsitav_pikkus);
echo '<br>';
$otsi = array('on', 'programm');
$asenda = array('---', 'software');
echo "otsib ja asendab 2 sõna= ".str_replace($otsi, $asenda, $tekst);
echo '<br>';
echo "<h3>Mõistatus - arva ära Eesti linnanimi</h3>";
$linn="Rakvere";
echo "Linnal on  ".strlen($linn)."   tähte:"."*******";
echo '<br>';
echo "Teine täht on  ".ucfirst(substr($linn, 0, 1));
echo '<br>';
echo "Linna kaks teist tähte on ".(substr($linn, 1, 2));
echo '<br>';
echo "Linna viimased 2 tähte on  ".(substr($linn, -2, 2));
echo '<br>';
echo "Linnas on 2 e tähte".":"."****e*e"

?>
<form action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "leht")?>" method="post">
    <label for="linn">Sisesta linnamimi</label>
    <input type="text" id="linn" name="linn">
    <input type="submit" value="Kontrolli">
</form>
<?php
if(isset($_REQUEST["linn"])){
    if($_REQUEST["linn"]=="Rakvere"){
        echo "Õige";
    }
    else{
        echo $_REQUEST["linn"]." on vale";
    }
}