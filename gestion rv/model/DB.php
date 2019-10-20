
<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'root';
    $db_password = '1234';
    $db_name     = 'Albert_royer';
    $db_host     = 'localhost';
    $db = mysqli_connect("localhost", "root", "1234","Albert_royer");
    if($db){
        //echo"bien connecte";
    }else{
       
    }
           
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = $_POST['username']; 
    $password =$_POST['password'];
    
    if($username !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM utilisateur where 
              user = '".$username."' and pass = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['username'] = $username;
           header('Location: gestionhp.php');
        }
         // utilisateur ou mot de passe incorrect
        else
        {
           header('Location: login.php?erreur=1');
        }
    }
    // utilisateur ou mot de passe vide
    else
    {
       header('Location: login.php?erreur=2'); 
    }
}
else
{
   header('Location: login.php');
}
// fermer la connexion
mysqli_close($db); 
?>

