var agregarContacto = document.getElementById("agregar");
var formulario = document.getElementById('formulario_crear_usuario');
var action = formulario.getAttribute('action');

function crearUsuario() {
  var formulario_datos = new FormData(formulario);
  for ([key, value] of formulario_datos.entries()){
    console.log(key + ": " + value);
  }
  var xhr = new XMLHttpRequest();
  xhr.open('POST', action, true);
  xhr.setRequestHeader('X-Request-With', 'XMLHttpRequest');
  xhr.onreadystatechange = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
      var resultado = xhr.responseText;
      console.log("resultado" + resultado);
      var json = JSON.parse(resultado);
    }
  };
  xhr.send(formulario_datos);
}

agregarContacto.addEventListener('click', function(e){
  e.preventDefault();
  crearUsuario();
});
