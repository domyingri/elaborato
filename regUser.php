<html>

<head>
<title>Finestra di registrazione</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/jquery-confirm.min.css" rel='stylesheet' type='text/css' />
<body>
  	<div class="col-sm">
  		<?php  
			if (!(isset($_POST["invia_dati"])))
		?>
  				<form action="" method="POST">
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Cognome</label>
							<input type="text" id="C" name="cognome" class="form-control" class="in">
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Nome</label>
							<input type="text" id="N" name="nome" class="form-control" class="in">
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Username</label>
							<input type="text" id="U" name="utente" class="form-control" class="in">
						</div>
						<div class="mb-3">
							<label for="exampleInputEmail1" class="form-label">Indirizzo E-mail</label>
							<input type="text" class="form-control" id="E" class="in" name="email" >
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Password</label>
							<input type="password" id="P" class="form-control" class="in" name="pwd">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Conferma Password</label>
							<input type="password" id="P2" class="form-control" name="pws2">
						</div>  
						<br>
						<div class="d-grid gap-2 col-6 mx-auto">
							<button class="btn btn-primary" id="invia_dati" type="button" name="invia_dati">Registrati</button>
						</div>
					</form>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-confirm.min.js"></script>

		<script type="text/javascript">

			$("#invia_dati").click(function() {
				//alert("OK");
				cogn = $("#C").val();
				nome = $("#N").val();
				user = $("#U").val();
				mail = $("#E").val();
				pass = $("#P").val();
				pass2= $("#P2").val();
				// alert("user = " + user);
				$.ajax({
					type:"POST",
					url: "CheckReg.php",
					async: false,
					data:{cognome: cogn, nome: nome, utente: user, email: mail, pwd: pass, pws2: pass2},
					success: function(ret) 	{
						//alert("x = " + ret);
						if (ret==-1) { 
							$.alert({
								title: "Attenzione", content:'Inserimento dati non riuscito', type:'red',
								//autoClose: 'ok|1500',
								onClose: function() {  },
							});
						} else if (ret==-2) {
							$.alert({
								title: "Attenzione", content:'Le password non coincidono', type:'red',
								//autoClose: 'ok|1500',
								onClose: function() {  },
								});	
						} else if (ret==-3) {
							$.alert({
								title: "Attenzione", content:'Nome utente già utilizzato', type:'red',
								//autoClose: 'ok|1500',
								onClose: function() {  },
								});	
						} else if (ret==0) {
							$.alert({
								title: "", content:'Registrazione effettuata', type:'red',
								autoClose: 'ok|1500',
								onClose: function() {  },
							});						
						}
					},
					error: function(e) { }
				});
			})

			$(document).ready(function() {
				// alert("Jquery on");
			})
		</script>
</body>	
</html>