<?php
require_once'entities/secretaire.php';
class secretaireDB{
    public function ajouterP(secretaire $secretaire){
        $sql="INSERT INTO secretaire Values('".$secretaire->getId_employer()."','".$secretaire->getnom()."','".$secretaire->getprenom()."''".$secretaire->gettelephone()."''".$secretaire->getemail()."''".$secretaire->getaddresse()."')";
        
    }
}
?>