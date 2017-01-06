<?php
    require_once '../data/pdoIntranet.php';   
    $pdo = PdoIntranet::getPdo(); 
    $laListe = $pdo->getLaListeUtilisateurs();
    echo json_encode($laListe);
?>
