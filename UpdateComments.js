
//function updateComments() {
//   
//        if (window.XMLHttpRequest) {
//            // code for IE7+, Firefox, Chrome, Opera, Safari
//            xmlhttp = new XMLHttpRequest();
//        } else {
//            // code for IE6, IE5
//            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//        }
//        xmlhttp.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200) {
//                
//               document.getElementById("comments").innerHTML = this.responseText;
//               alert(this.responseText);
//                console.log(this.responseText);
//            }
//            
//        };
//        xmlhttp.open("GET","UpdateComments.php?",true);
//        xmlhttp.send();
//        }

function updateComments() {

 var parametros = { 'contenu': 'ALe' };
        $.ajax({
            data: parametros,//aqui tus datos
            url: 'UpdateComments.php',//aqui va tu direccion donde esta tu funcion php                        
            type:'post', //aqui puede ser igual get
            success:function(response){
             document.getElementById("comments").innerHTML= response;
            
           },
           error:function(data){
            //lo que devuelve si falla tu archivo mifuncion.php
           }
         });
     }

function insererCommentaire (comment){
      var parametros = { 'contenu': comment };
        $.ajax({
            data: parametros,//aqui tus datos
            url: 'InsererCommentaire.php',//aqui va tu direccion donde esta tu funcion php                        
            type:'post', //aqui puede ser igual get
            success:function(response){
             alert(response);
           },
           error:function(data){
            //lo que devuelve si falla tu archivo mifuncion.php
           }
         });
    }
  function modifierCommentaire (comment, id){
      var parametros = { 'contenu': comment , 'id':id};
        $.ajax({
            data: parametros,//aqui tus datos
            url: 'modifierCommentaire.php',//aqui va tu direccion donde esta tu funcion php                        
            type:'post', //aqui puede ser igual get
            success:function(response){
             location.href="index.php";
           },
           error:function(data){
           alert("no funciona"); //lo que devuelve si falla tu archivo mifuncion.php
           }
         });
    }  