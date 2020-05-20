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
<div id="main">
    <form action="checklogin.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="user">Username</label>
                </td>
                <td>
                    <input type="text" id="user" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="pass">Password</label>
                </td>
                <td>
                    <input type="password" id="pass" name="password">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit">
                </td>
                <td>
                </td>
            </tr>
        </table>
    </form>
</div>

<br>
<a href="../../../index.php">terug</a>
<?php
include "footer.php";
?>
</body>
</html>