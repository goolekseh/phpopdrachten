<?php
    echo $day = date("l");

    switch($day){
        case "Monday":
            echo "Today is Monday.";
            break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
        case "Wednesday":
            echo "It is Wednesday my dudes.";
            break;
        default:
            echo "ERROR";
    }
$counter = 1;
    while($counter <= 10){

        echo $counter . "<br>";
        counter++;
    }

    for($teller = 1; $teller <= 10; $teller++){
        echo $teller . "<br>";
    }



    $date = strtotime("+1 year");
    echo date("d-m-Y", $date);