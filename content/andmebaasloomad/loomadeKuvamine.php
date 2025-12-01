<?php
require_once ('conf.php');
//tabelist kustutamine
global $yhendus;
if(isset($_REQUEST["kustuta"])){
$kask=$yhendus->prepare("delete from loomad where loomId=?");
$kask->bind_param("i", $_REQUEST["kustuta"]);
$kask-> execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Loomad SQL andmebaasist</title>
    <link rel="stylesheet" href="AndmebaasStyle.css">
</head>
<body>
<h1>Loomade tabeli sisu</h1>
<table>
    <tr>
        <td>Loomanimi</td>
        <td>Kaal</td>
        <td>Värv</td>
    </tr>
<?php
global $yhendus;
$kask=$yhendus->prepare("SELECT loomId, loomanimi, kaal, varv FROM loomad");
$kask->bind_result($loomid, $loomanimi, $kaal, $varv);
$kask->execute();
while($kask->fetch()){
    echo "<tr>";
    echo "<td bgcolor='$varv'>".$loomanimi."</td>";
    echo "<td>".$kaal."</td>";
    echo "<td>".$varv."</td>";
    echo "<td><a href='?kustuta=$loomid'>Kustuta</a></td>";
    echo "</tr>";
}
?>
</table>
<a href="loomadeLisamine.php">Lisa loom</a>
</body>
</html>
