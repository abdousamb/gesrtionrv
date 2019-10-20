
<?php           
     if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2){ 
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
            }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RV|service Central D'Authentification</title>
</head>
<body>
<div >
    
        <form action="db.php" method="POST" class="login-box">
    <h1 class="blanc" style="font-size: 25px;padding-bottom:20px;color: #00A03A">RV | Service central d'Authentification</h1>
<div class="texbox">
   <input type="text" name="username">
   <span data-placeholder="Nom d'utilisateur"></span>
</div>
<div class="texbox">
        <input type="password" name="password" > 
        <span data-placeholder="Entrer le mot de passe"></span>
     </div>
     <input type="submit" class="logbtn" login="" value="Sign in">
    
</form>
<script type="text/javascript">
$(".texbox input").on("focus",function(){
    $(this).addClass("focus");
});
$(".texbox input").on("blur",function(){
    if($(this).val() == "")
    $(this).removeClass("focus");
});
</script>
</body>
</div>
</html>