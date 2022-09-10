let audio=document.getElementById("music-rep");

let temas=[
{"nombre":"Los Vecinos de la Paca -Maquitos",
"hubicacion":"mp3/y2mate.com - LOS VECINOS DE LA PACA TEMA MARQUITO.mp3",

},
{
    "nombre":"Los vecinos de la Paca-Los vecinos de la Paca",
    "hubicacion": "mp3/y2mate.com - LOS VECINOS DE LA PACA.mp3",
},
{
    "nombre":"Los vecinos de la Paca-Como Chino",
    "hubicacion" :"mp3/y2mate.com - LOS VECINOS DE LA PACACHINOOO.mp3",
},
{   "nombre":"Los vecinos de la Paca-MI barrio",
    "hubicacion": "mp3/y2mate.com - Mi Barrio Los vecinos de la Paca.mp3",
},
{
    "nombre":"Los vecinos de la Paca-Mi Laguna Mental",
    "hubicacion": "mp3/y2mate.com - Mi Laguna Los Vecinos de la Paca Official Video.mp3",
}

]
number=0;
var cont=0;
listar();


function contador(){
    var contador = document.getElementById("contador");
    var tiempo;
	
    tiempo= Math.round(audio.duration-audio.currentTime);
    var segs=tiempo.toString();

    contador.value =segs.pasar_a_HHMMSS(); ;
    if(contador.value=='00:00')
    {next();
        clearInterval();
        
        
    }
}

function play(){
    
    
    audio.play();
    marcaTema(number);
    if(document.querySelector("#play").innerHTML=='►')
    {    
        document.querySelector("#play").innerHTML='║';
    }
    else
    {
        document.querySelector("#play").innerHTML='►';
        audio.pause();
    }

    document.getElementById("info-tema").innerHTML=temas[number].nombre;
    setInterval('contador()',1000);
}
function next(){
    number=number+1;
    if(number>=temas.length)
    number=0;
    document.querySelector("#play").innerHTML='►';
    audio.src=temas[number].hubicacion;
    play();
}
function prev(){
    number=number-1;
    if(number<0)
    number=temas.length-1;
    document.querySelector("#play").innerHTML='►';
    audio.src=temas[number].hubicacion;
    play();
}
function stop(){
    audio.pause();
    document.querySelector("#play").innerHTML='►';
    audio.src=temas[number].hubicacion; 

}
function cambia_vol(){
    audio.volume=document.getElementById("volume").value;
}
function elegirTema(numero)
{ number=numero;
    audio.src=temas[number].hubicacion;
    document.querySelector("#play").innerHTML='►';
    play();

}
function listar(){
    let i;
    for(i=0;i<temas.length; i++)
    document.getElementById("lista").innerHTML+="<li class='track' id='"+i+"'onclick='elegirTema("+i+")'>-"+temas[i].nombre+"</li>";
    audio.src=temas[number].hubicacion; 
}
function marcaTema(numero)
{let i;
    for(i=0;i<temas.length;i++)
    {
    if(parseInt(numero)==parseInt(i))
    {
        document.getElementById(i).style.color="green";
        number=numero;
    }
    else
    document.getElementById(i).style.color="white";
    }
}
String.prototype.pasar_a_HHMMSS = function () {
    var num_segs    = parseInt(this);
    var horas   = Math.floor(num_segs / 3600);
    var minutos = Math.floor((num_segs - (horas * 3600)) / 60);
    var segundos = num_segs - (horas * 3600) - (minutos * 60);
    if (horas   < 10) {horas   = "0"+horas;}
    if (minutos < 10) {minutos = "0"+minutos;}
    if (segundos < 10) {segundos = "0"+segundos;}
    var tiempo    = minutos+':'+segundos;
    return tiempo;
}