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
</head>
<body>
    
    

    <?php

    echo "nome file: 02q_citta_data_ora.php"."<br>";

    $citta_partenza;
    $citta_destinazione;
    $data_partenza;
    $ora_partenza;


    // in alternativa al required nell'html, pongo il controllo sull'inserimento qui
    if(empty($_POST['citta_partenza'])){
        echo "citta partenza vuota.. reinserire";
        die;
    }else{
        if(empty($_POST['citta_destinazione'])){
            printAll();
        }else{
            printOnly();
        }
    }
    
    function printAll(){
        global $citta_partenza, $citta_destinazione, $data_partenza, $ora_partenza;
        echo " - print All - "."<br>";
        $citta_partenza = $_POST['citta_partenza'];				  
        $citta_destinazione = "all";        

        if(empty($_POST['data_partenza'])){
            //echo "data default all..";
            $data_partenza = "0000-00-00";
        }else{
            $data_partenza = $_POST['data_partenza'];
        }
        if(empty($_POST['ora_partenza'])){
            //echo "ora dafault all..";
            $ora_partenza = "00:00:00";
        }else{
            $ora_partenza = $_POST['ora_partenza'];
        }        
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
        $response = $topic->getCittaAllDataOra($citta_partenza, $citta_destinazione, $data_partenza, $ora_partenza);   
        //all'oggetto $topic chiamo il metopo occorrente, mi viene restituita una risposta (query corrente)                           
            
        foreach($response as $res){          
          echo '<tr class="row100 head">';          
          echo '<td class="column100 column1" data-column="column1">'.'<a href="single_trip.html.html" style="color: white;">'.$res['id_viaggio'].'</a>'.'</td>';          
          echo '<td class="column100 column2" data-column="column2">'.'<a href="single_trip.html.html" style="color: white;">'.$res['citta_partenza'].'</a>'.'</td>';
          echo '<td class="column100 column3" data-column="column3">'.'<a href="single_trip.html.html" style="color: white;">'.$res['citta_destinazione'].'</a>'.'</td>';
          echo '<td class="column100 column4" data-column="column4">'.'<a href="single_trip.html.html" style="color: white;">'.$res['data_partenza'].'</a>'.'</td>';
          echo '<td class="column100 column5" data-column="column5">'.'<a href="single_trip.html.html" style="color: white;">'.$res['ora_partenza'].'</a>'.'</td>';
          echo '<td class="column100 column6" data-column="column6">'.'<a href="single_trip.html.html" style="color: white;">'.$res['tempo_percorrenza_stimato'].'</a>'.'</td>';
          echo '<td class="column100 column7" data-column="column7">'.'<a href="single_trip.html.html" style="color: white;">'.$res['numero_soste'].'</a>'.'</td>';
          echo '<td class="column100 column8" data-column="column8">'.'<a href="single_trip.html.html" style="color: white;">'.$res['possibilita_bagaglio'].'</a>'.'</td>';
          echo '<td class="column100 column9" data-column="column9">'.'<a href="single_trip.html.html" style="color: white;">'.$res['possibilita_animali'].'</a>'.'</td>';          
      }

        
        
  ?>  																	


            </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

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