<?php
    include'inc/header.php';
    //$servername = "localhost";
    //$username = "root";
    //$password = "";
    //$dbname = "piscine";
    //$editeur= "editeur";
    $myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', '');

    $sql = "SELECT NumJeux, NomJeux, NombreJoueur,  DateSortie, DureePartie, NumEditeur, CodeCategorie 
            FROM `jeux`";
     
    $q = $myPDO->query($sql);
    ?>
    <div class="col-md-4">
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nom Jeux</th>
                <th>Nombre Joueur</th>
                <th>Date sortie</th>
                <th>Duree Partie</th>
                <th>Id Editeur</th>
                <th>Id Categorie</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($r['NomJeux']) ?></td>
                    <td><?php echo htmlspecialchars($r['NombreJoueur']); ?></td>
                    <td><?php echo htmlspecialchars($r['DateSortie']); ?></td>
                    <td><?php echo htmlspecialchars($r['DureePartie']); ?></td>
                    <td><?php echo htmlspecialchars($r['NumEditeur']); ?></td>
                    <td><?php echo htmlspecialchars($r['CodeCategorie']); ?></td>
                    <td>
                        <form method="POST" action="supJeux.php">
                            <input type="hidden" name="jeuxID" value="<?php echo $r['NumJeux']; ?>" />
                            <input type="submit" style="float:right;" id="suppr" value="Suppr" />
                        </form>
                        <form method="POST" action="modifJeux.php">
                        	
                            <button type="submit">Modif</button>
                        </form>
                        <!-- <form method="POST" action="modifEditeur.php"> 
                            
                            <input type="submit" style="float:right;" id="modif" value="Modif"/>Modif</button>
                        </form>-->
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
    <?php 

    //$nom = $_POST['nom'];
    //$pass = $_POST['pass'];
    //echo $nom;
    //echo ' ';
    //echo $pass;
    //$utilisateur1= "alexandra";
    //$pass1 = "alex";
    //if ($nom !== $utilisateur1 and $pass !== $pass1){
        //<script type="text/javascript">location.href = 'accueil.php';</script>
        //myFunction();
    //}
//SHOW [FULL] {COLUMNS | FIELDS}
    //{FROM | IN} $editeur
    //[{FROM | IN} $dbname]
    //[LIKE 'pattern' | WHERE expr]
    //SHOW COLUMNS FROM $dbname.$editeur;


    //$sql = "SELECT NumEditeur, NomEditeur, RueEditeur FROM editeur";
    //$result = $myPDO->query($sql);

//if ($result->num_rows > 0) {
    // output data of each row
    //while($row = $result->fetch_assoc()) {
        //echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    //}
//} else {
  //  echo "0 results";
//}

//$myPDO->close();
//?>



<middle>


    </p>
    <form method="POST" action="ajoutJeux.php">
    <button type="submit">Ajouter un Jeux</button>
</form>
</form>
<p>
	<form method="POST" action="categorie.php">
	<input type="submit" value="Voir la liste des catégories de jeux" />
</p>
	
</form>
</middle>
</body>
</html>












