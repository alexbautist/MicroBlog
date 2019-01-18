
<html lang="fr">
    <head>
        <?php
        include './haut.inc.php';
        ?>
        <!-- About Section -->
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
        include './bass.inc.php'
        ?>


