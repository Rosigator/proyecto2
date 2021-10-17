<?php

if (!$_POST) {

    include "formulario.php";
} else {

    $firstfile = "./pacientes/paciente1.txt";
    if (!file_exists($firstfile)) {

        $recurso = fopen($firstfile, "x") or exit("No se pudo abrir el archivo");
        $texto = 'Nombre paciente: ' . $_POST["nombre"] . ';' . chr(10) . 'Fecha de alta: ' . $_POST["fecha"] . ';' . chr(10);

        fwrite($recurso, $texto);
        fclose($recurso);
    } else {

        $carpeta = "./pacientes";
        $archivos = array_diff(scandir($carpeta), array('.', '..'));
        sort($archivos);
        $lastpos = count($archivos) - 1;
        $lastfile = $archivos[$lastpos];
        $lastnum = intval(substr($lastfile, -5, 1));
        $newnum = $lastnum + 1;
        $stringnum = strval($newnum);
        $nombrefich = 'paciente' . $stringnum . '.txt';
        $recurso = fopen('./pacientes/' . $nombrefich, "x") or exit("No se pudo abrir el archivo");
        $texto = 'Nombre paciente: ' . $_POST["nombre"] . ';' . chr(10) . 'Fecha de alta: ' . $_POST["fecha"] . ';' . chr(10);

        fwrite($recurso, $texto);
        fclose($recurso);
    }

    echo "gracias por todo";
}
