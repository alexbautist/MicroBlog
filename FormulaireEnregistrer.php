<?php

include './haut.inc.php';
?>
<section>
    <div class="container">
        <div class="row">              
            <form method="post" action="Enregistrer.php" id="formE">
                <div id="notifE" class="alert alert-danger hidden ">Il faut remplir tous les champs! </div> 
                <div class="col-sm-10">  
                    <div class="form-group">
                        <input type=email id="mailE" name="mail" class="form-control" placeholder="Mail">
                    </div>
                    <div>
                        <input type="password" id="mdpE" class="form-control" placeholder="Mot de pass">     
                    </div>
                </div>
                <div class="col-sm-2">      
                    <button type="submit" class="btn btn-success btn-lg" >Enregistrer</button>
                </div>                       
            </form>
            <script>
                
                // Function pour valider le formulaire d'enregistrement 
                
                $("#formE").on("submit", function (e) {
                    if ($("#mailE").val() === "" || $("#mdpE").val() === "") {
                        $("#notifE").removeClass("hidden");
                        return false;
                    } else {
                        return true;
                    }
                });

            </script>
            </section>


            <?php

            include './bass.inc.php';
            ?>


