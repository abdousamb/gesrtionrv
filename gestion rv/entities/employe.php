
<?php
error_reporting(E_ALL);
ini_set("display_errors" ,1);
require_once('DB.php');
 class employer
 {
    private $id_employer; 
    private $nom;
     private $prenom;
     private $telephone;
     private $email;
     private $addresse;

	public  function  getId_employer() {
		return $this->id_employer;
	}

	public   function setIid_employer($id_employer ) {
		$this->id_employer=$id_employer;
	}

	public function getNom() {
		return $this->nom;
	}

	public function setNom( $nom) {
		$this->nom = $nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function getTelephone() {
		return $this->telephone;
	}

	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}

	public function getEmail() {
		return $this->email;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function getAddresse() {
		return $this->addresse;
	}

	public function setAddresse($addresse) {
		$this->addresse = $addresse;
	}

 public function __construct(id_employer $nom,$prenom,$telephone,$email,$addresse)
     {
         $this->id_employer;
         $this->nom;
         $this->prenom;
         $this->telephone;
         $this->email;
         $this->addresse;
     }
 }
 
 ?>
