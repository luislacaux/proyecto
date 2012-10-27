<script language="javascript">
var numero = 0;
 
function addNewRow()
{
  // obtenemos acceso a la tabla por su ID
  var TABLE = document.getElementById("tabla");
  // obtenemos acceso a la fila maestra por su ID
  var TROW = document.getElementById("celda");
 
  // tomamos la celda
  var content = TROW.getElementsByTagName("td");
 
  // creamos una nueva fila
  var newRow = TABLE.insertRow(-1);
  newRow.className = TROW.attributes['class'].value;
 
  // creamos una nueva celda
  var newCell = newRow.insertCell(newRow.cells.length)
 
  // creamos una nueva ID para el examinador
  newID = 'file_' + (++numero);
 
  // creamos un nuevo control
  txt = '<input type="file" id="' + newID  + '" size="50" />'
 
  // y lo asignamos a la celda
  newCell.innerHTML = txt
 
  // aviso 
  alert(txt)
}
 
function removeLastRow()
{
  // obtenemos la tabla
  var TABLE = document.getElementById("tabla");
 
  // si tenemos mas de una fila, borramos
  if(TABLE.rows.length > 2)
  {
  TABLE.deleteRow(TABLE.rows.length-1);
  --numero;
  }
}
 
function verElementos(evento)
{
  for (i=0; i<=numero; i++)
  {
    var my_id = "file_" + i;
    var my_file = document.getElementById(my_id);
    alert ("id: " + my_id + " value: " + my_file.value);
  }
}
</script>