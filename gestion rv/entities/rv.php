
<?php
error_reporting(E_ALL);
ini_set("display_errors" ,1);
require_once('DB.php');
 class rv
 {
    private $id_rendez_vous; 
    private $date_rv;
     private $index_patient;
     private $nom_medecin;
     private $activation;

	public  function  getid_rendez_vous() {
		return $this->id_rendez_vous;
	}

	public   function setId_rendez_vous($id_rendez_vous ) {
		$this->id_rendez_vous=$id_rendez_vous;
	}

	public function getDate_rv() {
		return $this->date_rv;
	}

	public function setDate_rv( $date_rv) {
		$this->date_rv = $date_rv;
	}

	public function getIndex_patient() {
		return $this->index_patient;
	}

	public function setIndex_patient($index_patient) {
		$this->index_patient = $index_patient;
	}

	public function getNom_medecin() {
		return $this->nom_medecin;
	}

	public function setNom_medecin($nom_medecin) {
		$this->nom_medecin = $nom_medecin;
	}

	public function getActivation() {
		return $this->activation;
	}

	public function setActivation($activation) {
		$this->activation = $activation;
	}

	

 public function __construct($id_rendez_vous,$date_rv,$index_patient,$nom_medecin,$activation)
     {
         $this->id_rv;
         $this->dete_rv;
         $this->index_patient;
         $this->nom_medecin;
         $this->activation;

     }
 }
 
 ?>
