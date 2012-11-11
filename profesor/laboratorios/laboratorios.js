function datosform(){
    var cant = 0;
  $.ajax({
    data: "",
    type: "GET",
    async: false,
    dataType: "json",
    url: "../../webservices/datosformulario.php",
    success: function(data){
        cant = data.cantidad;
       
     }
   });
    return cant;
  }
 function datosform2(){
  var opt = "";
  $.ajax({
    data: "",
    type: "GET",
    async: false,
    dataType: "json",
    url: "datosformulario.php",
    success: function(data){
        opt = data.nombre;
       
     }
   });
   //opt = data.nombre;
   return opt;
  }



  function cierra(){
    window.close();
  }
  
function _onpressed(comboBox2) 
{
   var cant = datosform();
   var nombre = datosform2();
   var nombres = nombre.split(',');
   console.log("cant");
   console.log("nombre");
   
   //var cant = 4;
   //var nombres = new Array ('hola','hcasc');
   this._removeOptions( comboBox2 );
   for(var contador = 0; contador < cant ; contador++) {
                console.log("entre");
              this._insertOption(comboBox2,nombres[contador] , nombres[contador]);
      
   } 
   //this._insertOption(comboBox,nombres[0].nombres[0]);
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

