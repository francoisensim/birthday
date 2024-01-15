<?php

$host="e-srv-lamp.univ-lemans.fr";

$user ="e2304514";

$database ="e2304514";

$password ="Khg566wk";

$connection = new mysqli($host,$user,$password,$database);
if ($connection->connect_error){

    echp("error");
}



if($_SERVER ["REQUEST_METHOD"] == "POST"){

$Name = $_POST['text'];
$Power = $_POST['nombre'];

$sql ="INSERT INTO `bithday-guests` value('paul', 23)";
if ($connection->query ($sql) ==TRUE){

    echo"NEW SUPERHERO CREATED SUCCESSFULLY";

                                     }

   else{

   echo "error: " . $sql . "<br>" . $connection->error;
        }



}
$connection->close();

?>