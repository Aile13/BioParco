<?php	
	session_start();
	$username = $_SESSION['username'];
	$password = $_SESSION['password'];
	$user_type = $_SESSION['user_type'];	
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>W3.CSS Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        <body class="w3-black"> 
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--=====================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--=====================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--=====================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--=====================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--=====================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--=====================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../form_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../../table_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/animate/animate.css">
<!--=============================================../../==================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/select2/select2.min.css">
<!--=============================================../../==================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--=============================================../../==================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../table_file/css/main.css">
<!--===============================================================================================-->
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../../login_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../login_file/vendor/bootstrap/css/bootstrap.min.css">
<!--=============================================../../==================================================-->
	<link rel="stylesheet" type="text/css" href="../../login_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--=============================================../../==================================================-->
	<link rel="stylesheet" type="text/css" href="../../login_file/fonts/iconic/css/material-design-iconic-font.min.css">
<!--=============================================../../==================================================-->
	<link rel="stylesheet" type="text/css" href="../../login_file/vendor/animate/animate.css">
<!--=============================================../../==================================================-->	
	<link rel="stylesheet" type="text/css" href="../../login_file/vendor/css-hamburgers/hamburgers.min.css">
<!--=============================================../../==================================================-->
	<link rel="stylesheet" type="text/css" href="../../login_file/vendor/animsition/css/animsition.min.css">
<!--=============================================../../==================================================-->
	<link rel="stylesheet" type="text/css" href="../../login_file/vendor/select2/select2.min.css">
<!--=============================================../../==================================================-->	
	<link rel="stylesheet" type="text/css" href="../../login_file/vendor/daterangepicker/daterangepicker.css">
<!--=============================================../../==================================================-->
	<link rel="stylesheet" type="text/css" href="../../login_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../login_file/css/main.css">
<!--===============================================================================================-->
<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../../login_file/verify_file/favicon.png" type="image/png">
        <title>MeetMe Personal</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../login_file/verify_file/css/bootstrap.css">
        <link rel="stylesheet" href="../../login_file/verify_file/vendors/linericon/style.css">
        <link rel="stylesheet" href="../../login_file/verify_file/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../login_file/verify_file/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../../login_file/verify_file/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../../login_file/verify_file/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../../login_file/verify_file/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="../../login_file/verify_file/vendors/popup/magnific-popup.css">
        <link rel="stylesheet" href="../../login_file/verify_file/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="../../login_file/verify_file/css/style.css">
        <link rel="stylesheet" href="../../login_file/verify_file/css/responsive.css">
