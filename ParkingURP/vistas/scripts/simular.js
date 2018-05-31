 function aleatorioentrar(){
    var junto;
    var primeraleatorio=Math.round(Math.random()*12);
     switch(""+primeraleatorio) {
      case "0":
      var letraconcatenada="A";
      var aleatorio = Math.round(Math.random()*16)+1;
      break;

      case "1":
      var letraconcatenada="A";
      var aleatorio = Math.round(Math.random()*16)+1;
      
        break;
     case "2":
       var letraconcatenada="B";
       var aleatorio = Math.round(Math.random()*18)+1;
       
        break;
     case "3":
        var letraconcatenada="C";
        var aleatorio = Math.round(Math.random()*21)+1;
        
        break;
      case "4":
        var letraconcatenada="D";
        var aleatorio = Math.round(Math.random()*25)+1;
        
        break;
       case "5":
        var letraconcatenada="E";
        var aleatorio = Math.round(Math.random()*26)+1;
       
        break;
       case "6":
        var letraconcatenada="F";
        var aleatorio = Math.round(Math.random()*28)+1;
        
        break;
       case "7":
        var letraconcatenada="G";
        var aleatorio = Math.round(Math.random()*31)+1;
        
        break;
       case "8":
        var letraconcatenada="H";
        var aleatorio = Math.round(Math.random()*33)+1;
         
        break;
         case "9":
       var letraconcatenada="I";
       var aleatorio = Math.round(Math.random()*33)+1;
       
        break;
        case "10":
       var letraconcatenada="K";
       var aleatorio = Math.round(Math.random()*9)+1;
        
        break;
        case "11":
       var letraconcatenada="L";
       var aleatorio = Math.round(Math.random()*58)+1;
        
        break;
        case "12":
       var letraconcatenada="M";
       var aleatorio = Math.round(Math.random()*48)+1;
       
        break; 
        default:
       
}
     junto="s"+letraconcatenada+aleatorio;
     return junto;
}

function aleatoriomotos(){
  var primeraleatoriomoto=Math.round(Math.random()*7)+1;
    var junto="sJ"+primeraleatoriomoto;
 return junto;
  }

  function aleatoriobicicletas(){
var primeraleatoriobici=Math.round(Math.random()*7)+1;
    var junto="sN"+primeraleatoriobici;
 return junto;

  }
/*var hola=false;
function comparar(valoracomparar,esigual){
$.post("../ajax/C_Seccion.php?op=pedirEstacionamientosLlenos", {}, function(data, status){
var nuevoarray=new Array();
 data = JSON.parse(data);
 nuevoarray=data;
 //console.log("el tamaño del array es"+nuevoarray.length);
 console.log("los valores que llegaron al metodo comparar son:"+valoracomparar+" y "+esigual);
 for (var i = 0; i < nuevoarray.length; i++) {
  console.log(" se comparo "+nuevoarray[i].nombre+" con "+valoracomparar);
    if(nuevoarray[i].nombre==valoracomparar){
      esigual=true;
      hola=true;
     console.log("El nuevo valor de esigual es:"+esigual);
      break;
 }
  
  }
  console.log("el valor que retorna comparar es:"+esigual);
  });
return hola;
  }*/
 
/*function entrar(junto){
  // var finaligual=comparar(junto,false);
console.log("el valor que toma junto es:"+junto);
  vehiculoOcupado(junto);
var lugar=document.getElementById("lugarocupado");
return lugar;
} 
*/

  

function vehiculosOcupados(){
$.post("../ajax/C_Seccion.php?op=vehiculosOcupados", {}, function(data, status){
  var tamañodelarreglodefinitivo;
  try{data = JSON.parse(data);
    tamañodelarreglodefinitivo=data.count;
   document.getElementById("numerototaldecarros").innerHTML=tamañodelarreglodefinitivo;
  }
  catch(err){
    tamañodelarreglodefinitivo=0;
document.getElementById("numerototaldecarros").innerHTML=tamañodelarreglodefinitivo;
 }
  
  });
}



    
  
/*  
   function entrarmoto(){
      var esigual=false;
for(var i=0;i<arraymotos.length;i++){
if(junto===arraymotos[i]){
  esigual=true;
}
}

if(esigual===true){
entrarmoto();
}
else{
  arraymotos.push(""+junto);
  arraytotal.push(""+junto);
  var tamañodelarreglo=arraytotal.length;
  document.getElementById("lugarocupado").innerHTML=junto;
  document.getElementById("numerototaldecarros").innerHTML=tamañodelarreglo;
    document.getElementById(junto).style.fill="#FF2D00";
}
         }
    //  alert("el tamaño del arreglo:"+tamaño);

  return junto; }
/*
   function entrarbici(){
    var primeraleatoriobici=1+Math.round(Math.random()*7)+1;
    var tamañodelarreglo=arraybici.length;
      var junto="sN"+primeraleatoriobici;
      
      var esigual=false;

      if(tamañodelarreglo>=8){
alert("número máximo de bicicletas alcanzado");
}
else{
      for(var i=0;i<arraybici.length;i++){  
      if(junto===arraybici[i]){
        esigual=true;
      }

   }
if(esigual===true){
//alert("hay un valor igual en el arreglo");
entrarbici();
//alert("se pintará otro");
} 

else{
  
alert(junto);
  document.getElementById(junto).style.fill="#FF2D00";
      arraytotal.push(""+junto);
      arrayvici.push(""+junto);
      var tamañodelarreglo=arraytotal.length;
       document.getElementById("lugarocupado").innerHTML=junto;
       document.getElementById("numerototaldecarros").innerHTML=tamañodelarreglo;
      //    alert("el tamaño del arreglo:"+tamaño);
     
}

     }
return junto; }
    */


