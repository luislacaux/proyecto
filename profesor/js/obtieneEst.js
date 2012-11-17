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
  
var set_datos = function(datos){
    

}
 function set_Asis(datos){
    console.log(datos);
    /*$.ajax({
    data: "datos="+datos, 
    type: "POST",
    async: false,
    dataType: "json",
    url: "../../webservices/profesor/CheckAsis.php",
  
    success: function(data){ 
        
    }
    
       
   });*/
   
  }



function cierra(){
window.close();
}




