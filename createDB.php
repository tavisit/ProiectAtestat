<?php
$hostname = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($hostname, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Conexiune esuata: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE test_db";
if ($conn->query($sql) === TRUE) {
    echo "DB creata cu succes<br/>";
} else {
    echo "Eroare de tipul la DB: " . $conn->error;
}
sleep(2);
$conn->close();

$dbname = "test_db";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Conexiune esuata: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Nume VARCHAR(30) NOT NULL,
Prenume VARCHAR(30) NOT NULL,
Clasa int(11),
Media int(11)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela creata cu succes<br/>";
} else {
    echo "<br/>Eroare de tipul la tabela: " . $conn->error;
}

$conn->close();

echo '</br></br><input type="button" value = \'Intoarcere la pagina principala\'onclick="window.location=\'home.html\'"/>';
?>