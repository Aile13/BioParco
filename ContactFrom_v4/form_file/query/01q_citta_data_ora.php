<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../table_file/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../table_file/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../table_file/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="../../form_file/css/card.css">
<!--===============================================================================================-->
</head>
<body>
    
    

    <?php

    echo "nome file: 01q_citta_data_ora.php"."<br>";

    $citta_partenza;
    $citta_destinazione;
    $data_partenza;    
    $ora_partenza;
        
    if(empty($_POST['citta_partenza'])){
        echo "citta partenza vuota.. reinserire";
        die;
    }else{          
            printOnly();          
    }



    function printOnly(){
      global $citta_partenza, $citta_destinazione, $data_partenza, $ora_partenza;
      echo " - print only - "."<br>";
      $citta_partenza = $_POST['citta_partenza'];				  
      $citta_destinazione = $_POST['citta_destinazione'];	        

      if(empty($_POST['data_partenza'])){
          //echo "data default All..";
          $data_partenza = "0000-00-00";
      }else{
          $data_partenza = $_POST['data_partenza'];
      }
      
      if(empty($_POST['ora_partenza'])){
          //echo "ora dafault All..";
          $ora_partenza = "00:00:00";
      }else{
          $ora_partenza = $_POST['ora_partenza'];
      }
    }

    echo "città partenza inserita: ".$citta_partenza."<br>";
    echo "città destinazione inserita: ".$citta_destinazione."<br>";
    echo "data da cercare: ".$data_partenza."<br>";
    echo "ora da cercare: ".$ora_partenza."<br>";

    ?>

    <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100 ver6 m-b-110">
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
        $response = $topic->getCittaDataOra($citta_partenza, $citta_destinazione, $data_partenza, $ora_partenza);   
        //all'oggetto $topic chiamo il metopo occorrente, mi viene restituita una risposta (query corrente)                           
            
        foreach($response as $res){
          echo '<tr class="row100 head">';
          echo '<td class="column100 column1" data-column="column1">'. $res['id_viaggio'].'</td>';
          echo '<td class="column100 column2" data-column="column2">'. $res['citta_partenza'].'</td>';
          echo '<td class="column100 column3" data-column="column3">'. $res['citta_destinazione'].'</td>';
          echo '<td class="column100 column4" data-column="column4">'. $res['data_partenza'].'</td>';
          echo '<td class="column100 column5" data-column="column5">'. $res['ora_partenza'].'</td>';
          echo '<td class="column100 column6" data-column="column6">'. $res['tempo_percorrenza_stimato'].'</td>';
          echo '<td class="column100 column7" data-column="column7">'. $res['numero_soste'].'</td>';
          echo '<td class="column100 column8" data-column="column8">'. $res['possibilita_bagaglio'].'</td>';
          echo '<td class="column100 column9" data-column="column9">'. $res['possibilita_animali'].'</td>';
      }
        
  ?>  																	


            </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


  <div class="relative" style="padding-left: 300px;">


    <?php
                       
        $travel = new TopicData(); // creo un oggetto $topic che permette di effettuare la connesione al db
        $travelResponse = $travel->getCittaAllDataOra($citta_partenza, $citta_destinazione, $data_partenza, $ora_partenza);   
        //all'oggetto $topic chiamo il metopo occorrente, mi viene restituita una risposta (query corrente)                         
      
        

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
    
    

<!--===============================================================================================-->	
	<script src="../../table_file/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../table_file/vendor/bootstrap/js/popper.js"></script>
	<script src="../../table_file/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../table_file/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../table_file/js/main.js"></script>

</body>
</html>



<!-- 
  
echo "fuck";
        $data_partenza = $_POST['data_partenza'];		
        echo "data da cercare:-".$data_partenza.""."<br>";


    if(empty($_POST['data_partenza'])){
      echo "vuota";
    }else{
      echo "presente";
    }









--> 