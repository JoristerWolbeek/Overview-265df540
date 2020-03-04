<?php
session_start();
$servername = "mysql:host=localhost;dbname=netland";
$username = "root";
$password = "";
$pdo = new PDO($servername, $username, $password);

?>


<style>
table, tr, td, th {
    padding: 20px;
    border-collapse: collapse;
}

table {
    margin-bottom: 50px;
}

tr {
    border-bottom:black solid 2px;
}

h2 {
    margin-bottom: -15px;
}

iframe {
    width: 100%;
    height: 100%;
}

h2, h3{
    margin: 0px;
}

html{
    font-size: 25px;
}


</style>

<html>
<body>

<a href="http://localhost/index.php">Terug</a>
<?php  

$stmt = $pdo->query("SELECT titel, duur, landVanAfkomst, omschrijving, uitkomstDatum, trailer FROM netland.movies WHERE id=$_GET[id];");
while($info = $stmt->fetch()) {
    echo("<h1>".$info['titel']."</h1><br><b>".$info["duur"]." Minuten </b><br><b>Land van afkomst </b>".$info["landVanAfkomst"]."<br><b>Beschrijving</b><br>".$info["omschrijving"]."<br><br><b>Uitgekomen op</b>".$info["uitkomstDatum"]."<br>"."<iframe src='https://www.youtube.com/embed/$info[trailer]'</iframe>");
}
?>

</body>
</html>
