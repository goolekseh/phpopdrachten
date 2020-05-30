<h1>Nieuwe Grap Toevoegen</h1>

<form method="POST">

    <label>Joketext          <input placeholder="Joketext komt hier" name="textResult"></label><br>
    <label>Jokeclou     <input placeholder="Jokeclou komt hier" name="clouResult"></label><br>
    <input type="submit" name="submit">
</form>
<?php
include "functions.php";
startConnection();
try {
$pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
echo "<h1>Database error:</h1>";
echo $e->getMessage();
die();
}

echo "database connectie gelukt <br><br>";
?>
<?php


$query = "";

if(isset($_POST["submit"]))
{
    $query = "INSERT INTO dbo.joke VALUES ('". $_POST["textResult"] ."', '" . $_POST["clouResult"] . "', GETDATE())";;
    // echo $query;
    executeQueryViaExec($query);
    echo
        "<h1>" . "Grap toegevoegd" . "</h1>" .
        "<p>" . "Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:" . "</p>" .
        "<p>" . "Joketext: " . $_POST["textResult"] . "</p>" .
        "<p>" . "Jokeclou: " . $_POST["textResult"] . "</p>" .

        "<a href='opdracht73.php'>" . "Bekijk grappen (opdracht 7.3)" . "</a>";
}








