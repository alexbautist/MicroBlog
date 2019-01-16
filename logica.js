$(document).ready(function(){
 
$(document).on("click",'.btnVoter', voter);
    
 });

function voter() {
    var idVotes= $(this).siblings('u').attr('name');
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

//function updateComments() {
//
// var parametros = { 'contenu': 'ALe' };
//        $.ajax({
//            data: parametros,//aqui tus datos
//            url: 'UpdateComments.php',//aqui va tu direccion donde esta tu funcion php                        
//            type:'post', //aqui puede ser igual get
//            success:function(response){
//             document.getElementById("comments").innerHTML= response;
//            
//           },
//           error:function(data){
//            //lo que devuelve si falla tu archivo mifuncion.php
//           }
//         });
//     }

function insererCommentaire(comment) {
    var parametros = {'contenu': comment};
    $.ajax({
        data: parametros, //aqui tus datos
        url: 'modifierMessage.php', //aqui va tu direccion donde esta tu funcion php                        
        type: 'post', //aqui puede ser igual get
        success: function (response) {
        },
        error: function (data) {
            //lo que devuelve si falla tu archivo mifuncion.php
        }
    });
}
function modifierCommentaire(comment, id) {
    var parametros = {'contenu': comment, 'id': id};
    $.ajax({
        data: parametros, //aqui tus datos
        url: 'modifierCommentaire.php', //aqui va tu direccion donde esta tu funcion php                        
        type: 'post', //aqui puede ser igual get
        success: function (response) {
            location.href = "index.php";
        },
        error: function (data) {
            alert("no funciona"); //lo que devuelve si falla tu archivo mifuncion.php
        }
    });
}  