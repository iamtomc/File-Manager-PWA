<?php
    $active1="active";
    include "head.php";
    include "header.php";
    include "aside.php";
 ?>

<div class="content-wrapper">
  <!-- Content Wrapper. Contains page content -->
  <section class="content-header">
    <!-- Content Header (Page header) -->
    <h1>Panel de Control</h1>
    <ol class="breadcrumb">
      <li><a href="home.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Panel de Control</li>
    </ol>
  </section>
  <section class="content">
    <!-- Main content -->
    <!-- Small boxes (Stat box) <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>
                            <p>Nuevos Archivos</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                            <p>Descargas</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Usuarios Nuevo</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                          <h3>65</h3>
                          <p>Usuarios en linea</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>-->
    <div class="row">
      <div class="col-md-12">
        <div class="box box-danger">
          <img class="img-responsive center-block" src="dist\img\ICA-Logo.png" alt="Logo">
          <hr>
            <p aling="justify">Cuando elige a ICA Ajustadores, elige una gran cantidad de conocimiento e innovación audaz respaldada por un servicio superior forjado a través de un rendimiento constante. ICA se enorgullece de la calidad de los servicios que ofrecemos a nuestros clientes y sus asegurados.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <!-- .row -->
      <div class="col-md-12">
        <div class="box box-info">
          <!-- general form elements -->
          <div class="box-header with-border">
            <h3 class="box-title">Datos Personales: </h3>
          </div> <!-- /.box-header -->
            <div class="image view view-first">
              <img class="thumb-image" style="width: 20%; display: block;" src="images/profiles/<?php echo $profile_pic ?>" alt="image">
            </div>
            <!--<span class="btn btn-my-button btn-file">
              <form method="post" id="formulario" enctype="multipart/form-data">
                Cambiar Imagen de perfil: <input type="file" name="file">
              </form>
            </span>-->
            <div id="respuesta"></div><br>
          <form role="form" method="post" action="action/updprofile.php">
            <!-- form start -->
            <div class="box-body">
              <div class="form-group">
                <label for="fullname">Nombre Completo</label>
                <input name="fullname" type="text" class="form-control" id="fullname" value="<?php echo $fullname ?>">
              </div>
              <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input name="email" type="email" class="form-control" id="email" value="<?php echo $email ?>">
              </div>
              <div class="form-group">
                <label for="password">Contraseña Actual</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="*******">
              </div>
              <div class="form-group">
                <label for="new_password">Nueva Contraseña</label>
                <input name="new_password" type="password" class="form-control" id="new_password">
              </div>
              <div class="form-group">
                <label for="confirm_new_password">Confirmar Nueva Contraseña</label>
                <input name="confirm_new_password" type="password" class="form-control" id="confirm_new_password">
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button name="token" type="submit" class="btn btn-success">Actualizar Datos</button>
            </div>
          </form>
        </div><!-- /.box -->
      </div>
    </div><!-- /.row -->
  </section>
</div><!-- /.content -->
<?php include "footer.php"; ?>

<script>
  $(function() {
    $("input[name='file']").on("change", function() {
      var formData = new FormData($("#formulario")[0]);
      var ruta = "action/upload-profile.php";
      $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos) {
          $("#respuesta").html(datos);
        }
      });
    });
  });
</script>
