var validaruser = function(id){
  $.ajax({
    data: "id="+id,
    type: "GET",
    dataType: "json",
    url: "webservices/validarusuario.php",
    success: function(data){
       restultadouser(data);
     }
   });
  };
var restultadouser = function(data){
       $("div.info").html("").show();
       $("div.info").append("tipo: "+data.tipo);
       $("div.info").append("Rut: "+data.rut);
       $("div.info").append("Contrasena: "+data.contrasena);
      
       if (data.tipo == "PROFESOR"){
           location.href='profesor/index.html'; } 
       else {
           if(data.tipo=="ESTUDIANTE"){
               location.href='estudiante/index.html';
           }
           $("div.info").append("El rut no es correcto");
       }
      
  };



  function cierra(){
window.close();
}

