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
echo "<p>" . "U bent ingelogd" . "</p>";
?>

<br>
<a href="../../../index.php">terug</a>
<?php
include "footer.php";
?>
</body>
</html>
<?php
$_SESSION["username"] = $_POST["username"];
$authUsers = Array(
    "Teun" => "neut",
    "Luuk" => "123456",
    "Mitchell" => "654321",
    "Lucas" => "wachtwoord"
);


if ($_POST['username'] == 'Teun' && $_POST['password'] == 'neut')
{
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location: welkom.php');
}


    foreach ($authUsers as $gebruikersnaam => $password)
    {
        $wachtwoord = $_POST["password"];
        $username = $_POST["username"];

        if($gebruikersnaam === $username && $wachtwoord === $password) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: welkom.php');
        }
    };
session_start();
session_destroy();
header('location: Opdracht 6.1.php');
?>
