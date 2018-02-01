<?php

require_once '../entities/communeDAO.php';
require_once '../lib/Connexion.php';

try {
    
    $lcn = seConnecter("../conf/cours.ini");

    $lsContenu = "";
    $tLines = communeDAO::selectAll($lcn);
    
    $lsContenu = json_encode($tLines);
    
    echo $lsContenu;

    $lcn = null;
    
} catch (PDOException $e) {
    $lsMessage = $e->getMessage();
}

