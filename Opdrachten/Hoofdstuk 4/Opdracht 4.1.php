<!-- /**
* User: Teun van Helvoort
* Date: 5/2/2020
* Time: 2:53 PM
* File: opdracht 4.1.php
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
    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");
    if($date <= 5){
        echo "Goedennacht";
    }
    else if($date > 5 && $date <= 12){
        echo "Goedenochtend";
    }
    else if($date > 12 && $date <= 17){
        echo "Goedenmiddag";
    }
    else{
        echo "Goedenavond";
    }

?>
</body>
</html>