<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>