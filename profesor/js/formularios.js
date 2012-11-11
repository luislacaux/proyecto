var getformularios = function(arr){
  var form = "";
  $.ajax({
    data: arr, 
    type: "GET",
    async: false,
    dataType: "json",
    url: "formularios.php",
  
    success: function(data){ 
        form = data.id+"$"+data.nombre+"$"+data.profesor+"$"+data.fecha;
        results(form);
    }
//Cuando se ejecuta el archivo "insertar3" se ejecuta "results2"
//Esta funcion se encuentra en este mismo archivo
       
   });
   return form;
  };
  
var muestra = function(){
    var f = getFormularios();
    console.log(f);
};

var results = function(txt){

     $("div.info2").html("").show();
// Escribe en el Div "info" de el archivo "index.html" la informacion señalada en "append"
     $("div.info2").append(txt);
      
  };

  function cierra(){
window.close();
}




