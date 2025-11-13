<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Leonie</title>
</head>

<body>
    <h1>Erste PHP Applikation - mit Eingabe</h1>

    <?php
    // Standardwerte
    $liter1 = $liter2 = $preis = $kosten = 0;

    // Prüfen, ob Werte vom Formular kommen
    if (isset($_REQUEST["liter1"]) && isset($_REQUEST["liter2"]) && isset($_REQUEST["preis"])) {
        // Werte aus dem Formular holen und in float umwandeln
        $liter1 = (float) $_REQUEST["liter1"];
        $liter2 = (float) $_REQUEST["liter2"];
        $preis = (float) $_REQUEST["preis"];

        // Berechnung der Kosten
        $kosten = ($liter1 + $liter2) * $preis;

        // Ausgabe text
        $ausgabe = "Die Benzinkosten betragen für " . ($liter1 + $liter2) . " Liter " . $kosten . " €";
    }
    ?>

    <form action="" method="get">
        Liter 1: <input type="text" name="liter1" value="<?php echo $liter1; ?>"><br><br>
        Liter 2: <input type="text" name="liter2" value="<?php echo $liter2; ?>"><br><br>
        Preis pro Liter: <input type="text" name="preis" value="<?php echo $preis; ?>"><br><br>
        <input type="submit" value="Berechnen">
    </form>

    <?php
    // Ausgabe nur, wenn Kosten berechnet wurden
    if ($kosten > 0) {
        // Ausgabe des Satzes
        echo "<p>$ausgabe</p>";
    }
    ?>
</body>

</html>