<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro | Sistema RBP</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Util/Css/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Util/Css/adminlte.min.css">
    <link rel="stylesheet" href="../Util/Css/toastr.min.css">
    <link rel="stylesheet" href="../Util/Css/sweetalert2.min.css">
</head>
<div class="modal fade" id="terminos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="card card-success">
                <div class="card-header">
                    <h1 class="card-title fs-5">Terminos y condiciones</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card-body">
                    Términos y condiciones del registro para el sistema web de recojo de basura pública:
                    </br></br>
                    1. Aceptación de los términos: Al registrarse en nuestro sistema web de recojo de basura pública,
                    acepta los términos y condiciones establecidos en este acuerdo.
                    </br></br>
                    2. Información del usuario: Al registrarse, debe proporcionar información precisa y completa sobre
                    usted y su dirección. También debe actualizar esta información de manera oportuna si cambia.
                    </br></br>
                    3. Responsabilidad de la cuenta: Usted es responsable de mantener la confidencialidad de su nombre
                    de
                    usuario y contraseña, y de todas las actividades que ocurran bajo su cuenta.
                    </br></br>
                    4. Uso del sitio web: Usted acepta utilizar nuestro sitio web solo para fines legales y de acuerdo
                    con
                    estos términos y condiciones. No debe utilizar el sitio web de manera que pueda dañar, desactivar,
                    sobrecargar o perjudicar el sitio web o interferir con el uso de cualquier otra persona del sitio
                    web.
                    </br></br>
                    5. Propiedad intelectual: Todo el contenido del sitio web, incluyendo, entre otros, el texto,
                    gráficos,
                    logotipos, iconos, imágenes y software, es propiedad de nuestro sitio web o de sus respectivos
                    propietarios.
                    </br></br>
                    6. Política de privacidad: Al registrarse en nuestro sitio web, acepta nuestra política de
                    privacidad,
                    que describe cómo recopilamos, utilizamos y protegemos su información personal.
                    </br></br>
                    7. Cambios en los términos y condiciones: Nos reservamos el derecho de cambiar estos términos y
                    condiciones en cualquier momento. Se le notificará de cualquier cambio a través del sitio web o por
                    correo electrónico.
                    </br></br>
                    8. Limitación de responsabilidad: En ningún caso, nuestro sitio web, sus empleados, contratistas,
                    proveedores o afiliados serán responsables por daños directos, indirectos, incidentales, especiales
                    o consecuentes resultantes del uso o la imposibilidad de usar el sitio web o cualquier contenido del
                    sitio web.
                    </br></br>
                    9. Terminación de la cuenta: Nos reservamos el derecho de terminar su cuenta y acceso al sitio web
                    en
                    cualquier momento y por cualquier motivo, sin previo aviso.
                    </br></br>
                    10. Ley aplicable: Estos términos y condiciones se regirán e interpretarán de acuerdo con las leyes
                    del
                    país o estado en el que se encuentra nuestro sitio web.
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<body class="hold-transition login-page">
    <div class="mt-5">
        <div class="login-logo">
            <img src="../Util/Img/logo.png" class="profile-user-img img-fluid img-circle">
            <a href="../index.php"><b>Sistema</b>RBP</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Registrarse</p>
                <form id="form-register">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="username">Nombre de usuario</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Ingrese nombre de usuario">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="pass">Contraseña</label>
                                <input type="password" name="pass" class="form-control" id="pass"
                                    placeholder="Ingrese contraseña">
                            </div>
                            <div class="form-group">
                                <label for="nombres">Nombres</label>
                                <input type="text" name="nombres" class="form-control" id="nombres"
                                    placeholder="Ingrese sus nombres">
                            </div>
                            <div class="form-group">
                                <label for="dni">DNI</label>
                                <input type="text" name="dni" class="form-control" id="dni"
                                    placeholder="Ingrese su DNI">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" name="telefono" class="form-control" id="telefono"
                                    placeholder="Ingrese su telefono">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="pass_repeat">Repetir contraseña</label>
                                <input type="password" name="pass_repeat" class="form-control" id="pass_repeat"
                                    placeholder="Ingrese nuevamente su contraseña">
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos</label>
                                <input type="text" name="apellidos" class="form-control" id="apellidos"
                                    placeholder="Ingrese sus apelidos">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="Ingrese su correo">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group mb-0">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="terms" class="custom-control-input" id="terms">
                                    <label class="custom-control-label" for="terms">Estoy de acuerdo con los <a href="#"
                                            data-toggle="modal" data-target="#terminos">terminos de
                                            servicio</a>.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary">Registrarme</button>
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../Util/Js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../Util/Js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../Util/Js/adminlte.min.js"></script>
    <script src="../Util/Js/toastr.min.js"></script>
    <script src="register.js"></script>
    <script src="../Util/Js/jquery.validate.min.js"></script>
    <script src="../Util/Js/additional-methods.min.js"></script>
    <script src="../Util/Js/sweetalert2.min.js"></script>
    <script src="register.js"></script>
    
</body>
</html>