<?php
include_once 'Layouts/general/header.php';
?>
<!-- Modal -->
<div class="modal fade" id="modal_contra" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLable">Cambiar contraseña</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-contra">
                    <div class="form-group">
                        <label for="pass_old">Ingrese contraseña actual</label>
                        <input type="password" name="pass_old" class="form-control" id="pass_old"
                            placeholder="Ingrese contraseña actual">
                    </div>
                    <div class="form-group">
                        <label for="pass_new">Ingrese nueva contraseña</label>
                        <input type="password" name="pass_new" class="form-control" id="pass_new"
                            placeholder="Ingrese nueva contraseña">
                    </div>
                    <div class="form-group">
                        <label for="pass_repeat">Repita la nueva contraseña</label>
                        <input type="password" name="pass_repeat" class="form-control" id="pass_repeat"
                            placeholder="Repita la nueva contraseña">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_datos" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLable">Editar datos personales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-datos" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombres_mod">Nombres</label>
                        <input type="text" name="nombres_mod" class="form-control" id="nombres_mod"
                            placeholder="Ingrese sus nombres">
                    </div>
                    <div class="form-group">
                        <label for="apellidos_mod">Apellidos</label>
                        <input type="text" name="apellidos_mod" class="form-control" id="apellidos_mod"
                            placeholder="Ingrese sus apellidos">
                    </div>
                    <div class="form-group">
                        <label for="dni_mod">DNI</label>
                        <input type="text" name="dni_mod" class="form-control" id="dni_mod"
                            placeholder="Ingrese su DNI">
                    </div>
                    <div class="form-group">
                        <label for="email_mod">Email</label>
                        <input type="text" name="email_mod" class="form-control" id="email_mod"
                            placeholder="Ingrese su Email">
                    </div>
                    <div class="form-group">
                        <label for="telefono_mod">Telefono</label>
                        <input type="text" name="telefono_mod" class="form-control" id="telefono_mod"
                            placeholder="Ingrese su telefono">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Avatar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="avatar_mod" id="avatar_mod">
                                <label class="custom-file-label" for="exampleInputFile">Seleccione un avatar</label>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<title>Mi perfil | Sistema RBP</title>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card card-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-info">
                        <h3 id="username" class="widget-user-username"></h3>
                        <h5 id="tipo_usuario" class="widget-user-desc"></h5>
                    </div>
                    <div class="widget-user-image">
                        <img id="avatar_perfil" class="img-circle elevation-2" src="" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
                <div class="card card-light d-flex flex-fill">
                    <div class="card-header border-bottom-0 text-center">
                        <strong>Mis datos personales</strong>
                        <div class="card-tools">
                            <button type="button" class="editar_datos btn btn-tool" data-bs-toggle="modal"
                                data-bs-target="#modal_datos">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body pt-0 mt-3">
                        <div class="row">
                            <div class="col-9">
                                <h2 id="nombres" class="lead"><b></b></h2>
                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-address-card"></i></span>
                                        DNI: <span id="dni"></span></li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-at"></i></span>Email: <span
                                            id="email"></span>
                                    </li>
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                        Telefono: <span id="telefono"></span></li>
                                </ul>
                            </div>
                            <div class="col-3 text-center">
                                <img src="../Util/Img/datos.png" alt="user-avatar" class="img-fluid mx-auto d-block">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-warning btn-block" data-bs-toggle="modal"
                            data-bs-target="#modal_contra">Cambiar contraseña</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<script src="https://unpkg.com/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
<?php
include_once 'Layouts/general/footer.php';
?>
<script src="mi_perfil.js"></script>