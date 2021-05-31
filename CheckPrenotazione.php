<?php
	@session_start();
     $User=$_SESSION["UserIn"];
      echo $User;

   	$data = $_POST["date"];
	$ora  = $_POST["time"];
	$pista= $_POST["pista"];

	if ($data=="" || $ora=="" || $campo=="") {
		echo -2;
		exit();
	} 

	$connessione= mysqli_connect('localhost','root','','kartingcentre');

	$query = "SELECT COUNT(*) AS Elenco FROM prenotazioni WHERE DataPre='".$data ."' AND OraPre=".$ora;
	$result = mysqli_query($connessione,$query) or die(-1);

	if($ret){
	    $row=mysqli_fetch_array($ret);
	    $conta=$row["Elenco"];
	    }
    
$inserimento="INSERT INTO prenotazioni
    			(CodPrenotazione,idUtente,codPista,DataPre, OraPre)
       			VALUES
           		 ('','$User','$pista','$data','$ora')";



$result = mysqli_query($connessione, $inserimento);
		if($result){
				echo("<br>Prenotazione avvenuta correttamente <br>");
				} else {
					alert("Prenotazione non eseguita ...");
				    echo("<br>La data inserita è...");
				    print_r($data);
				    echo("<br> L'ora inserita è...");
				    print_r($ora);
					}
?>