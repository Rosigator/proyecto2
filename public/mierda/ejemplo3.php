<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Médicas</title>
</head>
<body>
<?php

$archivo = "citas.txt";

//var_dump(file_get_contents($archivo));
//var_dump(file($archivo));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['cita']) && $_POST['cita'] != '' && isset($_POST['nombre']) && $_POST['nombre'] != '') {

       if(is_writeable($archivo)){
           $reserva = $_POST['cita'] . ' : ' . $_POST['nombre'] . "\n";
           file_put_contents($archivo, $reserva, FILE_APPEND);
           //$fuente = fopen($archivo,'a+');
           //fwrite($fuente, $reserva);
           //fclose($fuente);
           echo "<h2>Cita guardada correctamente</h2>";
       } else {

        echo "<h2>La cita no ha podido ser guardada</h2>";

       }

    } else {
         // Volver a mostrar el formulario con los errores
    }

} else {

    include "formularioCitas.php";

}

?>

    
</body>
</html>