<?php
require_once'entities/rv.php';
class rvDB{
    public function ajouterP(rv $rv){
        $sql="INSERT INTO rv Values('".$secretaire->getId_employer()."','".$secretaire->getnom()."','".$secretaire->getprenom()."''".$secretaire->gettelephone()."''".$secretaire->getemail()."''".$secretaire->getaddresse()."')";
        
    }
}
?>