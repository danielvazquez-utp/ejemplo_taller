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
        <form action="">
            <div class="card card-success">
                <div class="card-header">
                    <h4 class="card-title">
                        Ejemplo de formulario
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Nombre del taller</label>
                                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Escriba aqui" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Lugar</label>
                                <input class="form-control" type="text" name="lugar" id="lugar" placeholder="Escriba aqui" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Cupo de taller</label>
                                <input class="form-control" type="number" name="correo" id="correo" placeholder="0" min="1" max="100" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Hora del taller</label>
                                <input class="form-control" type="time" name="hora" id="hora" required="required" >
                            </div>

                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Fecha</label>
                                <input class="form-control" type="date" name="fecha" id="fecha" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Tipo</label>
                                <select name="tipo" id="tipo" class="form-control" required="required">
                                    <option value="s">Seleccione una opcion</option>
                                    <option value="1">Presencial</option>
                                    <option value="2">Semi-presencial</option>
                                    <option value="3">Virtual</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Correo de contacto</label>
                                <input class="form-control" type="email" name="correo" id="correo" required="required">
                            </div>
                            
                        
                        </div>
                    </div>
                    
                    
                <div class="card-footer">
                    <button class="btn btn-primary submited">Aceptar</button>
                    <button class="btn btn-warning">Cancelar</button>
                </div>
            </div>
        </form>  
    </section>
    <!-- /.content -->
  </div>