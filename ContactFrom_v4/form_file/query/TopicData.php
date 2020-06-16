<?php
class TopicData {

    protected $connection = null;

    public function __construct(){
      $this->connect();
    }
    public function connect(){
      try{
        $this->connection = new PDO("mysql:host=localhost;dbname=sgb_smart", "root", '');

        }catch(PDOException $e){
          echo "Error: " . $e->getMEssage();
      }
    }


    public function getCittaDataOra($citta_partenza, $citta_destinazione, $data_partenza, $ora_partenza){
        $sql = "select * FROM `viaggi` where citta_partenza = '$citta_partenza' 
        AND citta_destinazione = '$citta_destinazione' 
        AND data_partenza >= '$data_partenza' AND ora_partenza >= '$ora_partenza' AND ora_partenza < '24:00:00'";
        $query = $this->connection->prepare($sql);
        $query->execute();

        return $query;
    }

    public function inserisciAnimale($nome_scientifico, $info_origine, $numero_MD, $foto, $sesso, 
    $caratteri_distintivi, $id_area_parco, $id_cartella_clinica){      
      
      $nome_scientifico = 'Giraffa camelopardalis'
      $info_origine = 'Sudan del sud, 12/01/1996'
      $numero_MD = '3'
      $foto = 'https://www.settemuse.it/sfondi_animali/mammiferi/giraffe/giraffe_007.jpg'
      $sesso = 'femmina'
      $caratteri_distintivi = 'Un bernoccolo mediale è presente nei maschi[9]. Si stima che in natura ne rimangano al massimo 
      3000 capi[8]. Censire il numero di esemplari allevati negli zoo è risultato piuttosto arduo, 
      data la confusione creatasi tra questa sottospecie e G. c. peralta. '
      $id_area_parco = '1'
      $id_cartella_clinica '234'

      $sql = " INSERT INTO `animali` (`nome_scientifico`, `info_origine`, `numero_MD`, `foto`, `sesso`, 
      `caratteri_distintivi`, `id_area_parco`, `id_cartella_clinica`) 
      VALUES (NULL, '$nome_scientifico', '$info_origine', '$numero_MD', 
      '$foto', '$sesso', 
      '$caratteri_distintivi', '$id_area_parco', '$id_cartella_clinica', '')
      
      $query = $this->connection->prepare($sql);
      $query->execute();

      return $query;
    }

    public function getDriverInfo($currentDriverId){
      $sql = "select * FROM `autisti` WHERE identificativo = '$currentDriverId'";
      $query = $this->connection->prepare($sql);
      $query->execute();

      return $query;
    }

    public function getDriverTravel($currentDriverId){
      $sql = "select COUNT(*) as conta
      FROM viaggi v, autisti a
      WHERE v.id_autista = a.identificativo
      and a.identificativo = '$currentDriverId'";
      $query = $this->connection->prepare($sql);
      $query->execute();

      return $query;
    }

    public function getByCriterioAndData($nome_criterio, $valore_criterio, $data_partenza){

      switch ($nome_criterio) {
        case 0:
            $sql = "select * FROM `viaggi` 
            WHERE data_partenza >= '$data_partenza'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
        case 1:
            $sql = "select * FROM `viaggi` 
            WHERE data_partenza >= '$data_partenza'
            AND citta_partenza = '$valore_criterio'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
        case 2:
            $sql = "select * FROM `viaggi` 
            WHERE data_partenza >= '$data_partenza'
            AND citta_destinazione = '$valore_criterio'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
        case 3:
            $sql = "select * FROM `viaggi` 
            WHERE data_partenza >= '$data_partenza'
            AND numero_soste <= '$valore_criterio'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
        case 4:
            $sql = "select * FROM `viaggi` 
            WHERE data_partenza >= '$data_partenza'
            AND tempo_percorrenza_stimato <= '$valore_criterio'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
      }

      return $query;
    }

    public function getByCriterioAndOra($nome_criterio, $valore_criterio, $ora_destinazione){

      switch ($nome_criterio) {
        case 0:
            $sql = "select * FROM `viaggi` 
            WHERE ora_partenza + tempo_percorrenza_stimato <= '$ora_destinazione'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
        case 1:
            $sql = "select * FROM `viaggi` 
            WHERE ora_partenza + tempo_percorrenza_stimato <= '$ora_destinazione'
            AND citta_partenza = '$valore_criterio'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
        case 2:
            $sql = "select * FROM `viaggi` 
            WHERE ra_partenza + tempo_percorrenza_stimato <= '$ora_destinazione'
            AND citta_destinazione = '$valore_criterio'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
        case 3:
            $sql = "select * FROM `viaggi` 
            WHERE ra_partenza + tempo_percorrenza_stimato <= '$ora_destinazione'
            AND numero_soste <= '$valore_criterio'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
        case 4:
            $sql = "select * FROM `viaggi` 
            WHERE ra_partenza + tempo_percorrenza_stimato <= '$ora_destinazione'
            AND tempo_percorrenza_stimato <= '$valore_criterio'";
            $query = $this->connection->prepare($sql);
            $query->execute();                
            break;
        }

      return $query;
    }

        
    public function getLoginPasseggero($username, $password){            

      $sql = "select COUNT(*) as conta
      FROM passeggeri p
      WHERE p.nome = '$username'
      and p.password = '$password'";              

      $query = $this->connection->prepare($sql);
      $query->execute();

      return $query;
    }

    public function getLoginAutista($username, $password){            

      $sql = "select COUNT(*) as conta
      FROM autisti a
      WHERE a.nome = '$username'
      and a.password = '$password'";              

      $query = $this->connection->prepare($sql);
      $query->execute();

      return $query;
    }
    
    public function getInfoAutistaByUsername($username){            

      $sql = "select *
      FROM autisti a
      WHERE a.nome = '$username'";              

      $query = $this->connection->prepare($sql);
      $query->execute();

      return $query;
    }

    public function getInfoPasseggeroByUsername($username){            

      $sql = "select *
      FROM passeggeri p
      WHERE p.nome = '$username'";              

      $query = $this->connection->prepare($sql);
      $query->execute();

      return $query;
    }

  




  }



    /*
    public function getAllPrenotazioni()
    {
      $sql = 'SELECT pr.id_prenotazione id_prenotazione, pa.nome nome, v.citta_partenza partenza, v.citta_destinazione destinazione, pr.data_invio as data_invio, pr.ora_invio as ora_invio, pa.nome as nome,   pr.accettata as accettata FROM `prenotazioni` pr, `passeggeri` pa, `viaggi` v WHERE pr.id_passeggero = pa.identificativo AND pr.id_viaggio = v.id_viaggio';
        $query = $this->connection->prepare($sql);
        $query->execute();

        return $query;
    }
    public function add($data) {
    $query = $this->connection->prepare(
        "INSERT INTO prenotazioni (
            data_invio,
            ora_invio
        ) VALUES (
            :data_invio,
            :ora_invio
        )"
    );

    $data = [
        'data_invio' => $data['data_invio'],
        ':ora_invio' => $data['ora_invio']
    ];

    $query->execute($data);
  }

  */
?>


