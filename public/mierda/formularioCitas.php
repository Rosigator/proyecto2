<?php include_once 'funciones.php'; ?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">

    <h3>Introduce tu horario de cita</h3>
    Fecha: <input type="date" name="cita" <?php mostrar_campo('cita') ?> placeholder="dd/mm/aaaa" value="2021-10-04" min="2021-10-04">
    <?php mostrar_error_campo('cita', $errores) ?><br><br>
    Nombre: <input type="text" name="nombre" <?php mostrar_campo('nombre') ?> placeholder="Introduce tu nombre completo" size=25 maxlenght="18" minlenght="3">
    <?php mostrar_error_campo('nombre', $errores) ?><br><br>
    <input type="submit" value="Agregar cita">

    <h4> ¿Eres el doctor?</h4>
    <p><a href="doctor.php">Haz clic aquí...</a></p>

</form>