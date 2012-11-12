var getlaboratorios = function(arr){
  var form = "";
  $.ajax({
    data: arr, 
    type: "GET",
    async: false,
    dataType: "json",
    url: "../../webservices/profesor/obtener_labs.php",
  
    success: function(data){ 
        form = data.fecha+"$"+data.semestre;
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




