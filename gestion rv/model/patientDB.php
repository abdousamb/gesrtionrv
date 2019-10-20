<?php
require_once'entities/patient.php';
class patientDB{
    public function ajouterP(patient $patient){
        $sql="INSERT INTO patient Values('".$patient->getindex_patient()."','".$patient->getnom()."','".$$patient->getprenom()."''".$$patient->getage()."''".$patient->gettelephone()."''".$patient->getemail()."''".$patient->getsexe()."''".$patient->getaddresse()."')";
        
    }
    public function suprimerP($id_Patient){
        $sql="DELETE FROM  patient 
         WHERE index_Patient=".$id_Patient;
    }
    public function modifierP($id_Patient){
        $sql="UPDATE FROM  patient 
         WHERE index_Patient=".$id_Patient;
    }

    public function rechercherP($id_Patient){
        $sql="SELECT* FROM  patient 
         WHERE index_Patient=".$id_Patient;
    }
    
}
?>