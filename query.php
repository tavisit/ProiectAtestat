<?php
// Creeaza o conexiune intre php si DB
$hostname = "localhost";
$username = "root";
$password = "";
// Numele bazei de date
$databaseName = "test_db";

// Creeaza conexiunea
$connect = mysqli_connect($hostname, $username, $password);
mysqli_select_db($connect, $databaseName);

// Queryul
$query = "SELECT * FROM `users`";

$result = mysqli_query($connect, $query);

// Afiseaza datele:
while($row = mysqli_fetch_array($result))
  {
    echo "|$row[0] | $row[1] | $row[2] | $row[3]| $row[4]|<br>";

  }
  
  mysqli_free_result($result);

// Inchide Conexiunea
  mysqli_close($connect);
  echo '</br></br><input type="button" value = \'Intoarcere la pagina principala\'onclick="window.location=\'home.html\'"/>';
?>