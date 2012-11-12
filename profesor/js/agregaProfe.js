var agregaProfesor = function(datosP){
  $.ajax({
    data: "dp="+datosP, 
    type: "GET",
    async: false,
    dataType: "json",
    url: "../../webservices/profesor/agrega_profe.php",
  
    success: function(){ 
        results("OK");
    }
       
   });
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




