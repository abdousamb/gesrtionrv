<?php
class secretaire extends employer
{
 public $id_secretaire;

	public function getId_secretaire() {
		return $this->id_service;
	}

	public function setId_secretaire( $id_secretaire) {
		$this->id_service = $id_service;
	}

 
 public function __construct($id_employer,$nom,$prenom,$age,$telephone,$email,$sexe,$addresse,$id_service)
 {
   parent::__construct($id_employer,$nom,$prenom,$age,$telephone,$email,$sexe,$addresse);
  
   $this->id_service=$id_service;
 }
  
}
  

  
 

?>
