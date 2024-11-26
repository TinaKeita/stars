<?php

echo "Strada <br><br>";

// izvadit 1 lietotāju
$connection = new mysqli("localhost","root","","sipols"); //savienojums ar datu bāzi

$result = $connection->query("SELECT * FROM users"); //selecto datus no datu bazes query 
$data = $result->fetch_assoc(); //paņem no datu bāzes pirmās rindiņas datus

print_r($data); //izvada visu 
echo "<br><br>";

//Ielikt lietotāju no HTML formas
echo"<pre>";
var_dump($_SERVER);
echo"</pre>";

if($_SERVER["REQUEST_METHOD"] =="POST") {
    $username = $_POST["usurname"];
    $password = $_POST["passv"];

    $sql = "INSERT INTO users
            (username, pass)
            VALUES
            ('$username', '$password')";
    
    $connection->query($sql);
};

echo "<form method='POST'>";
    echo "<label>Lietotājvārds: <input name='usurname' placeholder='Lietotājvārds'/></label><br><br>";
    echo "<label>Parole: <input type='password' name='passv' placeholder='Parole'/></label><br><br>";
    
    echo "<input type='submit' value='Reģistrēties'/>";
echo "</form>";






//ir 2 masvu veidi
//Izveido masīvu ar vērtībām "sarkans", "abols", 120
//Indeksi tiek piešķirti automātiski
/*echo "<br><br>";
$auglis = ["sarkans", "ābols",120];
print_r($auglis);

//Pats iedod indeksus
//Asociatīais masīvs color, type, weight
$auglisAssoc = ["color" => "sarkans", "type" => "ābols", "weight" => 120];
print_r($auglisAssoc);
*/
?>