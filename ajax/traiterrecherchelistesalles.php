<?php
    require_once '../data/pdogsbrapports.php';   //PdoIntranet ?
    $pdo = PdoIntranet::getPdo(); //PdoIntranet ?
    $laListe = $pdo->getLaListeSalle();
    echo json_encode( $laListe);
?>