</head>
<body>


	<!------------------------------------ Icon Bar (Sidebar - hidden on small screens) ------------------------->
		<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
		<a href="../../index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-home w3-xxlarge"></i>
			<p>HOME</p>
		</a>
		<?php
			
			if (isset($_SESSION["username"]))
			{
				$username = $_SESSION['username'];
				
				echo '<a href="../../account.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">';
				echo '<i class="fa fa-user w3-xxlarge"></i>';
				echo '<p>USER: '.$username.'</p>';
				echo '</a>';
			}else{
				echo '<a href="../../account.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">';
				echo '<i class="fa fa-user w3-xxlarge"></i>';
				echo '<p>ACCOUNT</p>';
				echo '</a>';
			}
		?>		
		<a href="../../index_prenota.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-eye w3-xxlarge"></i>
			<p>PRENOTA</p>
		</a>
		<a href="../../manageDatabase.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-database w3-xxlarge"></i>
			<p>MANAGE database</p>
		</a>
		</nav>
	<!----------------------------------------------------------------------------------------------------------->

	<!----------------- Navbar on small screens (Hidden on medium and large screens) ---------------------------->
		<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
		<div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
			<a href="../../index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
			<a href="../../account.php" class="w3-bar-item w3-button" style="width:25% !important">ACCOUNT</a>
			<a href="../../index_prenota.php" class="w3-bar-item w3-button" style="width:25% !important">PRENOTA</a>
			<a href="../../manageDatabase.php" class="w3-bar-item w3-button" style="width:25% !important">MANAGE database</a>
		</div>
		</div>
	<!----------------------------------------------------------------------------------------------------------->

	<!---------------------------------------------- FORM INSERIMENTO ------------------------------------------->
		
	
													
		

	<div class="limiter">				
		<div class="container-login100" style="background-image: url('../../login_file/images/bg-01.jpg');">
			<section class="home_banner_area">
                <div class="container box_1620">
					<span class="contact100-form-title">
						Utente verificato!						
					</span>	
					<?php
							require 'TopicData.php';
							
							if( $_SESSION['user_type'] == "passeggero"){
								$user = new TopicData();								
								$userResponse = $user->getInfoPasseggeroByUsername($username); // prendo i dati dell'autista corrente

								foreach($userResponse as $userInfo){
								$uNome = $userInfo['nome'];
								$uCognome = $userInfo['cognome'];
								$uSesso = $userInfo['sesso'];
								$uEmail = $userInfo['email'];
								$uData = $userInfo['data_di_nascita'];
								$uLingua = $userInfo['lingua'];
								$uPaese = $userInfo['paese_di_origine'];
								$uTelefono = $userInfo['numero_di_telefono'];
								$uDescrizione = $userInfo['descrizione'];
								$uFoto = $userInfo['foto_passeggero'];

								echo'<div class="banner_inner d-flex align-items-center">';
								echo'<div class="banner_content">';
								echo'<div class="media">';
								echo'<div class="d-flex">';
								echo' <img width="310" height="310" src="'.$uFoto.'" alt="">';
								echo' </div>';
								echo'<div class="media-body">';
								echo' <div class="personal_text">';
								echo'    <h5>Dati personali '.'<h6>('.$user_type.')</h6>'.'</h5>';
								echo'      <h3>'.$uNome.' '.$uCognome.'</h3>';
								echo'      <h4>'.$uEmail.'</h4>';
								echo'       <p>'.$uDescrizione.'</p>';
								echo'      <ul class="list basic_info">';
								echo'       <li><a href="#"><i class="lnr lnr-calendar-full"></i>'.$uData.'</a></li>';
								echo'        <li><a href="#"><i class="lnr lnr-phone-handset"></i>'.$uTelefono.'</a></li>';
								echo'        <li><a href="#"><i class="lnr lnr-envelope"></i>'.$uEmail.'</a></li>';
								echo'         <li><a href="#"><i class="lnr lnr-home"></i>'.$uPaese.'</a></li>';
								echo'      </ul>';
								echo'     <ul class="list personal_social">';
								echo'         <li><a href="#"><i class="fa fa-facebook"></i></a></li>';
								echo'           <li><a href="#"><i class="fa fa-twitter"></i></a></li>';
								echo'             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>';
								echo'         </ul>';
								echo'     </div>';
								echo'  </div>';
								echo' </div>';
								echo'</div>';
								echo'</div>';

        						}      
							}else if($_SESSION['user_type'] == "autista"){
								$user = new TopicData();								
								$userResponse = $user->getInfoAutistaByUsername($username); // prendo i dati dell'autista corrente

								foreach($userResponse as $userInfo){
								$uNome = $userInfo['nome'];
								$uCognome = $userInfo['cognome'];
								$uSesso = $userInfo['sesso'];
								$uEmail = $userInfo['email'];
								$uData = $userInfo['data_di_nascita'];
								$uLingua = $userInfo['lingua'];
								$uPatente = $userInfo['numero_patente'];
								$uProduttore = $userInfo['produttore_automobile'];
								$uModello = $userInfo['modello_automobile'];
								$uTelefono = $userInfo['numero_di_telefono'];
								$uDescrizione = $userInfo['descrizione'];
								$uFoto = $userInfo['foto_autista'];
								}
							

								echo'<div class="banner_inner d-flex align-items-center">';
								echo'<div class="banner_content">';
								echo'<div class="media">';
								echo'<div class="d-flex">';
								echo' <img width="310" height="310" src="'.$uFoto.'" alt="">';
								echo' </div>';
								echo'<div class="media-body">';
								echo' <div class="personal_text">';
								echo'    <h5>Dati personali '.'<h6>('.$user_type.')</h6>'.'</h5>';
								echo'      <h3>'.$uNome.' '.$uCognome.'</h3>';
								echo'      <h4>'.$uEmail.'</h4>';
								echo'       <p>'.$uDescrizione.'</p>';
								echo'      <ul class="list basic_info">';
								echo'       <li><a href="#"><i class="lnr lnr-calendar-full"></i>'.$uData.'</a></li>';
								echo'        <li><a href="#"><i class="lnr lnr-phone-handset"></i>'.$uTelefono.'</a></li>';
								echo'        <li><a href="#"><i class="lnr lnr-envelope"></i>'.$uEmail.'</a></li>';
								echo'         <li><a href="#"><i class="fa fa-id-card"></i>'.$uPatente.'</a></li>';
								echo'         <li><a href="#"><i class="fa fa-car"></i>'.$uProduttore.'  '.$uModello.'</a></li>';
								echo'      </ul>';
								echo'     <ul class="list personal_social">';
								echo'         <li><a href="#"><i class="fa fa-facebook"></i></a></li>';
								echo'           <li><a href="#"><i class="fa fa-twitter"></i></a></li>';
								echo'             <li><a href="#"><i class="fa fa-linkedin"></i></a></li>';
								echo'         </ul>';
								echo'     </div>';
								echo'  </div>';
								echo' </div>';
								echo'</div>';
								echo'</div>';
							}
				 ?>
             </div>
         </section>
		</div>
	</div>
		
	
	
	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="../form_filevendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../form_filevendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../form_filevendor/bootstrap/js/popper.js"></script>
	<script src="../form_filevendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../form_filevendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="../../form_file/vendor/daterangepicker/moment.min.js"></script>
	<script src="../../form_file/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../form_file/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../../form_file/js/main.js"></script>
    <!--===============================================================================================-->	
	<script src="../../table_file/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="../../table_file/vendor/bootstrap/js/popper.js"></script>
        <script src="../../table_file/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="../../table_file/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
		<script src="../../table_file/js/main.js"></script>
		<!--===============================================================================================-->
	<script src="../../login_file/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="../../login_file/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="../../login_file/vendor/bootstrap/js/popper.js"></script>
		<script src="../../login_file/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="../../login_file/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="../../login_file/vendor/daterangepicker/moment.min.js"></script>
		<script src="../../login_file/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="../../login_file/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="../../login_file/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

<!--


	https://colorlib.com/wp/template/login-form-v4/

-->