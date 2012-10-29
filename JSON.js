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
       $("div.info").append("Rut: "+data.rut);
       $("div.info").append("Contrasena: "+data.contrasena);
       $("div.info").append("Contrasena: "+data.rut_ingresado);
       if (data.rut == data.rut_ingresado){
           location.href='profesor/index.html'; } 
       else {
           $("div.info").append("El rut no es correcto");
       }
      
  };



  function cierra(){
window.close();
}

