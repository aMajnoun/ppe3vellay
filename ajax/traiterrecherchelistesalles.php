<?php
    require_once '../data/pdoIntranet.php'; 
    $pdo = PdoIntranet::getPdo();
    $laListe = $pdo->getLaListeSalle();
    echo json_encode($laListe);
?>
