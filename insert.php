<?php
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "test_db";

    $nume = $_POST['Nume'];
    $prenume = $_POST['Prenume'];
    $clasa = $_POST['Clasa'];
    $media = $_POST['Media'];

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);

    $query = "INSERT INTO `users`(`Nume`, `Prenume`, `Clasa`,`Media`) VALUES ('$nume','$prenume','$clasa','$media')";
    
    $result = mysqli_query($connect,$query);
    
    // Verifica daca s-a facut

    if($result)
    {
        echo 'Date introduse';
        
    }
    
    else{
        echo 'Eroare';
    }
    sleep(5);
    echo "Intoarcere pe pagina principala in 5s";
    $url = "home.html";
    header( "Location: $url" );
    mysqli_close($connect);
    
}
?>
<!DOCTYPE html>

<html>

    <head>

        <title> PHP INSERT DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
        <form action="insert.php" method="post">

            <input type="text" name="Nume" required placeholder="Nume"><br><br>

            <input type="text" name="Prenume" required placeholder="Prenume"><br><br>

            <input type="number" name="Clasa" required placeholder="Clasa" min="1" max="12"><br><br>

            <input type="number" name="Media" required placeholder="Media" min="1" max="10"><br><br>

            <input type="submit" name="insert" value="Adauga date in baza de date">

        </form>

    </body>

</html>
