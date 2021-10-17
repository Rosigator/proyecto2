<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Médicas</title>
</head>

<body>
    <?php
    include 'funciones.php';
    $errores = [];
    $archivo = "citas.txt";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (!isset($_POST['cita']) || $_POST['cita'] == '') {

            $errores['cita'] =  'No he recibido la cita';
        } elseif (strlen($_POST['nombre']) < 3 || strlen($_POST['nombre']) > 18) {

            $errores['nombre'] =  'La longitud del nombre no es válida';
        } //elseif

        if (!isset($_POST['nombre']) || $_POST['nombre'] == '') {

            $errores['nombre'] =  'No he recibido el nombre';
        }

        $name = $_POST["nombre"];
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errores['nombre'] =  'Esto no es un nombre válido';
        }

        if ($errores) {
            mostrar_errores($errores);
            include "formularioCitas.php";
        } elseif (is_writeable($archivo)) {
            $fuente = fopen($archivo, 'a+');
            $reserva = $_POST['cita'] . ' : ' . $_POST['nombre'] . "\n";
            fwrite($fuente, $reserva);
            fclose($fuente);
            echo "<h2>Cita guardada correctamente</h2>";
            include 'usuario.php';
        } else {

            echo "<h2>La cita no ha podido ser guardada</h2>";
        }
    } else {

        include 'formularioCitas.php';
    }

    ?>


</body>

</html>