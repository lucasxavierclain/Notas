<?php
    $server="localhost";
    $username="lucas";
    $password="@Recode123";
    $database="notas";


    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn){
        die ("Falha na conexão com o BD " . mysqli_connect_errno());
    }
    

    ?>
