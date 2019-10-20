<?php
require_once'model/revDB.php';
require_once'entities/rv.php';

    if(isset($_POST['envoyer'])){
        $rv= new rvDB();
        $crv=new  rv();
        $id_rv=$_POST['id_rv'];
        $date_rv =$_POST['date_rv'];
        $index_pateint = $_POST['index_patient'];
        $nom_medecin = $_POST['nom_medecin'];
        $activation = $_POST['activation'];
        
        $crv->setDate_rv( $date_rv);
        $crv->setNom_medecin($nom_medecin);
        $crv->setIndex_patient($index_pateint);
        $crv->setActivation($activation);
        $crv->ajouterP($crv);

    
}
?>