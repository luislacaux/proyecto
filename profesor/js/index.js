var datos = function(){
            var nombre = "";
                $.ajax({
                    data: "",
                    type: "POST",
                    async: false,
                    dataType: "json",
                    url: "../webservices/profesor/datosprofconect.php",
                    success: function(data){
                        nombre = data.nombre;
                        }
                    });
                return nombre;
};