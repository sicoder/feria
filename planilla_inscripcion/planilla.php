<?
include ("conexion.php");?>

<head>

<script language="javascript" src="jquery.js"></script>
<script language="javascript">
$(document).ready(function(){
   $("#nivel").change(function () {
           $("#nivel option:selected").each(function () {
            elegido=$(this).val();		
            $.post("jquery_del_proyecto.php", { elegido: elegido }, function(data){
            $("#area").html(data);
          });
	  });
   });
});
</script>

<script language="javascript">
$(document).ready(function(){
   $("#nivel").change(function () {
           $("#nivel option:selected").each(function () {
            elegido=$(this).val();		
            $.post("boton.php", { elegido: elegido }, function(data){
            $("#boton").html(data);
          });
	  });
   });
});
</script>

<script language="javascript">
$(document).ready(function(){
   $("#nivel").change(function () {
           $("#nivel option:selected").each(function () {
            elegido=$(this).val();		
            $.post("boton_profesor.php", { elegido: elegido }, function(data){
            $("#boton_profesor").html(data);
          });
	  });
   });
});
</script>

<script type="text/javascript">
  			
  			 function documento (funcion){
					if (funcion==""){
							 document.getElementById("mostrar_boton").innerHTML="";
							 return;
					} 
   					     // código para IE7+, Firefox, Chrome, Opera, Safari
							if (window.XMLHttpRequest){
									 xmlhttp=new XMLHttpRequest();
      					//código para IE6, IE5
							}else{
	 								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
							
					xmlhttp.onreadystatechange=function(){
					  if (xmlhttp.readyState==4 && xmlhttp.status==200){
					  
									document.getElementById("mostrar_boton").innerHTML=xmlhttp.responseText;
					}
				}
			 xmlhttp.open('GET','alumno2.php?jquery_boton='+funcion,true);
			 xmlhttp.send();
   		}
</script>

<script type="text/javascript">
  			
  			 function documento1 (funcion){
					if (funcion==""){
							 document.getElementById("mostrar_boton2").innerHTML="";
							 return;
					} 
   					     // código para IE7+, Firefox, Chrome, Opera, Safari
							if (window.XMLHttpRequest){
									 xmlhttp=new XMLHttpRequest();
      					//código para IE6, IE5
							}else{
	 								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
							
					xmlhttp.onreadystatechange=function(){
					  if (xmlhttp.readyState==4 && xmlhttp.status==200){
					  
									document.getElementById("mostrar_boton2").innerHTML=xmlhttp.responseText;
					}
				}
			 xmlhttp.open('GET','alumno3.php?jquery_boton2='+funcion,true);
			 xmlhttp.send();
   		}
</script>


<script type="text/javascript">
  			
  			 function documento2 (funcion){
					if (funcion==""){
							 document.getElementById("mostrar_boton3").innerHTML="";
							 return;
					} 
   					     // código para IE7+, Firefox, Chrome, Opera, Safari
							if (window.XMLHttpRequest){
									 xmlhttp=new XMLHttpRequest();
      					//código para IE6, IE5
							}else{
	 								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
							
					xmlhttp.onreadystatechange=function(){
					  if (xmlhttp.readyState==4 && xmlhttp.status==200){
					  
									document.getElementById("mostrar_boton3").innerHTML=xmlhttp.responseText;
					}
				}
			 xmlhttp.open('GET','alumno4.php?jquery_boton3='+funcion,true);
			 xmlhttp.send();
   		}
</script>

<script type="text/javascript">
  			
  			 function documentoprofesor (funcion){
					if (funcion==""){
							 document.getElementById("mostrar_boton_profesor").innerHTML="";
							 return;
					} 
   					     // código para IE7+, Firefox, Chrome, Opera, Safari
							if (window.XMLHttpRequest){
									 xmlhttp=new XMLHttpRequest();
      					//código para IE6, IE5
							}else{
	 								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
							
					xmlhttp.onreadystatechange=function(){
					  if (xmlhttp.readyState==4 && xmlhttp.status==200){
					  
									document.getElementById("mostrar_boton_profesor").innerHTML=xmlhttp.responseText;
					}
				}
			 xmlhttp.open('GET','profesor2.php?boton_profesor='+funcion,true);
			 xmlhttp.send();
   		}
		
		
</script>

<script type="text/javascript">
  			
  			 function documento_cientifico (funcion){
					if (funcion==""){
							 document.getElementById("boton_cientifico").innerHTML="";
							 return;
					} 
   					     // código para IE7+, Firefox, Chrome, Opera, Safari
							if (window.XMLHttpRequest){
									 xmlhttp=new XMLHttpRequest();
      					//código para IE6, IE5
							}else{
	 								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
							
					xmlhttp.onreadystatechange=function(){
					  if (xmlhttp.readyState==4 && xmlhttp.status==200){
					  
									document.getElementById("boton_cientifico").innerHTML=xmlhttp.responseText;
					}
				}
			 xmlhttp.open('GET','acientifico.php?jquery_boton_cientifico='+funcion,true);
			 xmlhttp.send();
   		}
</script>

<script type="text/javascript">
function wordCount() {


		textoArea = document.getElementById("resumen").value;
		numeroCaracteres=textoArea.length;
			primerBlanco= /^ /
			ultimoBlanco= / $/
			variosBlancos= /[ ]+/g
			textoArea= textoArea.replace (primerBlanco,"");
			textoArea= textoArea.replace (ultimoBlanco,"");
			textoArea= textoArea.replace (variosBlancos," ");
		
			textoAreaDividido= textoArea.split(" ");
			numeroPalabras= textoAreaDividido.length;

	
	//if(numeroPalabras>10){
		//alert("Maximo 250 palabras \nPalabras escritas "+numeroPalabras);
		document.getElementById("cantidadpalabras").innerHTML="Palabras escritas: "+numeroPalabras;
	//}
}
function wordCount2() {


		textoArea = document.getElementById("resumen").value;
		numeroCaracteres=textoArea.length;
			primerBlanco= /^ /
			ultimoBlanco= / $/
			variosBlancos= /[ ]+/g
			textoArea= textoArea.replace (primerBlanco,"");
			textoArea= textoArea.replace (ultimoBlanco,"");
			textoArea= textoArea.replace (variosBlancos," ");
		
			textoAreaDividido= textoArea.split(" ");
			numeroPalabras= textoAreaDividido.length;

	
	if(numeroPalabras>250){
		alert("Maximo 250 palabras \nPalabras escritas "+numeroPalabras);
		//document.getElementById("cantidadpalabras").innerHTML="Palabras escritas: "+numeroPalabras;
	}
}


</script>


</head>


<form action='asd.php' method='POST'>


<?
echo"$cantmaxi";
include ("del_proyecto.php");
echo "<br>";
include ("escuela.php");
echo"<br>";
include ("alumno1.php");
echo"<br>";
include ("profesor.php");
?>


<input name='asdg' id='asdg' type='submit'></input >
</form>
