<?php
session_start();
if (isset($_SESSION['user'])) {

} else {
    header("Location: ../index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mostrar errores
    error_reporting(E_ALL ^ E_NOTICE);

    // Conexión a la BD
    include_once("conexion.php");

    // Datos del formulario
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $categoria = $_POST['categoria'];

    // Procesar la imagen
    $imagen = $_FILES['imagen'];
    $rutaDestino = "../uploads/";
    $nombreImagen = time() . "_" . basename($imagen['name']);
    $rutaCompleta = $rutaDestino . $nombreImagen;

    if (move_uploaded_file($imagen['tmp_name'], $rutaCompleta)) {
        // Insertar en la base de datos
        $sql = "INSERT INTO `articulos` (`descripcion`, `pu`, `cantidad`, `id_categoria`, `imagen`) 
                VALUES ('$descripcion', '$precio', '$cantidad', '$categoria', '$rutaCompleta');";

        $ejecutar_sql = $conexion->query($sql);

        if ($ejecutar_sql) {
            echo "<script>   
                    alert('... Artículo agregado correctamente ...');
                </script>";
        } else {
            echo "<script>   
                    alert('... No fue posible agregar el artículo, verifique por favor...');
                </script>";
        }
    } else {
        echo "<script>   
                alert('... Error al subir la imagen, intente de nuevo ...');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio|PHP Proyecto UTD</title>
    <link rel="stylesheet" href="../css/estilos.css" type="text/css">
</head>

<body>
    <header>
        <div id="logotipo">
            <img src="../img/logophp.png" alt="Imagen Django" title="Django">
            <h1>PHP Proyecto Web</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="acercade.php">Acerca de</a></li>
            <li><a href="mision.php">Misión</a></li>
            <li><a href="vision.php">Visión</a></li>
            <li><a href="registrar_articulo.php">Registrar artículos</a></li>
            <li><a href="mostrar_articulos.php">Ver artículos</a></li>
            <li><a href="cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
    <section id="content">
        <div class="box">
            <h1>Registrar artículo</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td><label for="descripcion">Descripción:</label></td>
                        <td><input type="text" name="descripcion" autofocus required></td>
                    </tr>
                    <tr>
                        <td><label for="precio">Precio:</label></td>
                        <td><input type="number" name="precio" maxlength="10" required></td>
                    </tr>
                    <tr>
                        <td><label for="cantidad">Cantidad:</label></td>
                        <td><input type="number" name="cantidad" maxlength="10" required></td>
                    </tr>
                    <tr>
                        <td><label for="categoria">Categoría:</label></td>
                        <td>
                            <select name="categoria" id="categoria">
                                <?php
                                include_once('conexion.php');
                                $sql = "SELECT * FROM categorias";
                                $ejecucion_sql = $conexion->query($sql);

                                while ($fila = $ejecucion_sql->fetch_assoc()) {
                                    echo '<option value="' . $fila['id'] . '">' . $fila['descripcion'] . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="imagen">Imagen:</label></td>
                        <td><input type="file" name="imagen" accept="image/*" required></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="enviar" value="Enviar">
                        </td>
                        <td>
                            <input type="reset" name="limpiar" value="Limpiar">
                        </td>
                    </tr>
                </table>
            </form>
            <hr>
        </div>
    </section>
    <footer>
        <p>PHP con Jose &copy; 2024 | Visitado el: 01/10/24</p>
    </footer>
</body>

</html>
