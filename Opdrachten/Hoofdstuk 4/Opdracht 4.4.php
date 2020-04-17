
<!-- /**
* User: Teun van Helvoort
* Date: 5/2/2020
* Time: 2:53 PM
* File: opdracht 4.2.php
-->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php print "opdracht 3.2.php"; ?></title>
    <link href="../template%20css/template.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php
include "../../index.php";
?>
<?php
for($counter = 0; $counter <= 7; $counter++) {
    $count = strtotime("$counter days");
    echo "<br>";
    echo "<p>"."Day ";
    echo date('w', $count);
    echo " is ";
    echo date("l", $count);
    echo " ";
    echo date("l w Y-m-d", $count)."</p>";
}
?>

</body>
</html>
