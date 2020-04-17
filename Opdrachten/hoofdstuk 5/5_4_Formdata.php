
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Index"; ?></title>
    <link href="/../phpopdrachten/Opdrachten/template%20css/template.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/header.php";
?>

<form method="post" action="5_4_Formdata.php">
    <p>Komt er een ambulance aan?</p><br>
    <div class="54">
        <input type="radio" name="ambulancecoming" value="ja" id="ja">
        <label for="ja">Ja</label>
        <input type="radio" name="ambulancecoming" value="nee" id="nee">
        <label for="nee">Nee</label>
    </div>
    <br>

    <p>Stoplicht kleur?</p><br>
    <div class="54">
        <input type="radio" name="trafficlightcolor" value="Rood" id="Rood">
        <label for="Rood">Rood</label>
        <input type="radio" name="trafficlightcolor" value="Groen" id="Groen">
        <label for="Groen">Groen</label>
        <input type="radio" name="trafficlightcolor" value="Oranje" id="Oranje">
        <label for="Oranje">Oranje</label>
    </div>
    <br>
    <input type="submit">
</form>
<p>
    De output is:
</p>
<?php
            $trafficlightcolor = $_POST ["trafficlightcolor"];
            $ambulancecoming = $_POST["ambulancecoming"];
            $driveon = "";
            $tekstambulance = "";
            if ($ambulancecoming == "ja") {
                $ambulancecoming = true;
            } elseif ($ambulancecoming == "nee") {
                $ambulancecoming = false;
            }

            if ($trafficlightcolor == "Groen" && $ambulancecoming == false)
            {
                $driveon = "U mag doorijden.";
            }
            else
            {
                $driveon = "U moet stoppen.";
            }

            if ($ambulancecoming == true)
            {
                $tekstambulance = " en er komt een ambulance aan ";
            }
            elseif ($ambulancecoming == false)
            {
                $tekstambulance = " en er komt geen ambulance aan ";
            }

                echo "<p> Het stoplicht staat op ".$trafficlightcolor."".$tekstambulance." dus: <br>".$driveon."</p>";
            ?>


<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>