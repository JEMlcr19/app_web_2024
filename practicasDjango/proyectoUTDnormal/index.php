<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Inicio|PHP Proyecto UTD
    </title>
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>

<body>
    <header>
        <div id="logotipo">
            <img src="img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <?php
            if (isset($_SESSION['user'])) {
                echo '
                <li><a href="index.php" >Inicio</a></li>
                <li><a href="php/acercade.php">Acerca de</a></li>
                <li><a href="php/mision.php">Mision</a></li>
                <li><a href="php/vision.php">Vision</a></li>
                <li><a href="php/registrar_articulo.php">Registrar articulos</a></li>
                <li><a href="php/mostrar_articulos.php">Ver articulos</a></li>
                <li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
                ';
            } else {
                echo '
                <li><a href="index.php" >Inicio</a></li>
                <li><a href="php/inicio_sesion.php">Iniciar sesión</a></li>
                <li><a href="php/registro.php">Registrarse</a></li>
                ';
            }
            ?>

        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <?php
            if (isset($_SESSION['mensaje']) == "inicio_sesion") {
                echo '<div class="alert-success">
                    Inicio de sesión exitoso
                </div>';
                unset($_SESSION['mensaje']); // Eliminar el mensaje después de mostrarlo
            }

            if (isset($_COOKIE['mensaje']) && $_COOKIE['mensaje'] === 'cerro_sesion') {
                echo '<div class="alert-warning">
                        Cerró sesión
                    </div>';

                // Eliminar la cookie después de mostrar el mensaje
                setcookie("mensaje", "", time() - 3600, "/"); // Eliminar la cookie
            }


            ?>

            <h1>Inicio</h1>
            <hr>
            <?php
            if (isset($_SESSION['user'])) {
                echo "<p>.:: ¡Bienvenido a la página de Inicio, " . htmlspecialchars($_SESSION['user']) . "! ::.</p>";
            } else {
                echo "<p> Bienvenido. Por favor, inicia sesión. </p>";
            }
            ?>
        </div>
    </section>
    <footer>
        <p>PHP con Jose &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>

</html>