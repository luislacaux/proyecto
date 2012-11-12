var getEstudiantes = function(grupo){
  var form = "";
  $.ajax({
    data: "gr="+grupo, 
    type: "GET",
    async: false,
    dataType: "json",
    url: "../../webservices/profesor/obtener_est.php",
  
    success: function(data){ 
        form = data.nombre+"$"+data.rut;
        results(form);
    }
       
   });
   return form;
  };
  
var muestra = function(){
    var f = getFormularios();
    console.log(f);
};

var results = function(txt){

     $("div.info2").html("").show();
     $("div.info2").append(txt);
      
  };

  function cierra(){
window.close();
}




