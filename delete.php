<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "test_db";
$connect = mysqli_connect($hostname, $username, $password);
mysqli_select_db($connect, $databaseName);

// Queryul
$query = "SELECT * FROM `users`";

$result = mysqli_query($connect, $query);

// Afiseaza datele:
while($row = mysqli_fetch_array($result))
  {
    echo "|$row[0] | $row[1] | $row[2] | $row[3]|<br>";
    
  }
mysqli_free_result($result);

if(isset($_POST['ID']))
{
    $id = $_POST['ID'];
    
    $query = "DELETE FROM `users` WHERE `ID` = '$id'";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Stearsa';
        header("Refresh:0");
    }else{
        echo 'Eroare';
        header("Refresh:0");
    }
}

mysqli_close($connect);
?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP DELETE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <br>
        <form action="delete.php" method="post">

            ID-ul persoanei de sters:&nbsp;<input type="text" name="ID" required><br><br>

            <input type="submit" name="delete" value="Sterge Persoana">

        </form>
        <a href="home.html"><button >Intoarcere</button></a>
        <br>
    </body>

</html>