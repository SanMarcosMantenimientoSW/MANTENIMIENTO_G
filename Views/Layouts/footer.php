</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2023 </strong> Grupo 3 - Construccion de software web
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="Util/Js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="Util/Js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="Util/Js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Util/Js/demo.js"></script>
<script src="Util/Js/bootstrap.min.js"></script>
<script src="../Util/Js/jquery.validate.min.js"></script>
<script src="../Util/Js/additional-methods.min.js"></script>
<script src="../Util/Js/select2.min.js"></script>
<script src="Util/Js/sweetalert2.min.js"></script>
<script src="../Util/Js/bs-custom-file-input.min.js"></script>
<script src="../Util/Js/toastr.min.js"></script>
<script src="../Util/Js/datatables.min.js"></script>
</body>
<script>
    funcion = 'tipo_usuario';
    $.post('Controllers/UsuarioController.php', {
        funcion
    }, (response) => {
        if (response==1) {
            $('#solicitar_recojo').hide();
            $('#mis_actividades').hide();
        } else if(response==2){
            $('#titulo_gestion_recursos').hide();
            $('#titulo_gestion_solicitudes').hide();
            $('#gestion_zonas').hide();
            $('#gestion_trabajadores').hide();
            $('#gestion_camiones').hide();
            $('#gestion_actividades').hide();
            $('#gestion_solicitudes').hide();
            $('#solicitar_recojo').hide();
            $('#estado_actividades').hide();
        }else {
            $('#titulo_gestion_recursos').hide();
            $('#titulo_gestion_actividades').hide();
            $('#gestion_zonas').hide();
            $('#gestion_trabajadores').hide();
            $('#gestion_camiones').hide();
            $('#gestion_actividades').hide();
            $('#estado_actividades').hide();
            $('#mis_actividades').hide();
            $('#gestion_solicitudes').hide();
        }
    })
</script>

</html>