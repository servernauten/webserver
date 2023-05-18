<?php
// Filter Fehler und Scripte aus dem Formular
function inputCheck($varPOSTGET){

  $varInput  =   '0'; // Löscht die Variable $varInput und setzt sie auf 0
  $varInput  =   $varPOSTGET; // füllt $varInput mit den Inhalt aus POST oder GET
  $varInput  =   trim($varInput); // Entfernt Whitespaces (oder andere Zeichen) am Anfang und Ende eines Strings
  $varInput  =   stripslashes($varInput); // Entfernt Maskierungszeichen aus einem String
  $varInput  =   htmlspecialchars($varInput); // Wandelt Sonderzeichen in HTML-Codes um

  return($varInput); // Ausgabe der Variable $varInput
}
?>
