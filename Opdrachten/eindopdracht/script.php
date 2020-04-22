<?php
$login['teun'] = "pass1";
$login['adrian'] = "pass3";
$login['luuk'] = "pass3";
$login['mitchell'] = "pass4";
$login['evers'] = "docent";
$login['timon'] = "pass5";
$login["jasper"] = "pass5";
$login["miranda"] = "pass6";
$login["kees"] = "pass7";
$login["lucas"] = "pass8";
$message = "";

$loginCheck = false;
foreach($login as $username => $password) {
    if($_POST["username"] == $username && $_POST["password"] == $password){
        $loginCheck = true;
        $message = "";
        break;
    } elseif ($_POST["username"] == "" && $_POST["password"] == ""){
        $message = "u heeft een vak leeggelaten";
    } else{
        $message = "incorrecte login";
    }
}

