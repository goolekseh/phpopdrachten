<?php

foreach($login as $username => $password) {
    if($_POST["username"] == $username && $_POST["password"] == $password){
        $loginCheck = true;
    }
 }
if($loginCheck == true){

?>



<?php

?>
