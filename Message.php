<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php
        include './inc/haut.inc.php';
        ?>
    <section> 
        <form method="POST">       
            <?php
            include 'modifierSupprimerCommentaire.php';
            ?>
            <button  type="submit" class="btn btn-success btn-lg" onclick= "modifierCommentaire(document.getElementById('message').value, document.getElementById('idMessage').value)" >Modifier</button>
        </form>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <?php
        include './inc/bass.inc.php'
        ?>


