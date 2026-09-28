<?php
// Hostname 'db' atbilst Docker Compose servisa nosaukumam
$host = 'db';
$user = 'my_user';
$pass = 'user_password';
$dbname = 'my_database';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("<h2 style='color:red;'>Kļūda pieslēdzoties MariaDB: " . $conn->connect_error . "</h2>");
}

echo "<h1 style='color:green;'>Sveiciens no Docker! PHP aplikācija veiksmīgi pieslēdzās MariaDB datubāzei!</h1>";
?>