<?php
include './haut.inc.php';
?>
<section>
        <div class="container">
            <div class="row">              
                <form method="post" action="Connexion.php" >
                    <div class="col-sm-10">  
                        <div class="form-group">
                            <input type=email id="mail" name="mail" class="form-control" placeholder="Mail">
                            </div>
                        <div>
                            <input type="password" name="mdp" class="form-control" placeholder="Mot de pass">     
                        </div>
                    </div>
                    <div class="col-sm-2">
                        
                        <button type="submit" class="btn btn-success btn-lg" >Verifier</button>
                      
                    </div>  
                       
                </form>
</section>


<?php
include './bass.inc.php';
?>


