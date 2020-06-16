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
        <link rel="stylesheet" href="..\css\card.css">
        <body style=" background-color: #d1d1d1"> 
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--=============================================..=========================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--=============================================..=========================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--=============================================..=========================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--=============================================..=========================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--=============================================..=========================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--=============================================..=========================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--=============================================..=========================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
<!--===============================================================================================-->	
<link rel="icon" type="image/png" href="../../table_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/bootstrap/css/bootstrap.min.css">
<!--=============================================../..=table_file/=======================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--=============================================../..=table_file/=======================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/animate/animate.css">
<!--=============================================../..=table_file/=======================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/select2/select2.min.css">
<!--=============================================../..=table_file/=======================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--=============================================../..=table_file/=======================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../table_file/css/main.css">
<!--=============================================../..========================================-->
<!--===============================================================================================-->
<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<!------------------------------------ Icon Bar (Sidebar - hidden on small screens) ------------------------->
		<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
		<a href="../../index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
			<i class="fa fa-home w3-xxlarge"></i>
			<p>HOME</p>
		</a>
		<?php
			// se in sessione è stato settato username, grafico tale informazione nel menù laterale
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

    <?php
    if( isset($_POST['criterio_select'])){                
        $nome_criterio = $_POST['criterio_select'];                        
        
        if( isset($_POST['criterio1'])){            

            $valore_criterio = $_POST['criterio1'];

            if($nome_criterio == "Seleziona Criterio"){
                $nome_criterio = 0;            
            }else if($nome_criterio == "città partenza"){
                $nome_criterio = 1;
            }else if($nome_criterio == "città destinazione"){
                $nome_criterio = 2;
            }else if($nome_criterio == "numero soste"){
                $nome_criterio = 3;
            }else if($nome_criterio == "tempo percorrenza"){
                $nome_criterio = 4;
            }

            $data_partenza = $_POST['data_partenza']; // c'è il required sul form
        }
    }        
    ?>

