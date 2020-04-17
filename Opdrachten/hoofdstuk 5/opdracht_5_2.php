<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Index"; ?></title>
    <link href="/../phpopdrachten/Opdrachten/template%20css/template.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include "/inetpub/wwwroot/phpopdrachten/includes/header.php";
include "/inetpub/wwwroot/phpopdrachten/includes/menu.php";
?>
<form method="get" action="5_2_Formdata.php">
    <div class="54">
        <table>
            <tr>
                <td>
                    <label for="naam">Voor en achternaam</label>
                </td>
                <td>
                    <input type="text" name="naam" id="naam"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="snummer">Studentennummer</label>
                </td>
                <td>
                <input type="text" name="snummer" id="snummer"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="datum">Datum uitschrijving</label>
                </td>
                <td>
                    <input type="text" name="datum" id="datum"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="reden">Reden uitschrijving</label>
                </td>
                <td>
                    <select name="reden" id="reden">
                        <option value="Verkeerde keuze">Ik vind het niet leuk</option>
                        <option value="Geen motivatie">Motivatie is weg</option>
                        <option value="Ik ga werken">Ik wil liever werken</option>
                        <option value="Ik neem een tussenjaar">Ik heb concentratie problemen</option>
                    </select><br>
                </td>
            </tr>
            <tr>
                <td rowspan="3">
                    <label for="leerjaar1">Leerjaar</label>
                </td>
                <td>
                    <input id="leerjaar1" name="leerjaar" type="radio" value="1e leerjaar"><label for="leerjaar1">1e leerjaar</label><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="leerjaar2" name="leerjaar" type="radio" value="2e leerjaar"><label for="leerjaar2">2e leerjaar</label><br>
                </td>
            </tr>
            <tr>
                <td>
                    <input id="leerjaar3" name="leerjaar" type="radio" value="3e leerjaar"><label for="leerjaar3">3e leerjaar</label><br>
                </td>
            </tr>
        </table>
        <label for="aanmelden"><input name="aanmelden" id="aanmelden" type="checkbox" value="JA">Ik wil mij aanmelden bij de succesklas</label><br>
        <label for="verwijder"><input name="verwijder" id="verwijder" type="checkbox" value="JA">Verwijder mijn gegevens uit het systeem</label><br>
        <label for="textbox">Geef hieronder de reden van je uitschrijving op:</label><br>
        <textarea name="textbox" id="textbox"></textarea><br>
        <input type="submit">
    </div>
</form>
<br>
<a href="../../index.php">terug</a>
<?php

?>
</body>
</html>