<?php
    session_start();
    require_once '../data/pdoIntranet.php';   
    $mdp = $_REQUEST['mdp'];
    $login = $_REQUEST['login'];
    
  
    $pdo = PdoIntranet::getPdo();
    $user = $pdo->getLeUser($login,$mdp);// retourne le visiteur

    if($user != NULL)
    {
        $_SESSION['user']= $user;
        $_SESSION['user']['mdp']= $mdp;
        $_SESSION['user']['login']=$login;
    }
    
    echo json_encode($user);
?>