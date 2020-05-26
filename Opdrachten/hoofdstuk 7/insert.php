<h1>Nieuwe Grap Toevoegen</h1>

<form method="POST">

    <label>Joketext          <input placeholder="Joketext komt hier" name="textResult"></label><br>
    <label>Jokeclou     <input placeholder="Jokeclou komt hier" name="clouResult"></label><br>
    <input type="submit">
</form>
<?php
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
include "functions.php";

$query = "";
if(isset($_POST["textResult"]) && isset($_POST["clouResult"]))
{
    $query = "INSERT INTO dbo.joke (joketext, jokeclou, jokedate) VALUES ('','', GETDATE())";
    if (!empty($_POST["textResult"])) {
        $src = $_POST["textResult"];
        $src2 = $_POST["clouResult"];

        $query = "INSERT INTO dbo.joke VALUES ('".$src."','".$src2."', GETDATE())";
    }
}
echo $query;



