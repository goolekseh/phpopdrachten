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
    if($uur <= 5){
        echo "Goedennacht";
    }
    else if($uur > 5 && $uur <= 12){
        echo "Goedenochtend";
    }
    else if($uur > 12 && $uur <= 17){
        echo "Goedenmiddag";
    }
    else{
        echo "Goedenavond";
    }

?>
</body>
</html>