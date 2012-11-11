var crearlab = function(dato){
    $.ajax({
    data: "dato="+dato,
    type: "GET",
    async: false,
    dataType: "json",
    url: "../../webservices/crearlaboratorio.php",
    success: function(data){
        restultadolab(data);
        
       
     }
   });
    
  };
    
  var resultadolab =function(data){
   $("div.info").html("").show();
       $("div.info").append("tipo: "+data.semestre);
     
        //var asd= data.tipo;
        //console.log(asd);
       if (data.tipo == "OK"){
         //console.log("prof");
           location.href='profesor/index.php'; } 
       else {
           if(data.tipo=="ESTUDIANTE"){
           //console.log("estu");
               location.href='estudiante/index.php';
           }
           //console.log(asd);
           $("div.info").append("El rut no es correcto");
       }
      
  };
  
  
 
    
    
    






function datosform(){
    var cant = 0;
  $.ajax({
    data: "",
    type: "GET",
    async: false,
    dataType: "json",
    url: "../../webservices/datosformulario.php",
    success: function(data){
        cant = data.datos;
       
     }
   });
    return cant;
  }
 
  function cierra(){
    window.close();
  }
  
function _onpressed(comboBox2) 
{
   
   var nombre = datosform();
   var nombres = nombre.split(',');
   var cant = nombres[0];
    
   this._removeOptions( comboBox2 );
   for(var contador = 1; contador <= cant ; contador++) {
              console.log("entre");
              this._insertOption(comboBox2,nombres[contador] , nombres[contador]);
      
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

