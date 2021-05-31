<!DOCTYPE HTML>
<html>
<head>
	<title>DE LUXE SPORTING CENTRE S.R.L</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery.min.js"></script>
</head>
<body>
<div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				<i class="phone"> </i><span>+39 0823/800000</span>
			</div>
			<div class="social">	
			   <ul>	
				  <li class="facebook"><a href="https://www.facebook.com/luigi.delucia.779"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>							
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
    </div>
    <!-- start menu -->
    <div class="menu">
	  <div class="container">
		 <div class="logo">
		 	<a href="index.php"><img src="images/logodeluxe.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		     <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li><a href="index.php">Home</a></li>
			   <li><a href="about.html">Chi siamo</a></li>
			   <li><a href="trainers.html">Campi da gioco</a></li>
			   <li><a href="contact.html">Contatti</a></li>
			   <li class="active"><a href="login.php">Area Personale</a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div>
		  <!-- end h_menu4 -->
		  <br>
				<div class="container">
					<div class="row">
						<div class="col-sm" >
						</div>
						<div class="col-sm">
							<div class="row">
								<div class="col-sm-1">
								</div>
								<div class="row about-top">
								<div class="col-md-5">
				 				<img src="images/registrazione.png" class="img-responsive" alt=""/> 
		     					</div>
								<div class="col-sm-1">
								</div>
							</div>
						</div>
						<div class="col-sm">
						</div>
					</div>
					<div class="row">
						<div class="col-sm" >

						</div>
						<div class="col-sm">
				<?php  
				if (!(isset($_POST["invia_dati"]))) {

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
							<input type="Email" class="form-control" class="in" name="Email" >
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Password</label>
							<input type="password" id="P" class="form-control" class="in" name="pwd">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Conferma Password</label>
							<input type="password" class="form-control" name="pws2">
						</div>  
						<br>
						<div class="d-grid gap-2 col-6 mx-auto">
							<button class="btn btn-primary" type="submit" name="invia_dati">Registrati</button>
						</div>
						<br>
						<a href="login.php">Sei gia' registrato? Accedi.!</a>
					</form>
					<?php 

					include_once ("parametri.php");
				}else{
					$cogn= $_POST["cognome"];
					$nom= $_POST["nome"];
					$user= $_POST["utente"];
					$email= $_POST["email_i"];
					$password= $_POST["pwd"];
					$password2= $_POST["pws2"];


					if ($cogn==""|| $nom==""|| $user==""|| $email==""|| $password=="") 
						{
							echo"campi vuoti";
						}else if ($password != $password2) 
							{
								echo "le password devono coincidere";
								# code...
							}
					{
						$connessione= mysqli_connect('localhost','root','','kartingcentre');

						$query = "INSERT INTO utenti (cognome, nome, username, email, password)
						VALUES ('$cogn', '$nom', '$user', '$email','$password')";
						$result = mysqli_query($connessione,$query) or die('Errore...');

						header("location: login.php");

					}
				}

				?>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		   <div class="container">
		 	 <div class="row section group">
				<div class="col-md-4">
				   <h4 class="m_7">Newsletter</h4>
				   <p class="m_8">Iscriviti alla nostra Newsletter e racconta ciò che pensi!.</p>
				      <form class="subscribe">
			             <input type="text" value="Insert Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Insert Email';}">
					  </form>
			          <div class="subscribe1">
			            <a href="#">Invia E-mail<i class="but_arrow"> </i></a>
			          </div>
				</div>
				<div class="col-md-4">
					<div class="f-logo">
						<img src="images/logodeluxe1.png" alt=""/>
					</div>
					<p class="m_9">Offriamo un vasto terreno coperto da vari campi da gioco, da poterne usufruire privatamente o partecipare alle nostre attività! Cosa aspetti? Comincia subito!</p>
					<p class="address">Telefono : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">+39 0823/800000</span></p>
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">info.kartingcentre.com</span></p>
				</div>
				<div class="col-md-4">
					<ul class="list">
						<h4 class="m_7">Menu</h4>
						<li><a href="about.html">Chi Siamo</a></li>
						<li><a href="trainers.html">Campi da gioco</a></li>
						<li><a href="login.php">Area Personale</a></li>
						<li><a href="contact.html">Contatti</a></li>
					</ul>
					<ul class="list1">
						<h4 class="m_7">Community</h4>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Forum</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Newsletter</a></li>
					</ul>
				</div>
				<div class="clear"></div>
	  		  </div>
		 	</div>
		 </div>
		 <div class="copyright">
		  <div class="container">
		    <div class="copy">
		        <p>© 2021 Template by <a href="https://www.facebook.com/luigi.delucia.779" target="_blank"> DELUXE DESIGN</a></p>
		    </div>
		    <div class="social">	
			   <ul>	
				  <li class="facebook"><a href="https://www.facebook.com/luigi.delucia.779"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>	
				  <li></li>
				  <li></li>
				  <li></li>						
			   </ul>
		    </div>
		   <div class="clear"></div>
		  </div>
	     </div>
</body>
</html>