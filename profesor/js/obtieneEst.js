var getEstudiantes = function(grupo){
  var form = "";
  $.ajax({
    data: "grupo="+grupo, 
    type: "POST",
    async: false,
    dataType: "json",
    url: "../../webservices/profesor/obtener_est.php",
  
    success: function(data){ 
        form = data.rut+"$"+data.nombre;
    }
    
       
   });
   return form;
  };
  
function cierra(){
window.close();
}




