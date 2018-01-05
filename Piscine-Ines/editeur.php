
<?php
	include'inc/header.php';
    //$servername = "localhost";
    //$username = "root";
    //$password = "";
    //$dbname = "piscine";
    //$editeur= "editeur";
    $myPDO = new PDO('mysql:host=localhost;dbname=piscine', 'root', '');

    $sql1 = "SELECT NumEditeur, NomEditeur, VilleEditeur, RueEditeur, CodePostaleEditeur 
            FROM `editeur`";
     
    $q = $myPDO->query($sql1);
    
    ?>


	
    <form method="POST" action="InfoEditeur.php">
    	<label for="NomEditeur">Nom de l'Editeur</label> : <input type="text" name="nomEditeur" id="nomEditeur"  > 
    </br>
        <input type="submit" style="left:20px;" id="recherche" value="Rechercher" /></button>
    </form>
	</br>
	
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th>Nom Editeur</th>
                <th>Ville Editeur</th>
                <th>Rue Editeur</th>
                <th>Code Postale</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($r = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($r['NomEditeur']) ?></td>
                    <td><?php echo htmlspecialchars($r['VilleEditeur']); ?></td>
                    <td><?php echo htmlspecialchars($r['RueEditeur']); ?></td>
                    <td><?php echo htmlspecialchars($r['CodePostaleEditeur']); ?></td>
                    <td>
                        <form method="POST" action="supEditeur.php">
                            <input type="hidden" name="editeurID" value="<?php echo $r['NumEditeur']; ?>" />
                            <input type="submit" style="float:right;" id="suppr" value="Suppr" /></button>
                        </form>
                        <form method="POST" action="modifEditeur.php">
                            <!--<button type="submit">Modif</button> -->
                            <input type="hidden" name="editeurID" value="<?php echo $r['NumEditeur']; ?>" />
                            <input type="submit" style="float:right;" id="suppr" value="Modif" /></button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="InfoEditeur.php">
                            <!--<button type="submit">Modif</button> -->
                            <input type="hidden" name="infoID" value="<?php echo $r['NumEditeur']; ?>" /> <!-- met en mémoire pour env en post, le num de l'editeur -->
                            <input type="submit" style="float:right;" id="info" value="info" />Voir Informations</button>
                        </form>
                        <!-- <form method="POST" action="modifEditeur.php"> 
                            
                            <input type="submit" style="float:right;" id="modif" value="Modif"/>Modif</button>
                        </form>-->
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    
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
    <form method="POST" action="ajoutEditeur.php">
    <button type="submit">Ajouter Editeur</button>
</form>
</form>
</middle>
</body>
</html>
