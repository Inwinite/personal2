let text = "cat intro"; // variables del efecto tipeo
let i = 0; //variable i para el efecto tipeo
let button = document.getElementById("buttonMas"); // tag del boton
let terminal = document.getElementById("intro"); //tag de la consola
let h = 0; //referencia de altura en pixeles de consola
let bodyHeight = (document.getElementById("intro").offsetHeight) + (document.getElementById("consola2").offsetHeight);

//eventos click sobre el boton "mas"
button.addEventListener("click",function(){
//despliegue consola
   let stahp = setInterval(animation, 5);
    terminal.classList.remove("notshown");
    terminal.classList.add("shown");

    function animation(){

	if (h== bodyHeight+20) {
	    clearInterval(stahp);
      //animacion tipeo
          for (i;i < text.length;i++){

      	(function(i){
      	setTimeout(function(){
        document.getElementById("textoIntro").innerHTML += text.charAt(i)}, 200*i);
      })(i);
          }
      //remove de pipe y aparición de texto intro
          setTimeout(function(){
              document.getElementById("cuerpo").classList.remove("notshown");
      	      document.getElementById("cuerpo").classList.add("shown");
      	      document.getElementById("pipe").classList.add("notshown");
	          document.getElementById("consola2").classList.remove("notshown");
	          document.getElementById("consola2").classList.add("shown");
	  }, 3000);
	} else {
	    h++;
	    terminal.style.height = h + 'px';
	};
    };



});
