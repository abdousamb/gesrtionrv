<?php
require_once'class.singleton.php';
require_once'../model/article.class.php';


class Managemedecin{
    public static function add(medecin $medecin)
    {


            $connexion = Connexion::getInstance();
            $sql =$connexion->prepare("INSERT INTO medecin VALUES ('".$article->getTitre()."')");
            $sql->execute();
            return $medecin;
    }


   public static function getAll()
   {    
        $connexion = Connexion::getInstance();
        $ress = $connexion->prepare("SELECT * from medecin");
        $ress->execute();
        $lismedecin = array();
        foreach ($ress as $value) 
        {
            $listmedecin = new medecin($value'titre'],$value'id']);
        }
        return $listArticle;
    }
}
?>