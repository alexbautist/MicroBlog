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
        url: '../inc/Votes.inc.php',                       
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
function insererCommentaire(comment,image) {
 $.ajax({
     
        data: {'contenu': comment,'image':image},
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
   // var parametros = {'contenu': comment, 'id': id};
    $.ajax({
        data: $(this).parent(),
        url: 'modifierCommentaire.php',                      
        type: 'post',
        success: function (response) {
           location.href = "index.php";
           console.log(response);
        },
        error: function (data) {
            alert("Erreur");
        }
    });
}  

    
 function pruebasFile(){
    var parametros = {'contenu': "nada", 'id': "nadatambién"};
    $.ajax({
        data: parametros,
        url: 'testFile.php',                      
        type: 'post',
        success: function (response) {
         console.log(response);
        },
        error: function (data) {
            alert("Erreur");
        }
    });
 }