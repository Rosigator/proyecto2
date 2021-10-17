<?php
  $archivo = fopen("citas.txt", 'r') or die("Se produjo un error al abrir el archivo");
  
  $texto = "";
  
  //Mientras haya un línea que obtener, se concatena el contenido de la línea con la variable texto
  while($linea = fgets($archivo))
  {
	 $texto .= $linea. "<br>";
  }
 
  fclose($archivo);
  
  echo $texto;
  
?>