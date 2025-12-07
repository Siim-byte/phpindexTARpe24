<?php
require ('conf.php');
// Kustutamine
global $yhendus;
if(isset($_REQUEST['Kustuta'])){
    $kask=$yhendus->prepare("DELETE FROM auto where autoId=?");
    $kask->bind_param("i",$_REQUEST['Kustuta']);
    $kask->execute();
}

?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Autode Valik SQL Andmebaasist</title>
    <link rel="stylesheet" href="autoStyle.css">
</head>
<body>
<h1>Autode Valik SQL Andmebaasist</h1>
<div id="menyy">
    <ul>
        <?php
        global $yhendus;
        $kask=$yhendus->prepare("SELECT autoId, autonumber from auto");
        $kask->bind_result($autoId,$autonumber);
        $kask->execute();
        while($kask->fetch()){
            echo "<li><a href='?autoId=$autoId'>".$autonumber."</a></li>";
        }

        ?>
    </ul>
</div>
<div id="sisu">
    <?php
    global $yhendus;
    if(isset($_REQUEST['autoId'])){
        $kask=$yhendus->prepare("SELECT autoId, autonumber,mark,varv,pilt from auto where autoId=?");
        $kask->bind_result($autoId,$autonumber,$mark,$varv,$pilt);
        $autoId=$_REQUEST['autoId'];
        $kask->bind_param("i",$autoId);
        $kask->execute();
        if ($kask->fetch()){
            echo "<h3>".$autonumber."</h3>";
            echo "<div>".$mark.", ".$varv."</div>";
            echo "<img src='$pilt'>";
            echo "<br><br>";
            echo "<a href='?kustuta=$autoId'>Kustuta</a>";
        }

    }

    ?>
</div>
<div id="footer">
    %s
</div>
</body>
</html>