$(document).ready(function(){
 
$(document).on("click",'.btnVoter', voter);
$().on('click', '.page-item', );

});


//  Fonction pour voter avec ajax.
function voter() {
    var idVotes= $(this).parentsUntil('blockquote').find('u').attr('name');
    console.log(idVotes);
    var data = {'idVotes': idVotes};   
    $.ajax({
        data: data,
        url: 'Votes.php',                       
        type: 'Post',
        success: function (responseText) {          
           if(responseText==="Error"){
              $('button[name='+idVotes+']').addClass("disabled");              
           }
           else{
             $('u[name='+idVotes+']').text(responseText);
               }
        },
        error: function () {
        }
    });
}

// Fonction pour insérer les commentaires 
function insererCommentaire(comment) {
    var parametros = {'contenu': comment};
    $.ajax({
        data: parametros,
        url: 'modifierSupprimerCommentaire.php',                       
        type: 'post',
        success: function (response) {
        },
        error: function (data) {
        }
    });
}

// Fonction pour modifier les commentaires 
function modifierCommentaire(comment, id) {
    console.log("llega");
    var parametros = {'contenu': comment, 'id': id};
    $.ajax({
        data: parametros,
        url: 'modifierCommentaire.php',                      
        type: 'post',
        success: function (response) {
           location.href = "index.php";
        },
        error: function (data) {
            alert("Erreur");
        }
    });
}  