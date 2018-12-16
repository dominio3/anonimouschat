function mostrar() {

}

function logout(){

session_destroy();

}

function limpiar(){
  //confirm("¿Está seguro que desea eliminar todos los registros?");
var req = new XMLHttpRequest();
req.open('GET', 'privacidad.php', true);
req.send();

}

function ajax(){
  var req = new XMLHttpRequest();
  req.onreadystatechange = function(){
    if (req.readyState == 4 && req.status == 200) {
      document.getElementById('chat').innerHTML = req.responseText;
    }
  }
  req.open('GET', 'chat.php', true);
  req.send();
}
//linea que hace que se refreseque la pagina cada segundo
setInterval(function(){ajax();}, 1000);
