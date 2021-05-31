<?php
	@session_start();
	$nome     = $_POST["utente"];
	$password = $_POST["pwd"];

	if ($nome=="" || $password=="") {
		echo -2;
		exit();
	} 

	$connessione= mysqli_connect('localhost','root','','kartingcentre');

	$query = "SELECT * FROM utenti ORDER BY username";
	$result = mysqli_query($connessione,$query) or die("-3");

	$foundU = false;
	while ($row = mysqli_fetch_array($result)) {
		if ($nome == $row["username"] && $password == $row["password"]) {
			$foundU = true;
			$_SESSION["UserIn"] = $nome;
			break;
		}
	}

	if (!$foundU) {
		echo -1;
		exit();
	}


	$_SESSION["liv"] = $row["Livello"];
	$_SESSION["UserIn"] = $nome;		
	if ($row["Livello"] == 1) echo 0;
	else echo 1;
	exit();

?>