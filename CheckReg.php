<?php 
	include_once ("parametri.php");
    
	$cogn= $_POST["cognome"];
	$nom= $_POST["nome"];
	$user= $_POST["utente"];
	$email= $_POST["email"];
	$password= $_POST["pwd"];
	$password2= $_POST["pws2"];

	$connessione= mysqli_connect('localhost','root','','kartingcentre');
	$queryE = "SELECT username FROM utenti ORDER BY username";
		$resultE = mysqli_query($connessione,$queryE) or die('Errore...');

		$foundE = false;
		while ($row = mysqli_fetch_array($resultE)) {
			if ($user == $row["username"]) {
			$foundE = true;
			break;
			}
		}

		if ($foundE) {
			echo -3;
			exit();
		}

		else if ($cogn==""|| $nom==""|| $user==""|| $email==""|| $password=="") 
		{
			echo -1;
			exit();
		} 
			else if ($password != $password2)
			{
			 	echo -2;
				exit();
			}
	
	$query = "INSERT INTO utenti (Cognome, Nome, username, email, password)
	VALUES ('$cogn', '$nom', '$user', '$email', '$password')";

	$result = mysqli_query($connessione,$query) or die ("...");
	if (!$result) {
		echo "Query error: " . mysqli_error($connessione);
		exit();
	}
?>