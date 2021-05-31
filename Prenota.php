<html>
<head>
<title>Finestra di prenotazione</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/jquery-confirm.css" rel='stylesheet' type='text/css' />
	<link href="css/jquery-ui.css" rel='stylesheet' type='text/css' />
<body>

  	<div class="col-sm">
		<form action="" method="POST">
			<div class="mb-3">
				<label class="form-label">Data</label>
				<input type="date" id="D" name="data" class="form-control" class="in">
			</div>
			<br>
			<div class="mb-3">
				<label class="form-label">Orario</label>
				<input type="time" id="O" class="form-control" class="in" name="ora">
			</div>
			<br>
			<div class="mb-3">
				<label class="form-label">Pista</label>
				<select class="form-control" id="C" name="pista">
				<option value=""> - Selezionare Pista - </option>
				<?php include("GetPista.php"); ?>
			</select>
		</div>
			<br><br>
			<div class="d-grid gap-2 col-6 mx-auto">
				<button class="btn btn-primary btn-md" type="button" id="P" name="invia_dati">PRENOTA</button>
			</div>
		</form>	
	</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-confirm.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.js" integrity="sha512-yo/DGaftoLvI3LRwd6sVDlo4zu1AhQg+ej3UruAEzwWuzmNZglbF3luwTif1l9wvHZmLRp8Wyiv8wloA9JsVyA==" crossorigin="anonymous"></script>  
		<script src="esempio.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script type="text/javascript">

			$("#P").click(function() {
				date = $("#D").val();
				hour = $("#O").val();
				pista =$("#C").val();
				// alert("user = " + user);
				$.ajax({
					type:"POST",
					url: "CheckPrenotazione.php",
					async: false,
					data: {data: date, ora: hour, pista: pista},
					success: function(ret) 	{
								// alert("x = " + ret);
								if (ret==-1) { 
									$.alert({
										title: "Attenzione", content:'Data e Orario non disponibile per questo campo',
										type:'red',
										autoClose: 'ok|1500',
										onClose: function() { },
									});
								} else {
									alert("Errore nello script ...");
								}
					error: function(e) { }
				});
			})

			$(document).ready(function() {
				// alert("Jquery on");
			})
		</script>
</body>	
</html>