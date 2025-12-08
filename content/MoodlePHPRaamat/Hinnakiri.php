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
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background: #f5f7fa;
            margin: 0;
            padding: 0;
            color: #333;
        }


        #lehepakett {
            display: flex;
            align-items: flex-start;
        }


        #menyykiht {
            width: 250px;
            background: #fff;
            padding: 20px;
            border-right: 1px solid #ddd;
            height: 100vh;
            box-sizing: border-box;
            position: sticky;
            top: 0;
        }

        #menyykiht h2 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 1.4em;
        }

        #menyykiht ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #menyykiht li {
            margin-bottom: 10px;
        }

        #menyykiht a {
            text-decoration: none;
            color: #2980b9;
            font-size: 1.1em;
            display: inline-block;
            padding: 6px 8px;
            border-radius: 4px;
            transition: 0.2s;
        }

        #menyykiht a:hover {
            background: #2980b9;
            color: white;
        }


        #menyykiht a:last-child {
            margin-top: 15px;
            display: inline-block;
            background: #27ae60;
            color: white;
            padding: 8px 12px;
            border-radius: 5px;
        }

        #menyykiht a:last-child:hover {
            background: #1e8449;
        }


        #sisukiht {
            flex-grow: 1;
            padding: 25px;
            box-sizing: border-box;
        }

        #sisukiht h2 {
            color: #2c3e50;
            margin-top: 0;
            font-size: 1.8em;
        }


        #sisukiht p, #sisukiht div, #sisukiht span {
            font-size: 1.1em;
        }


        #sisukiht a {
            text-decoration: none;
            color: #c0392b;
            font-size: 1.05em;
            margin-right: 15px;
            transition: 0.2s;
        }

        #sisukiht a:hover {
            color: #922b21;
        }


        #sisukiht input[type="text"],
        #sisukiht input[type="number"],
        #sisukiht textarea {
            width: 100%;
            max-width: 700px;
            padding: 10px 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1.05em;
            box-sizing: border-box;
            background: white;
        }

        #sisukiht textarea {
            height: 140px;
        }

        #sisukiht input[type="submit"] {
            background: #2980b9;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 1.1em;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.2s;
        }

        #sisukiht input[type="submit"]:hover {
            background: #1f6e96;
        }


        #jalusekiht {
            padding: 20px;
            text-align: center;
        }

    </style>
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