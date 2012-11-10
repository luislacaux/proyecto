var datosform = function(){
  $.ajax({
    data: "",
    type: "GET",
    dataType: "json",
    url: "webservices/profesor/datosformulario.php",
    success: function(data){
       restultadodatosform(data);
       restultadodatosform2(data);
     }
   });
  };
  var datosform2 = function(){
  $.ajax({
    data: "",
    type: "GET",
    dataType: "json",
    url: "webservices/profesor/datosformulario.php",
    success: function(data){
       restultadodatosform2(data);
     }
   });
  };
var restultadodatosform = function(data){
      $("div.info").html("").show();
      $("div.info").append("cantidad: "+data.cantidad);
       
      console.log(data.cantidad);
     
       return data.cantidad;
      
  };
var restultadodatosform2 = function(data){
       $("div.info").html("").show();
       $("div.info").append("nombre: "+data.nombre);
     console.log(data.nombre);
       
       return data.nombre;
      
  };


  function cierra(){
window.close();
  }
function _onpressed(comboBox2) 
{
   //var cont = datosform(); 
   //var nombres = datosform2();
   var cont = 2;
   var nombre = new Array ('hola','hcasc');
   this._removeOptions( comboBox2 );
   for(var contador = 0; contador < cont ; contador++) {
                console.log("entre");
              this._insertOption(comboBox2,nombre[contador] , nombre[contador]);
      
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

