<?php
    require_once '../data/pdogsbrapports.php';   
    $pdo = PdoGsbRapports::getPdo();
    $laListe = $pdo->getLaListeSalle();
    echo json_encode( $laListe);
?>
