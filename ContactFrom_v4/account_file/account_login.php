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
	<link rel="icon" type="image/png" href="../form_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../form_file/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../form_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../form_file/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../form_file/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../form_file/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../form_file/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../form_file/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../form_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="../form_file/css/main.css">
<!--===============================================================================================-->
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../table_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table_file/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table_file/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table_file/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table_file/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../table_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="../table_file/css/main.css">
<!--===============================================================================================-->
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../login_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_file/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_file/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_file/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login_file/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_file/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_file/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../login_file/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../login_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="../login_file/css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<!------------------------------------ Icon Bar (Sidebar - hidden on small screens) ------------------------->
	<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
		<a href="../index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
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
		<a href="../index_prenota.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-eye w3-xxlarge"></i>
			<p>SORVEGLIANZA REMOTA</p>
		</a>
		<a href="../manageDatabase.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-database w3-xxlarge"></i>
			<p>PROGRAMMA CONTROLLI</p>
		</a>
		<a href="../manageDatabase.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-database w3-xxlarge"></i>
			<p>CARTELLE CLINICHE</p>
		</a>
		<a href="../manageDatabase.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-database w3-xxlarge"></i>
			<p>CREA REPORT</p>
		</a>
		<a href="../manageDatabase.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-database w3-xxlarge"></i>
			<p>GESTISCI DEVICE</p>
		</a>
		<a href="../account_file\create_account_autista.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-database w3-xxlarge"></i>
			<p>GESTISCI ANIMALI</p>
		</a>
		</nav>
	<!----------------------------------------------------------------------------------------------------------->

	<!----------------- Navbar on small screens (Hidden on medium and large screens) ---------------------------->
		<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
		<div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
			<a href="../index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
			<a href="account.php" class="w3-bar-item w3-button" style="width:25% !important">ACCOUNT</a>
			<a href="../index_prenota.php" class="w3-bar-item w3-button" style="width:25% !important">PRENOTA</a>
			<a href="../manageDatabase.php" class="w3-bar-item w3-button" style="width:25% !important">MANAGE database</a>
		</div>
		</div>
	<!----------------------------------------------------------------------------------------------------------->

	<!---------------------------------------------- FORM INSERIMENTO ------------------------------------------->
		
	
			
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login_file/images/bg-01.jpg'); padding-left: 230px;">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="../form_file/query/05q_login.php" method="POST">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Inserisci nome utente">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Inserisci password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<!-- premendo ESCI chiamo una pagina php che fa session_unset() ed esce dall'account (se loggato)-->
					<div class="text-right p-t-8 p-b-31">
						<a href="../login_file\php\logout.php">
							ESCI
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login_button">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Oppure iscriviti
						</span>
					</div>	

						<a href="../scegli_crea_account.php" class="txt2">
							Crea utente
						</a>
					</div>
				</form>
			</div>
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
	<script src="../form_filevendor/daterangepicker/moment.min.js"></script>
	<script src="../form_filevendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../form_filevendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../form_filejs/main.js"></script>
    <!--===============================================================================================-->	
	<script src="../table_file/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="../table_file/vendor/bootstrap/js/popper.js"></script>
        <script src="../table_file/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="../table_file/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
		<script src="../table_file/js/main.js"></script>
		<!--===============================================================================================-->
	<script src="../login_file/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="../login_file/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="../login_file/vendor/bootstrap/js/popper.js"></script>
		<script src="../login_file/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="../login_file/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="../login_file/vendor/daterangepicker/moment.min.js"></script>
		<script src="../login_file/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="../login_file/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="../login_file/js/main.js"></script>

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