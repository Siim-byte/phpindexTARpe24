<?php
require('config.php');
global $yhendus;
// Uue teate lisamine

if (isset($_REQUEST["uusleht"])) {
    if (!empty(["nimi"])){
        $kask = $yhendus->prepare("INSERT INTO Tooted (nimi, kirjeldus, hind) VALUES (?,?,?)");
        $kask->bind_param("ssi", $_REQUEST["nimi"], $_REQUEST["kirjeldus"], $_REQUEST["hind"]);
        $kask->execute();
        header("Location: " . $_SERVER["PHP_SELF"]);
        $yhendus->close();
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Tootede leht</title>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="FirmaStyle.css">
</head>
<body>
<div id="lehepakett">
<div id="menyykiht">
    <h2>Tootede leht</h2>
    <ul>
        <?php
        //loendi kuvamine
        $kask = $yhendus->prepare(
            "SELECT id, nimi FROM Tooted"
        );
        $kask->bind_result($id, $nimi);
        $kask->execute();
        while ($kask->fetch()) {
            echo "<li><a href='".$_SERVER["PHP_SELF"].
                "?id=$id'>".htmlspecialchars($nimi)."</a></li>";
        }
        ?>
    </ul>

</div>
<div id="sisukiht">
    <?php
    // Ühe teate kuvamine või muutmine
    if (isset($_REQUEST["id"])) {
        $kask = $yhendus->prepare("SELECT id, nimi, kirjeldus, hind FROM Tooted WHERE id=?");
        $kask->bind_param("i", $_REQUEST["id"]);
        $kask->bind_result($id, $nimi, $kirjeldus, $hind);
        $kask->execute();

        if ($kask->fetch()) {
            if (isset($_REQUEST["muutmine"])) {
                echo "
                   <form action='".$_SERVER["PHP_SELF"]."'>
                     <input type='hidden' name='muutmisid' value='$id'/>
                     <h2>Teate muutmine</h2>
                     <dl>
                       <dt>Toote nimi:</dt>
                       <dd>
                         <input type='text' name='nimi' value='".
                    htmlspecialchars($nimi)."'/>
                       </dd>
                       <dt>Toote kirjeldus:</dt>
                       <dd>
                         <textarea rows='20' cols='30' name='kirjeldus'>".
                    htmlspecialchars($kirjeldus)."</textarea>
                       </dd>
                     </dl>                      
                      <dt>Toote hind:</dt>
                       <dd>
                         <input type='number' name='hind' value='".
                    htmlspecialchars($hind)."'/>
                         </dd>
                       

                   </form>
                ";
            } else {
                echo "<h2>".htmlspecialchars($nimi)."</h2>";
                echo "Toote kirjeldus: ".htmlspecialchars($kirjeldus);
                echo "<br />";
                echo "Toote hind: ".htmlspecialchars($hind);
                echo "<br />";

            }
        } else {
            echo "Vigased andmed.";
        }



    }
    ?>
</div>
</div>

<div id="jalusekiht">
    Siim
</div>
</body>
</html>
<?php
$yhendus->close();
?>