<?php
// Creeaza o conexiune intre php si DB
$hostname = "localhost";
$username = "root";
$password = "";
// Numele bazei de date
$databaseName = "test_db";
$nume = $_POST['Nume'];
// Creeaza conexiunea
$connect = mysqli_connect($hostname, $username, $password);
mysqli_select_db($connect, $databaseName);

// Queryul
$query = "SELECT * FROM `users` where Nume='$nume'";

$result = mysqli_query($connect, $query);

// Afiseaza datele:
while($row = mysqli_fetch_array($result))
  {
    echo "ID: $row[0] <br/>Nume: $row[1] <br/>Prenume: $row[2] <br/>Clasa: $row[3] <br/>Media: $row[4]<br/><br/>";

  }
  
  mysqli_free_result($result);

// Inchide Conexiunea
  mysqli_close($connect);
  echo '</br></br><input type="button" value = \'Intoarcere la pagina principala\'onclick="window.location=\'home.html\'"/>';
?>