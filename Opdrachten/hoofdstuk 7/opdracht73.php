<?php


// Inladen functies bestand
include("functions.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
$query = "SELECT * FROM joke";

if(isset($_GET["searchResult"]))
{
    $query = "SELECT * FROM joke";
    if (!empty($_GET["searchResult"])) {
        $src = $_GET["searchResult"];

        $query = "SELECT * FROM joke WHERE joketext LIKE '%$src%'";
    }
}

$jokes = executeQuery($query);
echo "<p> $query </p>";

?>
    <form method="GET">
        <input type="text" name="searchResult">
        <button type="submit">Zoeken</button>

    </form>
    <hr>
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

try{
    $sql = 'SELECT * FROM joke';
    $result = $pdo->query($sql);
    echo "<table> <tr><td>ID</td><td>joketext</td><td>jokeclou</td><td>Jokedate</td></tr>";
    foreach ($result as $row) {

        echo "<tr>"."<td>".$row["id"]."<td>".$row["joketext"]." </td>"."<td>".$row["jokeclou"]." </td>"."<td>".$row["jokedate"]."</td></tr>";

    }
    echo "</table>";
}
catch (PDOException $e){
    echo 'Er is een probleem met ophalen van jokes: ', $e->getMessage();
    exit();
}

echo "</pre>";
