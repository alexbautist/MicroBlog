
<!DOCTYPE html>

<html lang="fr"> 
<head>
<?php
include './haut.inc.php';
?>
    <!-- About Section -->
    <section>
        <div class="container">
            <div class="row">              
                <form>
                    <div class="col-sm-10">  
                        <div class="form-group">
                            <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        
                        <button type="submit" class="btn btn-success btn-lg" onclick= "insererCommentaire(document.getElementById('message').value)">Envoyer</button>
                      
                    </div>                        
                </form>
            </div>
            <div class="row">
                <div id="comments" class="col-md-12">
                 <?php 
                include 'VoirComments.php';
                 ?>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php
    include './bass.inc.php'
    ?>
   