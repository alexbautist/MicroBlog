# MicroBlog
FONCTIONALITÉ VOTER

Récupere tous les commentaires: 
```php
$stmt = $conn->prepare("select * from messages ");   
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
$mes = $stmt->fetchAll();
```

Calcule le nombre de page a créer:
```php
$nCommentairesPage= 5;
$nCommentaires= $stmt->rowCount();
$nPages= ceil($nCommentaires/$nCommentairesPage);
$premierCommentaire= ($_GET['page']-1)*$nCommentaires_page;
```
Création de la pagination:
```php
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
```


FONCIONALITÉ VOTER

Récupere l'IP de l'utilisateur actuel:

```php
$actuelleIp=$_SERVER['REMOTE_ADDR'];
```

Requete pour vérifier obtenir le nombre de votes et la dernière IP qui a voté:
```php
$idVotes= $_POST['idVotes'];
$sql1=$conn->prepare("select * from messages where id=$idVotes");
$sql1->execute();
$sql1->setFetchMode(PDO::FETCH_ASSOC);
$votes=$sql1->fetchAll();
$votesAvant;
$dernierIp;
foreach ($votes as $k) {
    $votesAvant=$k['votes']+1;
    $dernierIp=$k['dernierIP'];
}
```

Si l'IP a déjà voté ne peut plus voter: 
```php
if($dernierIp === $actuelleIp){
    echo "Error";
}
```

Sinon le vote est enregistré:
```php
else{
    $sql2=$conn->prepare("update messages set votes=$votesAvant, dernierIP='$actuelleIp' where id=$idVotes");
    $sql2->execute();

    $sql3=$conn->prepare("select * from messages where id=$idVotes");
    $sql3->execute();
    $sql3->setFetchMode(PDO::FETCH_ASSOC);
    $votesActuels=$sql3->fetchAll();
    foreach ($votesActuels as $k) {
    echo $k['votes'];
  }
}
```















