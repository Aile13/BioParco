<?php
	session_start();
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
	<link rel="icon" type="image/png" href="form_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_file/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_file/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_file/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_file/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_file/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_file/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="form_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="form_file/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<!------------------------------------ Icon Bar (Sidebar - hidden on small screens) ------------------------->
        <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
		<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-home w3-xxlarge"></i>
			<p>HOME</p>
		</a>
		<?php
			
			if (isset($_SESSION["username"]))
			{
				$username = $_SESSION['username'];
				
				echo '<a href="account.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">';
				echo '<i class="fa fa-user w3-xxlarge"></i>';
				echo '<p>USER: '.$username.'</p>';
				echo '</a>';
			}else{
				echo '<a href="account.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">';
				echo '<i class="fa fa-user w3-xxlarge"></i>';
				echo '<p>ACCOUNT</p>';
				echo '</a>';
			}
		?>		
		<a href="index_prenota.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-eye w3-xxlarge"></i>
			<p>PRENOTA</p>
		</a>
		<a href="manageDatabase.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-database w3-xxlarge"></i>
			<p>MANAGE database</p>
		</a>
		</nav>
	<!----------------------------------------------------------------------------------------------------------->

	<!----------------- Navbar on small screens (Hidden on medium and large screens) ---------------------------->
        <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
		<div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
			<a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
			<a href="account.php" class="w3-bar-item w3-button" style="width:25% !important">ACCOUNT</a>
			<a href="index_prenota.php" class="w3-bar-item w3-button" style="width:25% !important">PRENOTA</a>
			<a href="manageDatabase.php" class="w3-bar-item w3-button" style="width:25% !important">MANAGE database</a>
		</div>
		</div>
	<!----------------------------------------------------------------------------------------------------------->

	<!---------------------------------------------- FORM INSERIMENTO ------------------------------------------->

	<div class="container-contact100" style="padding-left: 230px;">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="form_file/query/02q_cittaOb_cittaDe.php" method="POST">
				<span class="contact100-form-title">
					Carpooling!
				</span>

				<!-- input città di partenza da ricercare-->
				<div class="wrap-input100 validate-input">
					<span class="label-input100">prima città</span>
					<input class="input100" type="text" name="citta_partenza" placeholder="città di partenza (OBLIGATORIO)">
					<span class="focus-input100"></span>
				</div>

				<!-- input città di arrivo da ricercare-->
				<div class="wrap-input100 validate-input">
					<span class="label-input100">seconda città</span>
					<input class="input100" type="text" name="citta_destinazione" placeholder="città da raggiungere (non OBBLIGATORIO)">
					<span class="focus-input100"></span>
				</div>	
				
				<!-- input date di partenza da ricercare-->
				<div class="wrap-input100 validate-input">
					<span class="label-input100">data partenza</span>
					<input class="input100" type="date" name="data_partenza" placeholder="inserisci data partenza">
					<span class="label-input100">ora partenza</span>
					<input class="input100" type="time" name="ora_partenza" placeholder="inserisci data arrivo">
					<span class="focus-input100"></span>
				</div>

				
				
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="cit_part_cit_dest">
							<span>
								Cerca
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="form_filevendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="form_filevendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="form_filevendor/bootstrap/js/popper.js"></script>
	<script src="form_filevendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="form_filevendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="form_filevendor/daterangepicker/moment.min.js"></script>
	<script src="form_filevendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="form_filevendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="form_filejs/main.js"></script>

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
