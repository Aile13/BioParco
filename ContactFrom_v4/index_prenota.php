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
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="table_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_file/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_file/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_file/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_file/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="table_file/css/main.css">
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
			// se in sessione è stato settato username, grafico tale informazione nel menù laterale
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
        <span class="contact100-form-title">
            Visualizza o prenota un viaggio!
        </span>		
		<div class="table100 ver6 m-b-110">
			<table data-vertable="ver6" style=" width: 800px; ">
                    <thead>
                        <tr class="row100" >															
                            <td class="column100 column1" data-column="column1" ><a href="trova_viaggio_1.php"><p style="color: white;"> - da CITTA' PARTENZA (obbligatorio)<br> - a CITTA' ARRIVO  (obligatorio) <br> - DATA DI PARTENZA (default "ALL") <br> - ORA DI PARTENZA (default "ALL") </p></a></td>
                            <td class="column100 column1" data-column="column1" data-column="column1" style="background-color: aquamarine; color: blueviolet;"><a href="trova_viaggio_2.php"><p> - da CITTA' PARTENZA (obbligatorio)<br> - a CITTA' ARRIVO  (default ALL) <br> - DATA DI PARTENZA (default "ALL") <br> - ORA DI PARTENZA (default "ALL") </p></a></td>                                
                            <!--data-column="column1" style="background-color: aquamarine; color: blueviolet;" -->
                        </tr>
                    </thead>
                <tbody>
					<tr class="row100">															
                        <td class="column100 column1" data-column="column1" data-column="column1" style="background-color: aquamarine; color: blueviolet;"><a href="trova_viaggio_3.php"><p> - criterio 1 (default "ALL")<br> - DATA DI PARTENZA (obbligatorio)</p></a></td>
                        <td class="column100 column1" data-column="column1"><a href="trova_viaggio_4.php"><p style="color: white;"> - criterio 2 (default "ALL")<br> - ORA DI DESTINAZIONE (obbligatorio)</p></a></td>
					</tr>
													
				</tbody>
			</table>
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
    <!--===============================================================================================-->	
	<script src="table_file/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="table_file/vendor/bootstrap/js/popper.js"></script>
        <script src="table_file/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="table_file/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="table_file/js/main.js"></script>

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
