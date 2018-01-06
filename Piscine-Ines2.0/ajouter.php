<?php
	include 'inc/header.php'
?>
	<middle>
		
	</middle>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var x1 = document.forms["myForm"]["contact"].value;
    var x2 = document.forms["myForm"]["espaces"].value;
    var x3 = document.forms["myForm"]["tables"].value;
    if (x == "" || x1== "" ||  x2== "" ||  x3== "") {
        alert("Vous n'avez pas complete toutes les champs! ");
        return false;
    }
}

function espace(){
	<h3> Espace</h3>
		<label for="espaces" > Nombre d'espaces: </label>
		</br>
		<input type="text" name="espaces">
		</br>
		<label for="tables" > Tables: </label>
		</br>
		<input type="text" name="tables">
		</br>
		</br>

}
</script>
	<div class= "container-fluid">
	<form name="myForm" onsubmit="return validateForm()" method="post">
		<h3> Editeur </h3>
		<label for="name" >Nom de l'editeur: </label>
		</br>
		<input type="text" name="fname">
		</br>
		<label for="responsable" >Responsable de l'editeur: </label>
		</br>
		<input type="text" name="contact">
		<h3> Espace</h3>
		<label for="espaces" > Nombre d'espaces: </label>
		</br>
		<input type="text" name="espaces">
		</br>
		<label for="tables" > Tables: </label>
		</br>
		<input type="text" name="tables">
		</br>
		</br>

		<input type="submit" value="Submit">
		<input type="button" value="espace" onclick="espace()">
	</form>
</div>


</body>
