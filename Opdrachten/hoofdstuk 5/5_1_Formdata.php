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
<?php
$companyName = $_GET["bedrijfsnaam"];
$firstName = $_GET["Voornaam"];
$lastName = $_GET["achternaam"];
$telephone = $_GET["telefoon"];
$email = $_GET["email"];
$message = $_GET["bericht"];
?>
<table>
    <tr>
        <td>
            Bedrijfsnaam:
        </td>
        <td>
            <?php
            echo $companyName;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Voornaam:
        </td>
        <td>
            <?php
            echo $firstName;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Achternaam:
        </td>
        <td>
            <?php
            echo $lastName;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Telefoon:
        </td>
        <td>
            <?php
            echo $telephone;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            E-mail:
        </td>
        <td>
            <?php
            echo $email;
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Bericht:
        </td>
        <td>
            <?php
            echo $message;
            ?>
        </td>
    </tr>
</table>
<br>
</body>
</html>