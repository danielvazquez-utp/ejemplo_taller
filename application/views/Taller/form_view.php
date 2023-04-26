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
            <li class="breadcrumb-item active"> Formulario</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!--Inicia Formulario -->
    <form action="">
    <!-- Default box -->
    <div class="card card-success">
        <div class="card-header">
            <h2 class="card-title">Ejemplo de formulario</h2>
        </div>
        <div class="card-body">

        <!--Columna 1 -->
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-6">
                    <div class="form-group">
                        <label for="">Nombre del taller</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" 
                        placeholder="Ingrese el nombre aqui" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Lugar:</label>
                        <input type="text" name="lugar" id="lugar" class="form-control" 
                        placeholder="Ingrese el lugar aqui" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Horario:</label>
                        <input type="time" name="hora" id="hora" class="form-control" required="required">
                    </div>
                </div>

            <!-- Columna 2 -->    
            <div class="col-xs-12 col-md-12 col-lg-6">
                    <div class="form-group">
                        <label for="">Cupo del taller</label>
                        <input type="number" name="cupo" id="cupo" class="form-control" min="1" max="100"
                        placeholder="1" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Fecha:</label>
                        <input type="date" name="fecha" id="fecha" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Tipo de taller:</label>
                        <select name="tipo" id="tipo" class="form-control" required="required">
                            <option value="">-Seleccione-</option>
                            <option value="Presencial">Presencial</option>
                            <option value="Presencial">Semi-Presencial</option>
                            <option value="Presencial">Virtual</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Contacto:</label>
                        <input type="email" name="contacto" id="contacto" 
                        class="form-control" placeholder="Correo electronico" required="required">
                    </div>
                
            </div>

        <!--Cierre del body del card -->   
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-warning">Aceptar</button>
            <button class="btn btn-danger">Cancelar</button>
        </div>
    </div>
    <!-- /.card -->
    </form>
    <!-- Finaliza el formulario -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->