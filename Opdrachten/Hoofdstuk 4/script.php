<?php

$task2 = "Lancering in";
$c1 = 19;

While($c1 > 0) {
    $task2 = $task2.$c1.", ";
    $c1 = $c1 - 1;

    if($c1 == 0){
        $task2 = $task2.$c1;
    };
};
$task3 = "Lancering in";


for($c2 = 19; $c2 > 0; $c2 = $c2 - 1){
    $task3 = $task3.$c2.", ";
    if($c2 == 0){
        $task3 = $task2.$c2;
    };
}

$task4 = "";
$c3 = 1;

while($c3 <= 6) {
    $task4.="<h$c3>"." Dit is de ".$c3."e "."iteratie </h$c3> <br>";
    $c3++;
}

$msg3 = $task4;

$task5 = "";


for($c4 = 1; $c4 <= 10; $c4++) {
    $task5.="<tr>"."<td>"."Dit is de ".$c4."e "."iteratie"."</td>"."</tr>";
}

$msg4 = "<table>".$task5."</table>";

$task6 = "";
$date = 2020;
while($date >= 2001) {
    $age = $date - 2001;
    if($date == 2020) {
        $task6 .= "<p>"."In ".$date." ben/word ik ".$age." jaar oud </p>";
    }
    elseif($date == 2001) {
        $task6 .= "<p>"."In ".$date." ben ik geboren "."</p>";
    }
    else {
        $task6.="<p>"."In ".$date." was ik ".$age." jaar oud"."</p>";
    }
    $date = $date - 1;
}

$msg5 = $task6;
?>