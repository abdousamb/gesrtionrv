<?php
error_reporting(E_ALL);
ini_set("display_errors" ,1);
require_once('DB.php');
 class patient
 {
    private $index_patient; 
    private $nom;
     private $prenom;
     private $age;
     private $telephone;
     private $email;
     private $sexe;
     private $addresse;

	 public function __construct($Id_patient=null,$nom=null, $prenom=null,$age=null,$telephone=null,$email=null,$sexe=null,$addresse=null)
     {
         $this->id_patient=$id_patient;
         $this->nom=$nom;
         $this->prenom=$prenom;
         $this->age=$age;
         $this->telephone=$telephone;
         $this->email=$email;
         $this->sexe=$sexe;
         $this->addresse=$addresse;
     }
	public  function  getId_patient() {
		return $this->id_patient;
	}

	public   function setId_patient($id_patient ) {
		$this->Id_patient=$id_patient;
	}

	public function getNom() {
		return $this->nom;
	}

	public function setNom($nom) {
		$this->nom = $nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function getAge() {
		return $this->age;
	}

	public function setAge($age) {
		$this->age = $age;
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

	public function getSexe() {
		return $this->sexe;
	}

	public function setSexe($sexe) {
		$this->sexe = $sexe;
	}

	public function getAddresse() {
		return $this->addresse;
	}

	public function setAddresse($addresse) {
		$this->addresse = $addresse;
	}

 
 }
 
 ?>
