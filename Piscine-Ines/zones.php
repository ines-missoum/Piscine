<?php
	include'inc/header.php'
?>

	<middle>
		<form>
            <legend>Espaces</legend>
                    
            <p>
                <label for="NbEspace">Nombres d'espaces</label> : <input type="number" min="0" name="Nombres d'espaces" id="NbEspace" />&nbsp;&nbsp;
            </br>
                <label for="NbTables">Nombre total de Tables</label> : <textarea name="NbTables" id="NbTables" rows="1" cols="5">
                </textarea>
            </p>
                    
            <p>
                <label for="PrixStandard">Prix Standard/Place</label> : <input type="number" min="0" step="0.01" name="Prix" id="prix" />
            </p>
              <input type="submit" value="Ajouter Informations" id = "ajouter" />  


        </form>
    	</br>
        <form>
            <legend>Zone</legend>
                    
            <p>
                
                <label for="zone">Nom de la zone</label> : <input type="text" name="PrenomResp" id="NomResponsable" required/>
            </p>
                    
            
              <input type="submit" value="Ajouter Zone" id = "ajouterZone" />  


        </form>

	</middle>
</body>
