<?php

$fuente = fopen('lista.txt', 'a+');

fwrite($fuente, "Hola Mundo!!!\n");

fclose($fuente);

$fuente = fopen('lista.txt', 'a+');

fwrite($fuente, "Esta es otra linea\n");

fclose($fuente);


?>