// Esta funcion es llamada desde el archivo "index.html"
var getdetails = function(id){
// Aqui se utiliza JSON
  $.ajax({
//La variable "data" almacena la informacion que es enviada al archivo "insertar3.php"
    data: "id="+id,
    type: "GET",
    dataType: "json",
//Se llama al archivo "casas.php" el cual sera el que resiva los datos enviados y acceda a la
//base de datos con ellos, y despues devuelva informacion de la base de datos
    url: "webservices/selector.php",
//se reciben los datos de "casa.php" en el objeto "data"
    success: function(data){
       restults(data);
     }
   });
  };
var restults = function(data){
     $("div.info").html("").show();
       $("div.info").append("Rut: "+data.rut);
       $("div.info").append("Contrasena: "+data.contrasena);
       $("div.info").append("Contrasena: "+data.rut_ingresado);
       if (data.rut == data.rut_ingresado){location.href='profesor/index.html'; } 
     else {$("div.info").append(" El rut no es correcto");}
      
  };



  function cierra(){
window.close();
}

