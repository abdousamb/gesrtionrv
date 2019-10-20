<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulaire patient</title>

</head>
<body>
    <div class="container">
        <form name ="myform" class="form-group" action="valider.php" method="POST">
            <h2 style="text-align:center;font-weight:bold ;font-size:45px">Registre for Patient</h2>
            <div class="row jumbotron">
                <div class="col-md-12" style="text-align:center;margin-top:20px">
                    <label for="id_patient">id_patient</label>
                    <input type="text" class="form-control" id="id_patient" name="id_patient" placeholder="id patient">

                </div>
                <div class="col-md-6" style="text-align:center">
                        <label for="prenom_patient">prenom_patient</label>
                        <input type="text" class="form-control" id="prenom_patient" name="prenom_patient" placeholder="prenom patient">
    
                    </div>
                    <div class="col-md-6" style="text-align:center">
                            <label for="nom_patient">nom_patient</label>
                            <input type="text" class="form-control" id="nom_patient" name="nom_patient" placeholder="nom patient">
        
                        </div>
                        <div class="col-md-6" style="text-align:center">
                                <label for="age_patient">age_patient</label>
                                <input type="text" class="form-control" id="age_patient" name="age_patient" placeholder="age patient">
            
                            </div>
                            <div class="col-md-6" style="text-align:center">
                                    <label for="telephone_patient">telephone_patient</label>
                                    <input type="tel" class="form-control" id="telephone_patient" name="telephone_patient" placeholder="telephone patient">
                
                                </div>
                                <div class="col-md-6" style="text-align:center">
                                        <label for="email">email_patient</label>
                                        <input type="email" class="form-control" id="email_patient" name="email_patient" placeholder="email patient">
                    
                                    </div>
                                    <div class="col-md-6" style="text-align:center">
                                            <label for="sexe">sexe_patient</label>
                                            <select class="form-control">
                                                <option value="Feminin">Feminin</option>
                                                <option value="Masculin">Masculin</option>
                                                <option value="Non Preciser">Non Preciser</option>
                                            </select>
                        
                                        </div>
                                         <div class="col-md-6" style="text-align:center">
                                                    <label for="sevice">service_patient</label>
                                                    <select class="form-control" >
                                                        <option value="Neurologie">Neurologie</option>
                                                        <option value="Urologie">Urologie</option>
                                                        <option value="Dermenthologie">Dermenthologie</option>
                                                        <option value="Pediatrie">Pediatrie</option>
                                                        <option value="Ophtalmologie">Ophlalmologie</option>
                                                
                                             </select>
                                         </div>
                                        <div class="col-md-6" style="text-align:center">
                                                <label for="adresse_patient">adresse_patient</label>
                                                <input type="text" class="form-control" id="adresse_patient" name="adresse_patient" placeholder="adresse patient">
                            
                                            </div>
                                           
                                
                                                </div>
                                                <div class="col-md-12" style="text-align:center;margin-top:20px">
                                                        <button type="submit" class="btn btn-primary">Valider</button>
                                    
                                                    </div>
        
    

                        
                    
                
            
        
    

            </div>

        </form>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="
sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"crossorigin="anonymous"></script>

<script type="text/javascript">
    $(".col-md-6 input").on("focus",function(){
        $(this).addClass("focus");
    });
    $(".col-md-6 input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
    });
</script>
</body>
</html>