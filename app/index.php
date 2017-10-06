<?php
 function validate(){
	 echo "Utilisateur est enregistré"
 }
?>

<html>
	<head>
		<title>Mon application PHP 2</title>
	</head>
	<body>
		<form method="POST">
			Nom : <br>
			<input type="text"/><br>
			Prenom : <br>
			<input type="mdp"/><br>
			<button onClick="validate">Valider</button>
		</form>
	</body>
</html>