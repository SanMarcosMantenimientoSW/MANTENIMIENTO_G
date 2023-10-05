<?php
include_once 'Layouts/general/header.php';
?>
<title>Estado actividades | Sistema RBP</title>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Estado Actividades</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active">Estado actividades</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="card">
        <section class="content">
            <div class="row justify-content-center text-center mt-4">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Estado de actividades</h3>
                        </div>
                        <div class="card-body" style="display: block;">
                            <div class="form-group">
                                <select id="inputStatus" class="form-control custom-select">
                                    <option selected="" disabled="">Seleccione un estado</option>
                                    <option>En proceso</option>
                                    <option>Finalizada</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
        <div class="card-body">
            <div class="table-responsive">
                <table id="estado_actividad" class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th class="hidden-mobile">Hora de inicio</th>
                            <th class="hidden-mobile">Hora final</th>
                            <th class="hidden-mobile">Trabajador</th>
                            <th class="hidden-mobile">Zona</th>
                            <th class="hidden-mobile">Camion</th>
                            <th class="hidden-mobile">Estado</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>

</section>
<script src="https://unpkg.com/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
<?php
include_once 'Layouts/general/footer.php';
?>
<script src="estado_actividades.js"></script>