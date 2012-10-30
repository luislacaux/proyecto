var validaruser = function(id){
  $.ajax({
    data: "id="+id,
    type: "POST",
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
       $("div.info").append("Contrasena: "+data.contrasena);
        //var asd= data.tipo;
        //console.log(asd);
       if (data.tipo == "OK"){
         //console.log("prof");
           location.href='profesor/index.html'; } 
       else {
           if(data.tipo=="ESTUDIANTE"){
           //console.log("estu");
               location.href='estudiante/index.html';
           }
           //console.log(asd);
           $("div.info").append("El rut no es correcto");
       }
      
  };



  function cierra(){
window.close();
}
