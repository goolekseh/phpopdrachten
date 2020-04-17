<?php
include "/inetpub/wwwroot/phpopdrachten/includes/header.php";
include "/inetpub/wwwroot/phpopdrachten/includes/m";

?>
<!doctype html>
<html lang="en">
<head>
    <title></title>
    <link href="/../phpopdrachten/Opdrachten/template%20css/template.css" type="text/css" rel="stylesheet">
</head>
<div id="main">
    <table>
        <tr>
            <td class="bold">Naam</td>
            <td>
                <?php
                echo $_POST["naam"]
                ?>
            </td>
        </tr>
        <tr>
            <td class="bold">Leeftijd</td>
            <td>
                <?php
                echo $_POST["age"]
                ?>
            </td>
        </tr>
        <tr>
            <td class="bold">Gemeente</td>
            <td>
                <?php
                echo $_POST["gemeente"]
                ?>
            </td>
        </tr>
        <tr>
            <td class="bold">Inwoners</td>
            <td>
                <?php
                echo $_POST["citizens"]
                ?>
            </td>
        </tr>
        <tr>
            <td class="bold">Aantal besmet</td>
            <td>
                <?php
                echo $_POST["infected"]
                ?>
            </td>
        </tr>
        <tr>
            <td class="bold">Kennissen besmet</td>
            <td>
                <?php
                echo $_POST["radio1"]
                ?>
            </td>
        </tr>
        <tr>
            <?php
            if($_POST["radio1"] == "Ja")
                {
                ?>
                <td></td>
                <td>De kans is in realiteit groter omdat je via je eigen netwerk
                    besmet kan raken.
                </td>
            <?php
                }
            ?>
        </tr>
        <tr>
            <td class="bold">Kans per ontmoeting op besmetting</td>
            <td>
                <?php
                    echoKans();
                ?>
            </td>
        </tr>
        <tr>
            <td class="bold">Kans is 1 op</td>
            <td>
                <?php
                    echo getKans1Op();
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                $kans1op = getKans1op();
                $vergelijking = vergelijkOorzaken($kans1op);

                print $vergelijking;
                ?>
            </td>
        </tr>
    </table>
</div>
<?php

?>

