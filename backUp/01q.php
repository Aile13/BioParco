<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  

  <?php

  echo "01q.php"."<br>";

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
            echo "città partenza inserita:".$citta_partenza."<br>";
            echo "città destinazione inserita:".$citta_destinazione."<br>";
            echo "data da cercare:".$data_partenza."<br>";
            echo "ora da cercare:".$ora_partenza."<br>";
            }
          }
        }
      }
    }

  /*
  non usati per ora
  $server = "localhost";
  $user = "blabla";
  $pass = "blabla";
  $anno = "2018";
  */

  try{
      
      $conn = new PDO("mysql:host=localhost;dbname=carpooling", "root", '');

      $travels = $conn->query("select * FROM `viaggi` where citta_partenza = '$citta_partenza' 
      AND citta_destinazione = '$citta_destinazione' 
      AND data_partenza = '$data_partenza' AND ora_partenza >= '$ora_partenza'");

      foreach($travels as $travel){
          echo '<tr>';
          echo '<td>'. $travel['id_viaggio'].'</td>';
          echo '<td>'. $travel['citta_partenza'].'</td>';
          echo '<td>'. $travel['citta_destinazione'].'</td>';
          echo '<td>'. $travel['data_partenza'].'</td>';
          echo '<td>'. $travel['ora_partenza'].'</td>';
      }

      
      echo "</TABLE>";
      
  }catch(PDOException $e){
      echo "Error: " . $e->getMEssage();
  }

  $conn = null;

  ?>



</body>
</html>


