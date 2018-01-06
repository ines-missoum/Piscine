<html>
<?php
	include'inc/header.php';


	$nom = $_POST['nom'];
	$pass = $_POST['pass'];
	echo $nom;
	echo ' ';
	echo $pass;
	$utilisateur1= "alexandra";
	$pass1 = "alex";
	if ($nom !== $utilisateur1 and $pass !== $pass1){
		//<script type="text/javascript">location.href = 'accueil.php';</script>
		//myFunction();
	}

?>
<script type="text/javascript">

function myFunction() {
    var message, x;
    message = document.getElementById("error");
    message.innerHTML = "";
    x = document.getElementById("nom").value;
    y = document.getElementById("pass").value;
    try { 
        if(x == "")  throw "empty";
        if(x !=="Ali") throw "n'exite pas";
        x = String(x);
        if(y == "")  throw "empty";
        if(y !=="pass") throw "n'exite pas";
        if(x !=="Ali" && y !=="pass") throw document.getElementByHref("Editeurs.php").value = "acceuil.html" ;
        location.href = 'accueil.php';
        
    }
    catch(err) {
        error.innerHTML = "Nom or password " + err;
    }
    if(x !=="Ali" && y !=="pass") throw myFunction() ;

}
function myFunction3() {
	$nom = $_POST['nom'];
	$pass = $_POST['pass'];
	
}
</script>
</html>