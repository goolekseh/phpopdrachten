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
<!--
    PHP: Dhr. Evers
    JavaScript: Dhr. Spierings
    ASP: Dhr. Van der Meer
    SQL: Dhr. Spierings
-->
<?php
$courseName = "JavaScript";
$teacherName = "";
switch ($courseName) {
    case "PHP":
        $teacherName = "Evers";
        break;
    case "JavaScript":
        $teacherName = "Spierings";
        break;
    case "ASP":
        $teacherName = "Van der Meer";
        break;
    case "SQL":
        $teacherName = "Spierings";
        break;
}
echo "Voor het vak ".$courseName." heb je Dhr. ".$teacherName." als docent.";

?>
</body>
</html>
