<?php
	include'inc/header.php';
	//include'conexion2.php';

    $mybdd = new PDO('mysql:host=localhost;dbname=piscine', 'root', '');


    //Jeux
    $sql = "SELECT NumJeux, NomJeux FROM jeux";
    $q = $mybdd->query($sql);
    $jeux = [];
    foreach($q as $zon){
        $zones[$zon['NomJeux']] = $zon['NumJeux'];
    }
    


?>
<middle>
<form action= "ajoutJeuxfunc.php" method="POST" >
    <legend>Ajouter un jeu à la zone</legend>
    <p>
        <label for="numJeux">Nom du jeux </label> : <select name="jeuxID" id="jeuxID" >
                <?php
                foreach($zones as $key => $value):
                echo '<option value="'.$value.'">'.$key.'</option>'; 
                endforeach;
                ?>
            </select>
</form>
     <form method="POST" action="zone.php">
	<input type="submit" value="Annuler" /> 
     
</html>
