<h1 class="nombre-pagina">Nuevo Servicio</h1>
<p class="descripcion-pagina">Ingresa datos en los campos para agregar un servicio.</p>

<?php
    include_once __DIR__ . "/../templates/barra.php";
    include_once __DIR__ . '/../templates/alertas.php';
?>
<h2>Llena el Formulario</h2>

<form action="/servicios/crear" method="POST" class="formulario">
    <?php include_once __DIR__ . '/formulario.php' ?>
    <input type="submit" class="boton" value="Guardar">
</form>