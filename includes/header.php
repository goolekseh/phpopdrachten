<!-- /**
* User: Teun van Helvoort
* Date: 5/2/2020
* Time: 2:53 PM
* File: index.php
-->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "Index"; ?></title>
    <link href="../Opdrachten/template%20css/template.css" type="text/css" rel="stylesheet">

</head>
<body>
<?php
    include "../index.php"
?>
</body>
</html>

<?php
if (isset($_SESSION['username'])) {
    $bezoeker = $_SESSION['username'] . "&nbsp; <a class='footer'
                                               href='/../phpopdrachten/Opdrachten/Hoofdstuk%206/welkom.php'>Loguit</a>";
} else {
    $bezoeker = "onbekende bezoeker" . "&nbsp; <a class='footer'
                                              href='/../phpopdrachten/Opdrachten/Hoofdstuk%206/Opdracht%206.1.php/'>Login</a>";
}
?>
