<?php

echo "Strada <br><br>";

// izvadit 1 lietotāju
$connection = new mysqli("localhost","root","","sipols"); //savienojums ar datu bāzi

$result = $connection->query("SELECT * FROM users"); //selecto datus no datu bazes query 
$data = $result->fetch_assoc(); //paņem no datu bāzes pirmās rindiņas datus

var_dump($data); //izvada visu 
//var_dump($connection);

//Ielikt lietotāju no HTML formas

echo "<form>";

echo "</form>";

?>