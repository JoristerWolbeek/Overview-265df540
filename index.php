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


</style>

<HTML>
<head>
</head>

<body>
    <h1>Welkom om het netland beheerderspaneel</h1>
    <table>
        <h2>Films</h2>
        <form action="films.php" method="get">
            <tr>
                <th>Films</th>
                <th>Duur</th>
                <th>Details</th>
            </tr>

            <?php
                $stmt = $pdo->query('SELECT titel, duur, id FROM netland.movies;');
                while($info = $stmt->fetch()) {
                    echo("<tr><td>".$info['titel']."</td><td>".$info['duur']."</td><td><a name='id' type='submit' href='http://localhost/films.php?id=$info[id]'>Details</a></td></tr>");
            }
            ?>

        </form>
    </table>

    <table>
        <h2>Serie</h2>
        <form action="series.php" method="get">
            <tr>
                <th>Serie</th>
                <th>Rating</th>
                <th>Details</th>
            </tr>

            <?php
                $stmt = $pdo->query('SELECT title, rating, id FROM netland.series;');
                while($info = $stmt->fetch()) {
                    echo("<tr><td>".$info['title']."</td><td>".$info['rating']."</td><td><a name='id' type='submit' href='http://localhost/series.php?id=$info[id]'>Details</a></td></tr>");
                }
            ?>
        </form>
    </table>

    

</body>

</HTML>

