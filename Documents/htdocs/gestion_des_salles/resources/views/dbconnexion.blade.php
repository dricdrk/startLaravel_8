<?php
$servername='localhost';
$username='root';
$pass='';
$dbname='gestion_salle_insti';
 $conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
@yield('content')

$conn->close();
 ?>
