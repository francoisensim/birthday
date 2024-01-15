

<?php

$host="e-srv-lamp.univ-lemans.fr";

$user ="e2304514";

$database ="e2304514";

$password ="Khg566wk";

$connection = new mysqli($host,$user,$password,$database);




if($connection->connect_error){

    die("connection failed:".$connection->connec_error);

}

$seletDataquery="SELECT * FROM `bithday-guests`;



$result = $connection->query($seletDataquery);




if ($result->num_rows > 0) {

    $totalGuests = 0;



    while ($row = $result->fetch_assoc()) {

       

        echo "text: " . $row["text"] . " - nombre: " . $row["nombre"] . "<br>";



        

        $totalGuests += $row["nombre"];

    }



    

    echo "<p>Le nombre total d'invités est : " . $totalGuests . "</p>";

} else {

    echo "Aucun résultat trouvé dans la base de données.";

}



$connection->close();  

?>

