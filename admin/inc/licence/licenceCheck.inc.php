<?php

// ENDE Adresse zur API Abfrage
  function licenceCheck($servernautAPI,$timeStamp){


    if( md5($_SERVER['SERVER_NAME']) != $servernautAPI->DomainKey ){

            echo '<div class="alert alert-danger" role="alert">
                    Ihre Lizenzdaten sind falsch. Bitte prüfen Sie ihre Daten.
                  </div>';
          }
          if( $timeStamp > $servernautAPI->LicenceEnd ){
            ;
            echo '<div class="alert alert-warning" role="alert">
                    Ihre Lizenzdaten sind abgelaufen.
                  </div>';
          }
  }

$servernautenUrl = 'http://localhost/API/licenceData.php?APIKEY=';
?>
