<?php

$host="e-srv-lamp.univ-lemans.fr";

$user ="e2304514";

$database ="e2304514";

$password ="Khg566wk";

$connection = new mysqli($host,$user,$password,$database);
if ($connection->connect_error){

    echo("error");
}

    $sql ="SELECT * FROM 'bithday-guests'
    $result = $conn->query($sql);

// Vérifier si le résultat de la requête est non vide
if ($result->num_rows > 0) {
    // Récupérer le nombre total d'invités
    $row = $result->fetch_assoc();
    $totalGuests = $row['bithday-guests'];
    echo $totalGuests;
} else {
    echo "0";
}

if ($connection->query ($sql) ==TRUE){

    echo"NEW SUPERHERO CREATED SUCCESSFULLY";

                                     }

   else{

   echo "error: " . $sql . "<br>" . $connection->error;
        }



}
$connection->close();

?>