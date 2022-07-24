<?php
/* importar el archivo usuario.php */
require_once("./php/Usuario.php");

/* instanciar la clase Usuario */
$usuario = new Usuario();

/* asignar valores a las propiedades de Usuario con los valores del formulario */
$usuario->tipo_documento = $_POST['tipo_documento'];
$usuario->identificacion = intval($_POST['identificacion']);
$usuario->nombre = $_POST['nombre'];
$usuario->apellido = $_POST['apellido'];
$usuario->genero = $_POST['genero'];
$usuario->correo = $_POST['correo'];
$usuario->contacto = intval($_POST['contacto']);
$usuario->estudios = $_POST['estudios'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial Final TR-03</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section class="section pt-5">
        <div class="container">
            <div class="col-md-12 text-center">
                <h1>Parcial Final TR-03</h1>
            </div>
            <table class="table table-bordered mt-4">
                <thead class="text-center bg-secondary">
                    <tr>
                        <th colspan="2">
                            <h3>Reporte de Usuario</h3>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="d-block">Tipo Documento</span>
                            <!-- mostrar tipo de documento -->
                            <?php echo $usuario->tipo_documento?>
                        </td>
                        <td>
                            <span class="d-block">Identificación</span>
                            <!-- mostrar numero identificacion -->
                            <?php echo $usuario->identificacion?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-block">Nombre</span>
                            <!-- mostrar nombre -->
                            <?php echo $usuario->nombre?>
                        </td>
                        <td>
                            <span class="d-block">Apellido</span>
                            <!-- mostrar apellido -->
                            <?php echo $usuario->apellido?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-block">Correo</span>
                            <!-- mostrar correo -->
                            <?php echo $usuario->correo?>
                        </td>
                        <td>
                            <span class="d-block">Telefono</span>
                            <!-- mostrar telefono -->
                            <?php echo $usuario->contacto?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="d-block">Genero</span>
                            <!-- mostrar genero -->
                            <?php echo $usuario->genero?>
                        </td>
                        <td>
                            <span class="d-block">Estudios</span>
                            <?php
                                /* recorrer la propiedad estudios definida como array */
                                foreach($usuario->estudios as $estudio){
                                    echo $estudio.', ';
                                }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="col-12 mt-3">
                <a href="index.php" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </section>
</body>
</html>