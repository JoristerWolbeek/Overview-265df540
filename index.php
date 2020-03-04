<?php
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
        <tr>
            <th>Films</th>
            <th>Duur</th>
        </tr>

        <?php
        $stmt = $pdo->query('SELECT titel, duur FROM netland.movies;');
        while($info = $stmt->fetch()) {
            echo("<tr><td>".$info['titel']."</td><td>".$info['duur']."</td></tr>");
        }
        ?>
    </table>

    <table>
    <h2>Serie</h2>
        <tr>
            <th>Serie</th>
            <th>Rating</th>
        </tr>

        <?php
        $stmt = $pdo->query('SELECT title, rating FROM netland.series;');
        while($info = $stmt->fetch()) {
            echo("<tr><td>".$info['title']."</td><td>".$info['rating']."</td></tr>");
        }
        ?>
    </table>

    

</body>

</HTML>

