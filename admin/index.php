<?php 


    $resultado = $_GET['resultado'] ?? null;
    require '../incluides/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        
        <?php if( intval( $resultado ) === 1 ): ?>
            <p class="alerta exito">Anuncio Creado Correctamente</p>
        <?php endif; ?>

        <?php if( intval( $resultado ) === 2 ): ?>
            <p class="alerta exito">Anuncio Actualizado Correctamente</p>
        <?php endif; ?>

        <?php if( intval( $resultado ) === 3 ): ?>
            <p class="alerta exito">Anuncio Eliminado Correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>
        <a href="/admin/propiedades/actualizar.php" class="boton boton-amarillo">Actualizar Propiedad</a>
        <a href="/admin/propiedades/borrar.php" class="boton boton-rojo">Eliminar Propiedad</a>
    </main>



<?php 
    incluirTemplate('footer');
?>