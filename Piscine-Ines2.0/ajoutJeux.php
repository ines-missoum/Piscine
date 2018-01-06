<?php
	include'inc/header.php';
	//include'conexion2.php';

    $myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', '');

    if ( !empty($_POST['infoID'])) {
    	//On voit si la requête vient d'une page éditeur auquel cas on aura le champ Id editeur de figé
    	$sql7 = "SELECT * FROM editeur WHERE NumEditeur = '".$_POST['infoID']."' " ;
    	$f = $myPDO->query($sql7);
    	$edit = $f->fetch();
    	
    	
	}

    //Editeurs
    $sql = "SELECT NumEditeur, NomEditeur
            FROM `editeur`";
    $q = $myPDO->query($sql);
    $editeurs = [];
    foreach($q as $ed){
        $editeurs[$ed['NomEditeur']] = $ed['NumEditeur'];
    }
    
    //Categories 
    $sql = "SELECT CodeCategorie, NomCategorie
            FROM `categorie`";
    $q = $myPDO->query($sql);
    $categories = [];
    foreach($q as $cat){
        $categories[$cat['NomCategorie']] = $cat['CodeCategorie'];
    }
    // var_dump($editeurs);
    // die();

?>
<middle>
<form action= "ajoutJeuxfunc.php" method="POST" >
    <legend>Jeux </legend>
    <p>
        <label for="NomJeux">Nom du jeux</label> : <input type="text" name="nomJeux" id="nomJeux" required  />
    </p>
                    
    <p>
        <label for="NombreJoueur">Nombre Joueur</label> : <input type="int" name="nombre" id="nombre" required/>

    </p>
    <p>
        <label for="DateSortie">Date sortie</label> : <input type="date" name="DateSortie" id="DateSortie" placeholder="ex: 1997-11-30" required/>

    </p>
    <p>
        <label for="DureePartie">Duree partie</label> : <input type="time" name="DureePartie" id="DureePartie" placeholder="ex: 05:26:00 " required/>
        <!--<label for="Num">NUM </label><input type="number" name="numEditeur" id="numEditeur" required/>-->

    </p>
    <?php if (!empty($edit['NomEditeur'])){
    	//On voit si la requête vient d'une page éditeur (donc aurait un identifiant d'éditeur) auquel cas on aura le champ Id editeur de figé
    	// $edit l'editeur auquel on veut ajouter un jeux
    ?>	
    	ID editeur : <?php echo $edit['NomEditeur'] ?>
    	<input type="hidden" name="infoID" value="<?php echo $edit['NumEditeur']; ?>" />
     <p>
    <?php } 
    	  else // si on ajoute un jeux sans être passé par info editeur mais par jeux.php
    	  { ?> 
        <label for="numEditeur">ID editeur</label> : <select name="infoID" id="infoID" >
                <?php
                foreach($editeurs as $key => $value):
                echo '<option value="'.$value.'">'.$key.'</option>'; 
                endforeach;
                ?>
            </select>
        <?php } ?>
        <!--<label for="Num">NUM </label><input type="number" name="numEditeur" id="numEditeur" required/>-->

    </p>

     <p>
        <label for="codeCategorie">Code categorie</label> : <select name="codeCategorie" id="codeCategorie" >
                <?php
                foreach($categories as $key => $value):
                echo '<option value="'.$value.'">'.$key.'</option>'; //il faut créer les entrée dans la bdd
                endforeach;
                ?>
            </select>
		<form method="POST" action="ajoutCategorie.php">
			    <input type="submit" value="Ajouter une categorie" />
	
			</form>
        <!--<label for="Num">NUM </label><input type="number" name="numEditeur" id="numEditeur" required/>-->

    </p>
    
	
	

    <input type="submit" value="Ajouter le jeux" id = "add" />
</form>
<p>
<form method="POST" action="jeux.php">
	<input type="submit" value="Annuler" />
	
</form>
</p>
</middle>
</body>
</html>






