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
<form method="get" action="5_1_Formdata.php">
    <div class="54">
        <label for="bedrijfsnaam">Bedrijfsnaam</label><br>
        <input type="text" name="bedrijfsnaam" id="bedrijfsnaam"><br>
        <label for="Voornaam">Voornaam</label><br>
        <input type="text" name="Voornaam" id="Voornaam"><br>
        <label for="achternaam">Achternaam</label><br>
        <input type="text" name="achternaam" id="achternaam"><br>
        <label for="telefoon">Telefoon</label><br>
        <input type="text" name="telefoon" id="telefoon"><br>
        <label for="email">E-mail</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="bericht">Bericht</label><br>
        <textarea name="bericht" id="bericht"></textarea><br>
        <input type="submit">
    </div>
</form>

<br>
<a href="../../index.php">terug</a>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/footer.php";
?>
</body>
</html>