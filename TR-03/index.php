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
            <div class="col-md-12">
                <!-- enviar datos del formulario a reporte.php -->
                <form class="mt-4" action="reporte.php" method="POST" style="width: 100%;">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="tipo_documento">Tipo Documento</label>
                            <select class="form-control" name="tipo_documento" id="tipo_documento" required>
                                <option value="" selected disabled>Seleccione</option>
                                <option value="Cedula">Cedula</option>
                                <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                                <option value="Pasaporte">Pasaporte</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="col-12 row">
                                <div class="col-4">
                                    <label for="">Genero</label>
                                </div>
                                <div class="col-8 text-right">
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="genero" value="Masculino">Masculino
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                          <input type="radio" class="form-check-input" name="genero" value="Femenino">Femenino
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 row">
                                <div class="col-4">
                                    <label for="">Otro</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="otro" id="otro">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="tipo_documento">Numero Identificación</label>
                            <input type="number" class="form-control" name="identificacion" id="identificacion" required>
                        </div>
                        <div class="col-md-6">
                            <label for="tipo_documento">Correo</label>
                            <input type="email" class="form-control" name="correo" id="correo" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="tipo_documento">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                        </div>
                        <div class="col-md-6">
                            <label for="tipo_documento">Numero de contacto</label>
                            <input type="number" class="form-control" name="contacto" id="contacto" minlength="10" maxlength="10" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label for="tipo_documento">Apellido</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" required>
                        </div>
                        <div class="col-md-6">
                            <div style="width: 100%; border: 1px solid; border-radius: 5px;">
                                <div class="div_head text-center py-2 bg-secondary">Estudios</div>
                                <div class="div_body p-4">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="checkbox" class="form-check-input" name="estudios[]" value="Primaria">Primaria
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="checkbox" class="form-check-input" name="estudios[]" value="Secundaria">Secundaria
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="checkbox" class="form-check-input" name="estudios[]" value="Pregrado">Pregrado
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="checkbox" class="form-check-input" name="estudios[]" value="Postgrado">Postgrado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <button type="submit" class="btn btn-secondary">Enviar Datos</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>