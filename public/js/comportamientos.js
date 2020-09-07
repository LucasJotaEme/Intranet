

const $seleccionArchivos = document.querySelector("#sistema_logo"),
  $imagenPrevisualizacion = document.querySelector("#imagen");

// Escuchar cuando cambie
$seleccionArchivos.addEventListener('change', () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
});


function envioMail(){
  var motivo= document.getElementById("selectMotivo");
  var mensaje= document.getElementById("inputMensaje");
  var avisoRojo =document.getElementById("avisoMensaje");

  if (mensaje.value.length == 0 ){
    avisoRojo.innerHTML="No se permiten descripciones vacías.";
  }else{
    avisoRojo.style.color="#0F9FA8";
    avisoRojo.innerHTML="Enviando..";
    location.href ="http://intranet.unraf.edu.ar/Intranet/public/index.php/user/email/" + motivo.options[motivo.selectedIndex].text + "/" + mensaje.value;
  }
  
}

function leerMas(elemento){
   if (elemento.innerHTML == "Leer más")
    elemento.innerHTML = "Leer menos";
   else{
    elemento.innerHTML = "Leer más";
   }
}

