<?php

include './haut.inc.php';
?>
<section>
    <div class="container">
        <div class="row">              
            <form id ="form" method="post" action="Connexion.php" >
                <div id="notif" class="alert alert-danger hidden ">Il faut insérer des données! </div>  
                <div class="col-sm-10">  
                    <div class="form-group">
                        <input type=email id="mail" name="mail" class="form-control" placeholder="Mail">
                    </div>
                    <div>
                        <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de pass">     
                    </div>
                </div>
                <div class="col-sm-2">

                    <button type="submit" class="btn btn-success btn-lg" >Verifier</button>

                </div>  
                <script>
                    $("#form").submit(function (e) {
                        e.preventDefault();
                        if ($("#mail").val() === "" || $("#mdp").val() === "") {
                            $("#notif").removeClass("hidden");
                      return false;
                        }
                      else{ return true;}
    });
                </script>

            </form>

            </section>


            <?php

            include './bass.inc.php';
            ?>

