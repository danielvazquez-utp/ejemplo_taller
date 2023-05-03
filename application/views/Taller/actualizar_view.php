<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Formulario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Formulario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <form action="<?php echo base_url('actualiza')  ?>" method="post">
        <div class="card card-success">
          <div class="card-header">
            <h4 class="card-title">
              <i class="fas fa-plus-circle"></i> 
              Actualizar taller
            </h4>
          </div>
          <div class="card-body">

            <div class="row">
              <div class="col-xs-12 col-md-12 col-lg-6">
                <input type="hidden" name="id" id="id" value="<?php echo $taller->id_taller ?>">
                <div class="form-group">
                  <label for="">Nombre del taller</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba aquí" required="required" value="<?php echo $taller->nombre ?>">
                </div>
                <div class="form-group">
                  <label for="">Lugar</label>
                  <input type="text" name="lugar" id="lugar" class="form-control" placeholder="Escriba aquí" required="required" value="<?php echo $taller->lugar ?>">
                </div>
                <div class="form-group">
                  <label for="">Cupo del taller</label>
                  <input type="number" name="cupo" id="cupo" class="form-control" placeholder="0" min="1" max="100" required="required" value="<?php echo $taller->cupo ?>">
                </div>
                <div class="form-group">
                  <label for="">Hora del taller</label>
                  <input type="time" name="hora" id="hora" class="form-control" required="required" value="<?php echo $taller->hora ?>">
                </div>
              </div>
              <div class="col-xs-12 col-md-12 col-lg-6">
                <div class="form-group">
                  <label for="">Fecha del taller</label>
                  <input type="date" name="fecha" id="fecha" class="form-control" required="required" value="<?php echo $taller->fecha ?>">
                </div>
                <div class="form-group">
                  <label for="">Tipo de taller</label>
                  <select name="tipo" id="tipo" class="form-control" required="required">
                    <option value="">Seleccione una opción</option>
                    <option <?php echo ($taller->tipo==1)? 'selected="selected"' : '' ?> value="1">Presencial</option>
                    <option <?php echo ($taller->tipo==2)? 'selected="selected"' : '' ?> value="2">Semi-Presencial</option>
                    <option <?php echo ($taller->tipo==3)? 'selected="selected"' : '' ?> value="3">Virtual</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Correo de Contacto</label>
                  <input type="email" name="correo" id="correo" class="form-control" required="required" value="<?php echo $taller->email ?>" >
                </div>
              </div>
            </div>

            
            
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-lg float-right">Actualizar</button>
            <a href="<?php echo base_url('formulario') ?>" class="btn btn-warning">Cancelar</a>
          </div>
        </div>
      </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->