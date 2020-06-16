

<html lang="en">

<head>

    <meta charset="utf-8">

    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Optional theme -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



<!-- Latest compiled and minified JavaScript -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>



<body>

    <div class="container">

            <div class="row">

                <h3>PHP prenotazioni</h3>

            </div>
<?php
require 'TopicData.php';

$data = new TopicData();


$bookings = $data->getAllPrenotazioni();
?>
<div class="row">

            <table class="table table-striped table-bordered">

              <thead>

                <tr>

                  <th>IdPrenotazione</th>

                  <th>dataInvio</th>

                  <th>oraInvio</th>

                  <th>partenza</th>

                  <th>arrivo</th>

                  <th>nome </th>

                  <th>&nbsp</th>

                  <th>&nbsp</th>

                </tr>

              </thead>

              <tbody>

<?php


               foreach ($bookings as $booking) {

                        echo '<tr>';

                        echo '<td>'. $booking['id_prenotazione'] . '</td>';

                        echo '<td>'. $booking['data_invio'] . '</td>';

                        echo '<td>'. $booking['ora_invio'] . '</td>';

                        echo '<td>'. $booking['partenza'] . '</td>';

                        echo '<td>'. $booking['destinazione'] . '</td>';

                        echo '<td>'. $booking['nome'] . '</td>';

                        echo '<td><a class="btn btn-default" href="index.php?action=update&id_prenotazione='.$booking['id_prenotazione'].'">Update</a></td>';

                        echo '<td><a class="btn btn-default" href="index.php?action=delete&id_prenotazione='.$booking['id_prenotazione'].'">Delete</a></td>';

                        echo '</tr>';

               }

?>
</tbody>

</table>
