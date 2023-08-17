<?php
include_once 'Views/Layouts/header.php';
?>
<title>Home | Sistema RBP</title>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Home</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Blank Page</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<style>
  .titulo_producto {
    color: #000;
  }

  .titulo_producto:visited {
    color: #000;
  }

  .titulo_producto:focus {
    border-bottom: 1px solid;
  }

  .titulo_producto:hover {
    border-bottom: 1px solid;
  }

  .titulo_producto:active {
    background: #000;
    color: #fff;

  }
</style>

<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Zonas</h3>
    </div>
    <div class="card-body">
      <div id="zonas" class="row">
        <div class="col-sm-2">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <img src="Util/Img/zona/zona_default.png" class="img-fluid">
                </div>
                <div class="col-sm-12">
                  <span class="text-muted-float-left">Nombre de la zona</span><br>
                  <a href="#" class="titulo_producto">Responsable de la zona</a><br>
                  <span class="badge bg-success">Tipo de zona</span><br>
                  <span class="">S/ 1000</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Footer
    </div>
    <!-- /.card-footer-->
  </div>
  <!-- /.card -->

</section>
<script src="https://unpkg.com/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
<?php
include_once 'Views/Layouts/footer.php';
?>
<script src="index.js"></script>