<div class="limiter" style="padding-left: 200px;">    
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100 ver6 m-b-110">
            <div style="height: 70px;"><h1 style="color: white; padding-top: 10px;padding-left: 20px;padding-bottom: 20px;" ce>Riepilogo viaggi</h1></div>
              <table data-vertable="ver6">
                <thead>                  
                  <tr class="row100 head">
                    <th class="column100 column1" data-column="column1">ID</th>
                    <th class="column100 column2" data-column="column2">città partenza</th>
                    <th class="column100 column3" data-column="column3">città destinazione</th>
                    <th class="column100 column4" data-column="column4">data partenza</th>
                    <th class="column100 column5" data-column="column5">ora partenza</th>
                    <th class="column100 column6" data-column="column6">tempo stimato</th>
                    <th class="column100 column7" data-column="column7">numero soste</th>
                    <th class="column100 column8" data-column="column8">possibilità bagaglio</th>
                    <th class="column100 column9" data-column="column9">possibilità animali</th>
                  </tr>
                </thead>                
              <tbody> 


    <?php
        require 'TopicData.php'; // per funzionare è necessario fare la require del file php in cui viene fatta la connessione e le query
        
        $topic = new TopicData(); // creo un oggetto $topic che permette di effettuare la connesione al db        
        $response = $topic->getByCriterioAndData($nome_criterio, $valore_criterio, $data_partenza);   
        //all'oggetto $topic chiamo il metopo occorrente, mi viene restituita una risposta (query corrente)                           
            
        foreach($response as $res){          
          echo '<tr class="row100 head">';          
          echo '<td class="column100 column1" data-column="column1">'.'<a href="single_trip.php" style="color: white;">'.$res['id_viaggio'].'</a>'.'</td>';          
          echo '<td class="column100 column2" data-column="column2">'.'<a href="single_trip.php" style="color: white;">'.$res['citta_partenza'].'</a>'.'</td>';
          echo '<td class="column100 column3" data-column="column3">'.'<a href="single_trip.php" style="color: white;">'.$res['citta_destinazione'].'</a>'.'</td>';
          echo '<td class="column100 column4" data-column="column4">'.'<a href="single_trip.php" style="color: white;">'.$res['data_partenza'].'</a>'.'</td>';
          echo '<td class="column100 column5" data-column="column5">'.'<a href="single_trip.php" style="color: white;">'.$res['ora_partenza'].'</a>'.'</td>';
          echo '<td class="column100 column6" data-column="column6">'.'<a href="single_trip.php" style="color: white;">'.$res['tempo_percorrenza_stimato'].'</a>'.'</td>';
          echo '<td class="column100 column7" data-column="column7">'.'<a href="single_trip.php" style="color: white;">'.$res['numero_soste'].'</a>'.'</td>';
          echo '<td class="column100 column8" data-column="column8">'.'<a href="single_trip.php" style="color: white;">'.$res['possibilita_bagaglio'].'</a>'.'</td>';
          echo '<td class="column100 column9" data-column="column9">'.'<a href="single_trip.php" style="color: white;">'.$res['possibilita_animali'].'</a>'.'</td>';          
      }
                
    ?>  																	


            </tbody>
					</table>
				</div>
			</div>
		</div>
    </div>
    

    <div class="relative" style="padding-left: 450px; back" >


    <?php                                                        
           $topic = new TopicData(); // creo un oggetto $topic che permette di effettuare la connesione al db        
           $travelResponse = $topic->getByCriterioAndData($nome_criterio, $valore_criterio, $data_partenza);      

    foreach($travelResponse as $singleTravel){          
      
        $driver = new TopicData();
        $currentDriverId = $singleTravel['id_autista']; // estraggo l'id dell'autista del viaggio corrente 
        $driverResponse = $driver->getDriverInfo($currentDriverId); // prendo i dati dell'autista corrente

        foreach($driverResponse as $thisDriver){
          echo $thisDriver['nome'].' - ';
          echo $thisDriver['cognome'].' - ';
          echo $thisDriver['email'].' - ';
        }       
                
        $q3 = new TopicData();        
        $q3Response = $q3->getDriverTravel($currentDriverId); // prendo i dati dell'autista corrente

        foreach($q3Response as $q3r){
          echo 'numero viaggi:'.$q3r[0].' - ';
        }       
        

        echo $singleTravel['id_viaggio'].' - ';
        echo $singleTravel['citta_partenza'].' - ';
        echo $singleTravel['citta_destinazione'].' - ';
        echo $singleTravel['data_partenza'].' - ';
        echo $singleTravel['ora_partenza'].' - ';
        echo $singleTravel['tempo_percorrenza_stimato'].' - ';
        echo $singleTravel['numero_soste'].' - ';
        echo $singleTravel['possibilita_bagaglio'].' - ';
        echo $singleTravel['possibilita_animali'].' - '; 
        echo $singleTravel['id_autista'].' - ';

        echo '<div class="card purple">';
            echo '<div class="additional">';
                echo '<div class="user-card">';
                    echo'<div class="level center">';
                        echo 'travel code:  '.$singleTravel['id_viaggio'];
                    echo '</div>';
                    echo '<div class="points center">';
                        echo 'SOSTE:  '.$singleTravel['numero_soste'];
                    echo '</div>';
                    echo '<img style="border-radius: 50%;" src="'.$thisDriver['foto_autista'].'" width="110" height="110" class="center">';
                    echo '</div>';
                echo '<div class="more-info">';
                echo'<h3 style="padding-top: 10px; padding-left: 10px; padding-bottom: 10px">'.$singleTravel['citta_partenza'].' - '.$singleTravel['citta_destinazione'].'</h3>';
          echo '<div class="coords">';
          echo '<span>'.'Nome:'.'</span>';
          echo '<span>'.$thisDriver['nome'].'</span>';
          echo '</div>';
          /*echo '<div class="coords">';
          echo ' <span>Cognome:</span>';
          echo ' <span>'.$thisDriver['cognome'].'</span>';
          echo '</div>';*/
          echo '<div class="coords">';
          echo ' <span>lingua:</span>';
          echo ' <span>'.$thisDriver['lingua'].'</span>';
          echo '</div>';
          echo '<div class="coords">';
          echo ' <span>telefono:</span>';
          echo ' <span>'.$thisDriver['numero_di_telefono'].'</span>';
          echo '</div>';
          echo '<div class="stats">';
          echo '<div>';
          echo '<div class="title" style="padding-bottom: 3px">NUMERO<br>VIAGGI</div>';
          echo '<i class="fa fa-exchange"></i>';
          echo '<div class="value">'.$q3r[0].'</div>';
          echo '</div>';          
          echo '<div>';
          echo '<div class="title" style="padding-bottom: 3px">produttore<br>veicolo</div>';
          echo '<i class="fa fa-car"></i>';
          echo '<div class="value">'.$thisDriver['produttore_automobile'].'</div>';
          echo '</div>';
          echo '<div>';
          echo '<div class="title" style="padding-bottom: 3px">SESSO<br>_</div>';
          echo '<i class="fa fa-user"></i>';
          echo '<div class="value">'.$thisDriver['sesso'].'</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '<div class="general">';
          echo '<h1 style="padding-bottom: 10 px;padding-top: 10px">'.$thisDriver['nome'].'</h1>';
          echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a volutpat mauris, at molestie lacus. Nam vestibulum sodales odio ut pulvinar.</p>';
          echo '<span class="more">Mouse over the card for more info</span>';
          echo '</div>';
          echo '</div>';
                   
                 
    }
    
    ?>


	<div id="dropDownSelect1"></div>
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
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--====================================================== =========================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="../js/main.js"></script>
    <!--===============================================================================================-->	
	<script src="../../table_file/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="../../table_file/vendor/bootstrap/js/popper.js"></script>
        <script src="../../table_file/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="../../table_file/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="../../table_file/js/main.js"></script>

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
