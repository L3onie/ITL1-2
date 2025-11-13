<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Leonie</title>
</head>

<body>
    <h1>Erste PHP Applikation</h1>

    <?php
    // initialisiert und definiert von den fix Werten
    $liter1 = 40.5;
    $liter2 = 35.7;
    $preis = 1.499;

    // initialisiert und definiert von kosten/berechnung der kosten
    $kosten = ($liter1 + $liter2) * $preis;
    ?>

    <!-- Ausgabe mit echos -->
    <p> Die Gesamtkosten für <?php echo $liter1 + $liter2; ?> Liter Benzin betragen <?php echo $kosten; ?> Euro. </p>
</body>

</html>