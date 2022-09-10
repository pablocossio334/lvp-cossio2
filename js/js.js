
function cerrarVentana(){
    var V;
    V=document.getElementById("ventana");
    V.style.display="none";
}
function abrirVentana(img){
    V=document.getElementById("ventana");
    
    V.style.display="inline-block";
    I=document.getElementById('fotoModal').src=img;
    window.scroll(0,250);
}
