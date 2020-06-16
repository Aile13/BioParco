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

    echo "nome file: 01q_citta_data_ora.php"."<br>";

    $citta_partenza;
    $citta_destinazione;
    $data_partenza;
    $ora_partenza;

      if(isset($_POST['data_partenza'])){
        if(isset($_POST['data_partenza'])){
          if(isset($_POST['cit_part_cit_dest'])){
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
          }
        }
      }

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

    try{
        
        $conn = new PDO("mysql:host=localhost;dbname=carpooling", "root", '');

        $travels = $conn->query("select * FROM `viaggi` where citta_partenza = '$citta_partenza' 
        AND citta_destinazione = '$citta_destinazione' 
        AND data_partenza >= '$data_partenza' AND ora_partenza >= '$ora_partenza'");        
            
        foreach($travels as $travel){
          echo '<tr class="row100 head">';
          echo '<td class="column100 column1" data-column="column1">'. $travel['id_viaggio'].'</td>';
          echo '<td class="column100 column2" data-column="column2">'. $travel['citta_partenza'].'</td>';
          echo '<td class="column100 column3" data-column="column3">'. $travel['citta_destinazione'].'</td>';
          echo '<td class="column100 column4" data-column="column4">'. $travel['data_partenza'].'</td>';
          echo '<td class="column100 column5" data-column="column5">'. $travel['ora_partenza'].'</td>';
          echo '<td class="column100 column6" data-column="column6">'. $travel['tempo_percorrenza_stimato'].'</td>';
          echo '<td class="column100 column7" data-column="column7">'. $travel['numero_soste'].'</td>';
          echo '<td class="column100 column8" data-column="column8">'. $travel['possibilita_bagaglio'].'</td>';
          echo '<td class="column100 column9" data-column="column9">'. $travel['possibilita_animali'].'</td>';
      }
        
    }catch(PDOException $e){
        echo "Error: " . $e->getMEssage();
    }

    $conn = null;
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