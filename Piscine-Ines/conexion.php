<?php
$server ="localhost";
$username = "root";
$pass="";

//mysql_connect($server, $username, $pass);
$dbname="jeux";

//mysql_select_db($dbname)

// Create connection
$conn = new mysql_select_db($dbname)
// Check connection
//if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
//}

$sql = "INSERT INTO MyGuests (Nom, , Type, Prototype, Surdimensionne, A renvoyer, A notre chanrge, Commentaire) VALUES ('JEUX1', 'societe', '1', '1', '0', '0', '!!!!')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>