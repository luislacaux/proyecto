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
  
var set_datos = function(datos1,datos2){
      
    

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

function ObtieneDato(){
    var cant;
    $.ajax({
    data: "",
    type: "GET",
    async: false,
    dataType: "json",
    url: "../../webservices/profesor/datosgrupos.php",
    success: function(data){
        cant = data.datos;
       
     }
   });
    return cant;
  }
    
    
    

function _onpressed(comboBox2) 
{
   
   var grupo = ObtieneDato();
   
   var cant = grupo.length;
   console.log(cant);
    
   this._removeOptions( comboBox2 );
   for(var contador = 0; contador <cant ; contador++) {
              console.log("entre");
              this._insertOption(comboBox2,grupo[contador] , grupo[contador]);
      
   }
   comboBox2.selectedIndex = 0;
}
function _insertOption(comboBox, optionText, optionValue)
{
   var elOptNew = document.createElement('option');
   elOptNew.text = optionText;
   elOptNew.value = optionValue;
   try 
   {
      comboBox.add(elOptNew, null); // Modo estándar, que no funciona en IE
   }
   catch(ex) 
   {
      comboBox.add(elOptNew); // Sólo IE
   }
}
function _removeOptions(comboBox)
{
   for(var contador = comboBox.length - 1; contador > 0; contador--) 
   {
      comboBox.remove(contador);
   }
}
function cierra(){
window.close();
}




