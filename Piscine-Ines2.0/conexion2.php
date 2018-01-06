<!DOCTYPE html>
<html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "piscine";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
try 
{
	$myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}
// $num = $_POST['numEditeur'];
$nom = $_POST['nomEditeur'];
$ville=$_POST['ville'];
$rue = $_POST['Rue'];
$code = $_POST['code'];


// echo $num;
//echo $nom;
//echo $ville;
//echo $rue;
//echo $code;
// Check connection
// if ($myPDO->connect_error) {
//     die("Connection failed: " . $myPDO->connect_error);
// } 

$sql1 = "INSERT INTO `editeur` VALUES (NULL, '$nom', '$ville', '$rue', '$code')";


// $sql = "SELECT * FROM `editeur`";

//$array=[];
//$stmt = $myPDO->prepare($sql);
// $stmt->execute($array) or die(print_r($stmt->errorInfo(), true));

//verification connexion base de donnes
if ($myPDO->query($sql1) == TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>";// . $conn->error;
}



// $conn->close();
?>

<html>
		wait
		<script type="text/javascript">location.href = 'editeur.php';</script>
</html>