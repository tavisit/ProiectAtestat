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
$query = "DROP DATABASE test_db";

$result = mysqli_query($connect, $query);
if($result) echo "Reusit";
else echo "Esuat";

mysqli_free_result($result);

// Inchide Conexiunea
  mysqli_close($connect);
  echo '</br></br><input type="button" value = \'Intoarcere la pagina principala\'onclick="window.location=\'home.html\'"/>';
?>