<?php
  session_start();
?>

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
    
    require 'TopicData.php';

    echo "nome file: 05q_login.php"."<br>";
    

    if (isset($_SESSION["username"])){
      header("location: ../../justVerify.php");
      die();
    }

    $username;
    $password;

    $username = $_POST['username'];
    $password = $_POST['pass'];
    
    if(verificaPasseggero($username, $password) == 0 && verificaAutista($username, $password) == 0){
      header("location: ../../notVerify.php");
    }else{        

        if(verificaPasseggero($username, $password) != 0){
          $_SESSION["user_type"] = "passeggero";  
        }else{
          $_SESSION["user_type"] = "autista";
        }

        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        header("location: verify.php");
    }
    
    function verificaPasseggero($username, $password){
        $topic = new TopicData();
        $response = $topic->getLoginPasseggero($username, $password);   
                    
        foreach($response as $result){
            echo 'utente trovato:'.$result[0];
            $result = $result[0];
        }   
        return $result;
    }

    function verificaAutista($username, $password){
      $topic = new TopicData();
      $response = $topic->getLoginAutista($username, $password);   
                  
      foreach($response as $result){
          echo 'utente trovato:'.$result[0];
          $result = $result[0];
      }   
      return $result;
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






     																	


            </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


  <div class="relative" style="padding-left: 300px;">


  
                       
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
                       
                                  
                                
                   }
                   
                   ?>


--> 