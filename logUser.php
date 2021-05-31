<html>
<head>
<title>Finestra di login</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/jquery-confirm.min.css" rel='stylesheet' type='text/css' />
<body>

  	<div class="col-sm">
		<form action="" method="POST">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Username</label>
				<input type="text" id="U1" name="utente" class="form-control" class="in">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" id="P1" class="form-control" class="in" name="pwd">
			</div>
			<br>
			<div class="d-grid gap-2 col-6 mx-auto">
				<button class="btn btn-primary btn-md" type="button" id="B" name="invia_dati">ACCEDI</button>
			</div>
			<br>
			<a href="javascript: LoadReg();"><h5>Non sei ancora registrato? Registrati ora!!</h5></a>
		</form>	
	</div>

		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-confirm.min.js"></script>

		<script type="text/javascript">

			$("#B").click(function() {
				user = $("#U1").val();
				pass = $("#P1").val();
				// alert("user = " + user);
				$.ajax({
					type:"POST",
					url: "CheckUser.php",
					async: false,
					data: {utente: user, pwd: pass},
					success: function(ret) 	{
								// alert("x = " + ret);
								if (ret==-1) { 
									$.alert({
										title: "Attenzione", content:'credenziali errate', 
										type:'red',
										autoClose: 'ok|1500',
										onClose: function() { },
									});
									
								} else if (ret==-2) {
									$.alert({
										title:"Attenzione", content:'Inserire username e password .. ', type:'red', autoClose: 'ok|1500',
										onClose: function() { },
									});
								} else if (ret==-3) {
									alert("Errore nello script ...");
								} else if (ret == 0) {
									window.location.href = "utenti.php";
								} else if (ret == 1) {
									window.location.href = "admin.php";
								}
					},
					error: function(e) { }
				});
			})

			$(document).ready(function() {
				// alert("Jquery on");
			})
		</script>
		<script type="text/javascript">
						jQuery(document).ready(function($) {

							$(".scroll").click(function(event){		
								event.preventDefault();
								$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
							});
						});

						function LoadReg() {
							// alert("Richiama form login");

						    $.dialog({
						        title: '<h4 style="color:brown">Registrazione area riservata</h4>',
						        columnClass: 'medium', type: 'red', icon: 'fa fa-warning',
						        content: function() {
								              var self = this; 
								              self.setContent("");
								              return $.ajax({
								                    url: 'regUser.php', method: 'get',
								              }).done(function(response) {
								                    self.setContentAppend(response);
								              }).fail(function(){
								              }).always(function(){
								              });
						        }         
						    });	
						}
				</script>
</body>	
</html>