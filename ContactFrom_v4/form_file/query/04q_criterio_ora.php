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

    echo "nome file: 03q_criterio_data.php"."<br>";    

    if( isset($_POST['criterio_select'])){
        
        echo " - criterio settato - ".'<br>';

        $nome_criterio = $_POST['criterio_select'];                
        echo "nome criterio: ".$nome_criterio.'<br>';
        
        if( isset($_POST['criterio1'])){

            echo " - criterio valorizzato - ".'<br>';

            $valore_criterio = $_POST['criterio1'];
            echo "valore criterio: ".$valore_criterio;

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

            $ora_destinazione = $_POST['ora_destinazione']; // c'è il required sul form
        }
    }    

    ?>

    <div class="limiter">    
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
        $response = $topic->getByCriterioAndOra($nome_criterio, $valore_criterio, $ora_destinazione);   
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
    

    <div class="relative" style="padding-left: 300px;">


    <?php
                       
                       $topic = new TopicData(); // creo un oggetto $topic che permette di effettuare la connesione al db        
                       $travelResponse = $topic->getByCriterioAndOra($nome_criterio, $valore_criterio, $ora_destinazione);                               
      
        

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



if(isset($_POST['data_partenza']) or !empty($_POST['data_partenza'])){                
          if(isset($_POST['ora_partenza'])){
            if(isset($_POST['citta_partenza'])){
              if(isset($_POST['citta_destinazione'])){
              $citta_partenza = $_POST['citta_partenza'];				  
              $citta_destinazione = $_POST['citta_destinazione'];				  
              $data_partenza = $_POST['data_partenza'];				  
              $ora_partenza = $_POST['ora_partenza'];				  
              echo "città partenza inserita: ".$citta_partenza."<br>";
              echo "città destinazione inserita: ".$citta_destinazione."<br>";
              echo "data da cercare: ".$data_partenza."<br>";
              echo "ora da cercare: ".$ora_partenza."<br>";
              }            
            }
if(isset($_POST['citta_destinazione'])){
        echo "isset";
      }else{
        echo "not_isset";
      }


    if(empty($_POST['citta_destinazione'])){
        echo "empty";
      }else{
        echo "not_empty";
      }

 if(!empty($_POST['citta_partenza'])){                       
              if(empty($_POST['citta_destinazione'])){
              $citta_partenza = $_POST['citta_partenza'];				  
              $citta_destinazione = $_POST['citta_destinazione'];				  
              $data_partenza = $_POST['data_partenza'];				  
              $ora_partenza = $_POST['ora_partenza'];				  
              echo "città partenza inserita: ".$citta_partenza."<br>";
              echo "città destinazione inserita: ".$citta_destinazione."<br>";
              echo "data da cercare: ".$data_partenza."<br>";
              echo "ora da cercare: ".$ora_partenza."<br>";
              }            
            }
          }      
      }else{
        echo "reinserisci correttamente dati"."<br>"; // in alternativa usa required sul form
      }


--> 