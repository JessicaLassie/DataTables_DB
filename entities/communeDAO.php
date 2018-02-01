<?php

class communeDAO {

    
    public static function selectAll(PDO $pcnx) {

        $lbOK = true;
        $tCommunes = array();

        try {
            $lsSelect = "SELECT * FROM commune";
            $lrs = $pcnx->prepare($lsSelect);

            $lrs->execute();
            $lrs->setFetchMode(PDO::FETCH_NUM);
            while ($enr = $lrs->fetch()) {

                $tCommune["nom_commune"] = $enr[1];
                $tCommune["codepostal"] = $enr[2];
                $tCommune["codeinsee"] = $enr[3];

                $tCommunes[] = $tCommune;
            }

            $lrs->closeCursor();
        } catch (PDOException $e) {

            $lbOK = false;

            $tCommune["nom_commune"] = "";
            $tCommune["codepostal"] = "";
            $tCommune["codeinsee"] = "";

            $tCommunes[] = $tCommune;
        }
        return $tCommunes;
    }
    
    public static function selectAllBis(PDO $pcnx) {

        $lbOK = true;
        $tCommunes = array();

        try {
            $lsSelect = "SELECT * FROM commune OFFSET 101";
            $lrs = $pcnx->prepare($lsSelect);

            $lrs->execute();
            $lrs->setFetchMode(PDO::FETCH_NUM);
            while ($enr = $lrs->fetch()) {

                $tCommune["nom_commune"] = $enr[1];
                $tCommune["codepostal"] = $enr[2];
                $tCommune["codeinsee"] = $enr[3];

                $tCommunes[] = $tCommune;
            }

            $lrs->closeCursor();
        } catch (PDOException $e) {

            $lbOK = false;

            $tCommune["nom_commune"] = "";
            $tCommune["codepostal"] = "";
            $tCommune["codeinsee"] = "";

            $tCommunes[] = $tCommune;
        }
        return $tCommunes;
    }
}
?>

