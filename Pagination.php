<?php
require_once('/Users/alejandroreyesbautista/Downloads/smarty-3.1.33/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->display('index.tpl');

// Connexion au base de données
require './Connection.php';

// Requete pour obtenir tous les commentaires
$stmt = $conn->prepare("select * from messages ");   
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
$mes = $stmt->fetchAll();
 
// Calcule le nombre de page a créer
$nCommentairesPage= 5;
$nCommentaires= $stmt->rowCount();
$nPages= ceil($nCommentaires/$nCommentairesPage);
$premierCommentaire= ($_GET['page']-1)*$nCommentaires_page;

// Création de la pagination        
echo '<nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item '.($_GET['page']==1 ? 'disabled' : '').'">
                    <a class="page-link" href="index.php?page='.($_GET['page']-1).'" tabindex="-1" aria-disabled="true">Précédant</a>
                </li>';
                for($i=0; $i<$nPages; $i++){                    
                echo '<li class="page-item '.($_GET['page']==($i+1) ? 'active' : ""). '"><a class="page-link" href="index.php?page='.($i+1).'">'.($i+1).'</a></li>';
                }
                echo '<li class="page-item '.($_GET['page']>=$nPages ? 'disabled' : "").'">
                    <a class="page-link " aria-disabled="true" href="index.php?page='.($_GET['page']+1).'">Suivant</a>
                </li>
            </ul>
        </nav>';
