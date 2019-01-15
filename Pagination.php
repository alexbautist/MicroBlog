<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "Micro_blog2";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $stmt = $conn->prepare("select * from messages ");   
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        $mes = $stmt->fetchAll();
         
        $nCommentairesPage= 5;
        $nCommentaires= $stmt->rowCount();
        $nPages= ceil($nCommentaires/$nCommentairesPage);

               
        $premierCommentaire= ($_GET['page']-1)*$nCommentaires_page;

        
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
