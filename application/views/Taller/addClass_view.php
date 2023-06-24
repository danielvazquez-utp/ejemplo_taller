<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro de Clases</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('home')?>">Inicio</a></li>
              <li class="breadcrumb-item active">FRegistro de Clases</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
    <form action="<?php echo base_url('saveC')  ?>" method="post">
        <div class="card card-success collapsed-card">
          <div class="card-header">
            <h4 class="card-title">
              <i class="fas fa-plus-circle"></i> 
                Registro de clases
            </h4>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i></button>
            </div>
          </div>
          <div class="card-body">

            <div class="row">
              <div class="col-xs-12 col-md-12 col-lg-6">
                <div class="form-group">
                  <label for="">Nombre de la Materia</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Gestión de Proyectos" required="required">
                </div>
                <div class="form-group">
                  <label for="">Grupo</label>
                  <input type="text" name="grupo" id="grupo" class="form-control" placeholder="A" required="required">
                </div>
                <div class="form-group">
                  <label for="">Grado</label>
                  <input type="number" name="grado" id="grado" class="form-control" placeholder="9" required="required">
                </div>
              </div>
              <div class="col-xs-12 col-md-12 col-lg-6">
              <div class="form-group">
                  <label for="">División</label>
                  <select name="division" id="division" class="form-control" required="required">
                    <option value="">Seleccione una opción</option>
                    <option value="División de Sistemas Automotrices">División de Sistemas Automotrices</option>
                    <option value="División de Tecnologias de la información">División de Tecnologias de la información</option>
                    <option value="División de Negocios">División de Negocios</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Carrera</label>
                  <select name="carrera" id="carrera" class="form-control" required="required">
                    <option value="">Seleccione una opción</option>
                    <option value="T.S.U. Desarrollo de software">T.S.U. Desarrollo de software</option>
                    <option value="T.S.U. Infraestructuras de redes digitales">T.S.U. Infraestructuras de redes digitales</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Turno</label>
                  <select name="turno" id="turno" class="form-control" required="required">
                  <option value="">Seleccione una opción</option>
                  <option value="Matutino">Matutino</option>
                  <option value="Vespertino">Vespertino</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button class="btn btn-warning">Cancelar</button>
          </div>
        </div>
      </form>
    </section>
</div>