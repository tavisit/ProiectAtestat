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

if(isset($_POST['delete']))
{
    $nume = $_POST['Nume'];
    
    $query = "DELETE FROM `users` WHERE `Nume` = '$nume'";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Stearsa';
        
    }else{
        echo 'Eroare';
    }
    sleep(5);
        echo "Intoarcere pe pagina principala in 5s";
        $url = "home.html";
        header( "Location: $url" );
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

        <form action="delete.php" method="post">

            Numele persoanei de sters:&nbsp;<input type="text" name="Nume" required><br><br>

            <input type="submit" name="delete" value="Sterge Persoana">

        </form>

    </body>

</html>