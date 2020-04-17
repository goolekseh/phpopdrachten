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
<?php
$name = $_GET["naam"];
$snumber = $_GET["snummer"];
$date = $_GET["datum"];
$reason = $_GET["reden"];
$learnyear = $_GET["leerjaar"];
$signIn = $_GET["aanmelden"];
$delete = $_GET["verwijder"];
$textbox = $_GET["textbox"];
?>
<table>
    <tr>
        <td>
            Voor en achternaam:
        </td>
        <td>
            <?php
            echo $name;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Studentennummer:
        </td>
        <td>
            <?php
            echo $snumber
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Datum uitschrijving
        </td>
        <td>
            <?php
            echo $date
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden Uitschrijving
        </td>
        <td>
            <?php
            echo $reason
            ?>
        </td>
    </tr>
    <tr>
        <td>
                Leerjaar
        </td>
        <td>
            <?php
            if (isset($learnyear))
            {
                echo $learnyear;
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Aanmelden voor de succesklas
        </td>
        <td>
            <?php
            if(isset($signIn))
            {
                echo "JA";
            }
            else
            {
                echo "NEE";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            verwijder gegevens
        </td>
        <td>
            <?php
            if(isset($delete))
            {
                echo "JA";
            }
            else
            {
                echo "NEE";
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Reden uitschrijving
        </td>
        <td>
            <?php
            echo $textbox;
            ?>
        </td>
    </tr>
</table>
<br>

</body>
</html>