<?php
require_once'entities/medecin.php';
require_once'DB.php';

class medecinDB{
    public function ajouterP(medecin $medecin){
        $sql="INSERT INTO medecin Values('".$medecin->getId_employer()."','".$medecin->getnom()."','".$medecin->getprenom()."''".$medecin->getage()."''".$medecin->getItelephone()."''".$medecin->getemail()."''".$medecin->getsexe()."''".$medecin->getaddresse()."')";
        $db->exec($sql);
        
    }
}
?>