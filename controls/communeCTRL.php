<?php

require_once '../entities/communeDAO.php';
require_once '../lib/Connexion.php';

try {
    
    $lcn = seConnecter("../conf/cours.ini");

    $lsContenu = "";
    $tLines = communeDAO::selectAll($lcn);
    
    $data["data"] = $tLines;
    $data = json_encode($data);
    
    echo $data;

    $lcn = null;
    
} catch (PDOException $e) {
    $lsMessage = $e->getMessage();
}

