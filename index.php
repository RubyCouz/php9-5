<?php
$todayDate = strtotime('now'); //déclaration de la fonction convertissant la date d'aujourd'hui en timestamp (temps écoulé depuis le 1er janvier 1970 en seconde)
$pastDate = strtotime('05/16/2016'); // déclaration de la fonction convertissant la date donné en timestamp (format date anglosaxon mm/dd/yyyy)
$daysIntimestamp = $todayDate - $pastDate; //calcul de la différence de timestamp entre les 2 dates, résultats en secondes
$day = round($daysIntimestamp/86400); //conversion du timestamp en jours 86400=24*60*60
 ?>
 <!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Timestamp</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
            Il y a
            <?php
            echo $day ?> jours entre aujourd'hui et le 16 mai 2016.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Fermer</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer aussi...</button>
        </div>
      </div>
    </div>
  </div>
        <!-- affichage du résultat -->
        <script src="assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" charset="utf-8"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" charset="utf-8"></script>
   <script src="assets/js/script.js" charset="utf-8"></script>
  </body>
</html>
