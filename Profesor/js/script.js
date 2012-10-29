var num_campos=3;//numero de campos input por fila;  esta variable debería actializarse dinamicamente, debería leer el número de inputs, esta te la dejo de tarea

function nuevo(){
    //alert("nuevo")
    $("#tablaUsuarios").append("<tr>"+
        "<td><input name='prod[]' type='text' size='15' placeholder='Ingrese Pregunta' required/></td>"+
        "<td><input name='cant[]' type='text' size='10' placeholder='Ingrese Solucion' required/></td>"+
        "<td><input name='desc[]' type='text' size='10' placeholder='Ingrese Unidad' required/></td>"+
        "<td><input type='button' value='Eliminar' onclick='eliminar(this)' class='btn btn-danger eliminar'></td>"+
        "</tr>")
}

//Ctrl + Shift + j     para ver la consola (consejo: usa chrome)
function guardar(e){
    //NOTA: Recuerda SIMPRE VALIDAR los campos del formulario del lado del servidor y el cliente.
    e.preventDefault()
    var res = $("form#f").serializeArray();
    console.log(res)//descomenta esta linea y mira la consola, así llegan nuestros datos,
    var npreg = res.length;
    var cont = 0;
    $("#result").empty();//limpiar la caja
    var preguntas = [];//un array que contendra a los arrays (filas o productos)
    var pregunta = [];//array para cada una de las filas 
    var resultado = $nombre_formulario;
    for (i=0;i<npreg;i++){//debe imprimer de 4 en 4 porque estan todos los inputs en un solo array
  
        $("#result").append(res[i].value);
        
        //VALIDAR SIEMPRE
        pregunta.push(res[i].value);//esta linea agrega los datos a nuestro array
        
        if(cont < num_campos-1 ){
            $("#result").append(", ");
            cont++;
        }
        else{
            $("#result").append(" <br />");
            preguntas.push(pregunta);
            pregunta = [];
            cont=0;
        }
    }
    console.log(preguntas);//productos es un array que contiene n arrays (n productos)
    
    for(j=0;j<preguntas.length;j++){
        for (var k=0; k<3; k++) {
                resultado = resultado + "," + preguntas[j][k] + ",";
                
           }
         
    }

    resultado = jQuery.trim(resultado).substring(0, resultado.length-1);
    
 
    $(document).ready(function(){getPreguntas(resultado)});
    
}

var getPreguntas =function(id){
    $.ajax({
    data: "preguntas="+id,
    type: "GET",
    dataType: "json",
    url: "../../webservices/profesor/crearformulario.php",
    success: function(data){
       restultadoformulario(data);
     }
   });
    
}

var restultadoformulario = function(data){
       $("div.info").html("").show();
       $("div.info").append("Respuesta: "+data.respuesta);
       if (data.respuesta == 1){
           location.href='profesor/formulario/crear_formulario.html'; } 
       else {
           $("div.info").append("no se pudo guardar");
       }
      
  };

function eliminar(e){
    $(e).parent().parent().fadeOut(400).remove();
/**
     * el boton eliminar esta jerarquicamente asi:
     *      form > table > tr > td > input.eliminar
     * por esta razon se debe subir dos posiciones 
     */
}

function iniciar(){
    //alert("Hola Jquery")
    
    $("#newp").on("click",nuevo)//si dan click a #newp ejecutar nuevo
    $("#guardar").on("click",guardar)
}

$(document).on("ready",iniciar)//cuando el document esté 'ready' ejecutar la funcion 'iniciar'