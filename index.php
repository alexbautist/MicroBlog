<?php
// Conditon pour retourner a l'index si la page n'est pas correcte
if (!isset($_GET['page'])) {
    header('location:index.php?page=1');
}
if ($_GET['page'] < 1) {
    header('location:index.php?page=1');
}
?>
<!DOCTYPE html>
<html lang="fr"> 
    <head>
        <?php
        include './inc/haut.inc.php';
        ?>
        <!-- About Section -->
    <section>
        <div class="container">
            <div class="row">              
                <form action="modifierSupprimerCommentaire.php" method="post" enctype="multipart/form-data">
                    <div class="col-sm-10">  
                        <div class="form-group">
                            <textarea id="message" name="contenu" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <input type="file" name="image" id="image">
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success btn-lg" >Envoyer</button>
                        <!--  <button type="submit" class="btn btn-success btn-lg" onclick= "insererCommentaire($('#message').val(),$('#image').val())">Envoyer</button> -->
                    </div>                        
                </form>
            </div>
            <div class="row">
                <div id="comments" class="col-md-12">
                    <?php
                    include 'AfficherCommentaires.php';
                    ?>
                </div>               
            </div>
        </div>
        <div id="pagination" >
            <?php include './inc/Pagination.inc.php'; ?>
            <ul id="spritelist">
                <li id="feu"><a href=""></a></li>
                <li id="facebook"><a href=""></a></li>
                <li id="youtube"><a href=""></a></li>
                <li id="twitter"><a href=""></a></li>
                <li id="linkedin"><a href=""></a></li>
                <li id="google"><a href=""></a></li>
            </ul>
        </div>  
    </section>
    <!-- Footer -->
    <?php
    include './inc/bass.inc.php';
    ?>
   