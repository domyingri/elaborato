<?php
	require_once ("parametri.php");

	$connessione= mysqli_connect('localhost','root','','kartingcentre');
	if (!$connessione) {
		echo "Errore in connessione ..";
		exit();
	}

	$sql = "SELECT pilota.tipoPilota FROM piste INNER JOIN pilota ON piste.codPilota=pilota.codPilota ORDER BY codPista";
	$ret = mysqli_query($connessione, $sql);
	if (!$ret) {
		echo "Error in query excute .. " . mysqli_error($connessione) . " -- " . $sql;
		exit();
	}

	$retH = "";
	while ($row = mysqli_fetch_array($ret)) {
		$retH .= "<option value='" . $row["codPista"] . "'> Pista: " . $row["tipoPilota"] . "</option>";
	}	
	echo $retH;
?>