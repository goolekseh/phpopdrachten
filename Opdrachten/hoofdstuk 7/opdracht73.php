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
    print "<table> <tr><td>ID</td><td>joketext</td><td>jokeclou</td><td>Jokedate</td></tr>";
    foreach ($result as $row) {

        print "<tr>"."<td>".$row["id"]."<td>".$row["joketext"]." </td>"."<td>".$row["jokeclou"]." </td>"."<td>".$row["jokedate"]."</td></tr>";

    }
    print "</table>";
}
catch (PDOException $e){
    echo 'Er is een probleem met ophalen van jokes: ', $e->getMessage();
    exit();
}

//$aJokes = array();

//while ($row = $result->fetch(PDO::FETCH_ASSOC)){
//    $aJokes[] = $row;
//}

//var_dump($aJokes);
echo "</pre>";
