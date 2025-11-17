<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Siim PHP-tööde leht</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/joonis.css">
    <link rel="stylesheet" href="style/muusikaStyle.css">
    <script src="js/joonisScript.js"></script>
    <script src="js/muusikaScript.js"></script>

</head>
<body>
<?php
//päis
include("header.php");
?>
<?php
//navigeerimismenüü
include("nav.php");
?>
<div class="flex-container">
    <div><strong>PHP</strong> - Skriptikeel – skript teeb oma tööd pärast seda, kui toimus mingi sündmus.
        Orienteeritud programmeerija eesmärkide saavutamiseks (mugavus on tähtsam kui vastavus standarditele).
        Serveripoolne keel.
        Platvormist sõltumatu.
        Saab kasutada nii HTML-i sees (HTML embedded), kui ka eraldiseisvana skriptina.
    </div>

    <div>
        <?php
        //sisu - laetakse content kaustast
        if(isset($_GET["leht"])){
            include('content/'.$_GET["leht"]);
        } else{
            include('content/kodu.php');
        }
        ?>
    </div>

    <div>
        <img src="image/phpPilt.png" alt="PHP pilt">
    </div>
</div>


<?php
//jalus
include("footer.php");
?>

</body>
</html>