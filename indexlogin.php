<!DOCTYPE HTML>
<html>
<?php
@session_start();
$User="";
if(isset($_SESSION["UserIn"])) $User=$_SESSION["UserIn"];
?>
<head>
<title> GO KART SQUILLE S.R.L.</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />-->
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!-- grid-slider -->
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/jquery.contentcarousel.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!-- //grid-slider -->
</head>
<body>

	<!-- start header_bottom -->
	  <div class="header-bottom">
		 <div class="container">
			<div class="header-bottom_left">
				<i class="phone"> </i><span>0823/800000</span>
			</div>
			<div class="social">	
			   <ul>	
				  <li class="facebook"><a href="https://www.facebook.com/domenico.ingriselli/"><span> </span></a></li>
				  <li class="twitter"><a href="#"><span> </span></a></li>
				  <li class="google"><a href="#"><span> </span></a></li>
				  <li class="instagram"><a href="#"><span> </span></a></li>							
			   </ul>
		   </div>
		   <div class="clear"></div>
		</div>
	  </div>
	<!-- end header_bottom -->
	<!-- start menu -->
    <div class="menu" id="menu">
	  <div class="container">
		 <div class="logo">
		 	<a href="index.php"><img src="images/logodeluxe.png" alt=""/></a>
		 </div>
		 <div class="h_menu4"><!-- start h_menu4 -->
		   <a class="toggleMenu" href="#">Menu</a>
			 <ul class="nav">
			   <li class="active"><a href="index.html">Home</a></li>
			   <li><a href="about.html">Chi Siamo</a></li>
			   <li><a href="trainers.html">Piste</a></li>
			   <li><a href="contact.html">Contatti</a></li>
			   <li><a href="utenti.php"><?php
					   echo $User;
					 ?></a></li>
			 </ul>
			  <script type="text/javascript" src="js/nav.js"></script>
		  </div><!-- end h_menu4 -->
		 <div class="clear"></div>
	  </div>
	</div>
	<!-- end menu -->
	 <div class="main">
	 	 <div class="container">
			<!-- start content-top -->
			<div class="row content-top">
				 <div class="col-md-5">
				  <img src="images/centrosportivosfondo.jpg" class="img-responsive" alt=""> 
			     </div>
				 <div class="col-md-7 content_left_text">
				   <h3>IL CENTRO SPORTIVO CHE MANCAVA!</h3>
				   <p> Offriamo un vasto terreno coperto da vari campi da gioco, da poterne usufruire privatamente 
				       o partecipare alle nostre attività! Cosa aspetti? Comincia subito!.</p>
				 </div>
            </div>
		 </div>
		<!-- end content-top -->
		<div class="container">
		    <div class="row content-middle">
		      <!-- start content-middle -->
	 	    	<div class="col-md-4">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Neofiti</span></li>
	 	    			<li class="room">Pista n°1</li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/palestra2.jpg" class="img-responsive" alt=""/>
	                  </div>
			     </div>
				 <div class="col-md-4">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Neofiti Veloci</span></li>
	 	    			<li class="room">Pista n°2</li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/campocalcio2.jpg" class="img-responsive"  alt=""/>
	                  </div>
			     </div>
				 <div class="col-md-4">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Amatori</span></li>
	 	    			<li class="room">Pista n°3</li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/campovolley.jpeg" class="img-responsive" alt=""/>
	                  </div>
	                  <br>
	                  <br>
	                  <br>
			     </div>

			     <div class="col-md-4">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Amatori veloci</span></li>
	 	    			<li class="room">Pista n°3</li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/campotennis.jpg" class="img-responsive" alt=""/>
	                  </div>
			     </div>
			     <div class="col-md-4">
	 	    		<ul class="spinning">
	 	    			<li class="live">live <span class="m_1">Esperti</span></li>
	 	    			<li class="room">Pista n°4</li>
	 	    			<div class="clear"></div>	
	 	    		</ul>
					 <div class="view view-fifth">
				  	   <img src="images/campobasket.jpg" class="img-responsive" alt=""/>
	                  </div>
			    	</div>
				<div class="clear"></div>
		   </div>
		  <!-- end content-middle -->
		    <div class="row content_middle_bottom">
			  <div class="col-md-4">
		        <h3 class="m_2">I Titolari</h3>
		         <div class="course_demo">
		          <ul id="flexiselDemo3">	
					<li><img src="images/proprietario.jpg" /><div class="desc">
						<h3>Ingriselli Domenico<br><span class="m_text">Proprietario</span></h3>
						<p>Vasta esperienza<br> nel campo dello sport.</p>
						<div class="coursel_list">
							<i class="heart1"> </i>
							<i class="like"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>
					<li><img src="images/socio.jpg" /><div class="desc">
						<h3>Vardaro Antonio<br><span class="m_text">Socio</span></h3>
						<p> Grande esperienza<br> nel mondo del Calcio.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>	
					<li><img src="images/mainsponsor.png" /><div class="desc">
						<h3>Pirelli<br><span class="m_text">MAIN SPONSOR</span></h3>
						<p>Azienda di pneumatici <br> leader nel settore.</p>
						<div class="coursel_list">
							<i class="heart2"> </i>
							<i class="like1"> </i>
						</div>
						<div class="coursel_list1">
							<i class="twt"> </i>
							<i class="fb"> </i>
						</div>
						<div class="clear"></div>
					</div></li>							    	  	       	   	    	
				</ul>
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo3").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 2
			    		}
			    	}
			    });
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	  </div>
     </div>
     <div class="col-md-4">
     	 <h3 class="m_2">Prossimi Eventi</h3>
     	 <div class="events">
     	 	<div class="event-top">
	     	 	<ul class="event1">
	     	 		<h4>30 Gennaio 2025</h4>
	     	 		<img src="images/tennis.jpg" alt=""/>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.10.00-h.13.00 </span>
	     	 		<h4>INAUGURAZIONE PISTA 6 </h4>
	     	 		<p>Vi aspettiamo sabato 30 gennaio 2025. Non mancate! </p>
	     	 		<div class="btn2">
					   <a href="#">Attiva promemoria </a>
					</div>
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 	<div class="event-bottom">
	     	 	<ul class="event1">
	     	 		<h4> 5 Maggio 2025</h4>
	     	 		<img src="images/pic.jpg" alt=""/>
	     	 	</ul>
	     	 	<ul class="event1_text">
	     	 		<span class="m_5">h.14.00-h.18.00</span>
	     	 		<h4>INAUGURAZIONE PADDOCK</h4>
	     	 		<p>Vi aspettiamo domenica 5 maggio 2025. Non mancate!</p>
	     	 		<div class="btn2">
					   <a href="#">Attiva promemoria</a>
					</div>
	     	 	</ul>
     	 		<div class="clear"></div>
     	 	</div>
     	 </div>
     </div>
          <div class="col-md-4">
     	 <h3 class="m_2">Notizie</h3>
     	 <div class="blog_events">
     	 	<ul class="tab-left1">
				<span class="tab1-img"><img src="images/pallone.jpg" alt=""></span>
				<div class="tab-text1">
				 <p><a href="#">Ristrutturazione pista conclusa. La pista è pronta per essere riutilizzata</a></p>
				 <span class="m_date">20 Aprile 2025</span>
				</div>
				<div class="clear"></div>
			</ul>
			<ul class="tab-left1">
				<span class="tab1-img"><img src="images/pic6.jpg" alt=""></span>
				<div class="tab-text1">
				 <p><a href="#">I box sono stati muniti di tutte le attrezzature, sono pronti ed aspetta solo voi</a></p>
				 <span class="m_date">10 Marzo 2025</span>
				</div>
				<div class="clear"></div>
			</ul>
			<ul class="tab-last1">
				<span class="tab1-img"><img src="images/volley.jpg" alt=""></span>
				<div class="tab-text1">
				 <p><a href="#">Implementazione parcheggi conclusa. Parcheggio Gratis ai Clienti.</a></p>
				 <span class="m_date">01 Maggio 2025</span>
				</div>
				<div class="clear"></div>
			</ul>
     	 </div>
     </div>
     <div class="clear"></div>
     </div>
      <div class="row about">
		 <div class="col-md-8">
		     	 <h3 class="m_2">Galleria Foto</h3>
		     	 <div id="ca-container" class="ca-container">
				    <div class="ca-wrapper">
				         <div class="ca-item ca-item-1">
						   <div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon1"> </div>
							</div>
						  </div>
						<div class="ca-item ca-item-2">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon2"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-3">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon3"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-4">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon4"> </div>
						     </div>
						</div>
						<div class="ca-item ca-item-5">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon5"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-6">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon6"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-7">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon7"> </div>
							</div>
						</div>
						<div class="ca-item ca-item-8">
							<div class="ca-item-main">
								<div class="ca-icon"> </div>
								<div class="ca-icon"> </div>
							</div>
						</div>
			    </div>
			 </div>
				    <script type="text/javascript">
						$('#ca-container').contentcarousel();
					</script>
		   </div>
		   <div class="col-md-4">
		   	 <h3 class="m_2">Partner Commerciali</h3>
			  <ul class="partner">
			  	<li><img src="images/p6.png" alt=""/></li>
			  	<li><img src="images/p5.png" alt=""/></li>
			  	<li><img src="images/p4.png" alt=""/></li>
			  	<li><img src="images/p3.png" alt=""/></li>
			  	<li><img src="images/p2.png" alt=""/></li>
			  	<li><img src="images/p1.png" alt=""/></li>
			  	 <div class="clear"></div>
			  </ul>
		   </div>
	       <div class="clear"></div>
	      </div>
	     </div>
		</div>
	    <div class="map">
	    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3004.0250565421975!2d14.432439763541723!3d41.155804585242734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x133a507afca5d9a5%3A0x4c8d4e6209ac5464!2sVia%20IV%20Novembre%2C%2037%2C%2081010%20Castel%20Campagnano%20CE!5e0!3m2!1sit!2sit!4v1622051709748!5m2!1sit!2sit" width="130%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			<div class="opening_hours">
			 <ul class="times">
			 	<h3>  <span class="opening"> Orari di apertura</span></h3>
			 	<li><i class="calender"> </i><span class="week">Lunedi</span><div class="hours">h.10:30-h.22:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Martedi</span><div class="hours">h.10:30-h.22:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Mercoledi</span><div class="hours">h.10:30-h.22:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Giovedi</span><div class="hours">h.10:30-h.22:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Venerdi</span><div class="hours">h.10:30-h.22:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Sabato</span><div class="hours">h.10:30-h.22:00</div>  <div class="clear"></div></li>
			 	<li><i class="calender"> </i><span class="week">Domenica</span><div class="hours">CHIUSURA SETTIMANALE</div>  <div class="clear"></div></li>
			 </ul>
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
					<p class="address">Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="m_10">info.deluxesportingcentre.com</span></p>
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
			   </ul>
		    </div>
		   <div class="clear"></div>
		  </div>
	     </div>
</body>
</html>