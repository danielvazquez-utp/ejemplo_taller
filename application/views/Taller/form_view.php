<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Blank Page</h1>
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

  <!-- Main content -->
  <section class="content">
    <form action="" method="post">
      <div class="card card-success">
        <div class="card-header">
          <h4 class="card-tittle"><i class="fas fa-plus-square"></i> Ejemplo formulario</h4>
          <!--<div class="card-tools">
            <div>
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas-fa-plus"></i></button>
            </div>
          </div>-->
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-6">
              <div class="form-group">
                <label for="">Nombre del taller</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribra aqui" required="required">
              </div>
              <div class="form-group">
                <label for="">Lugar</label>
                <input type="text" name="lugar" id="lugar" class="form-control" placeholder="Escribra aqui" required="required">
              </div>
              <div class="form-group">
                <label for="">Cupo del taller</label>
                <input type="number" name="cupo" id="cupo" class="form-control" placeholder="0" min="1" max="100" required="required">
              </div>
              <div class="form-group">
                <label for="">Hora del taller</label>
                <input type="time" name="hora" id="hora" class="form-control" required="required">
              </div>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-6">
              <div class="form-group">
                <label for="">Fecha del taller</label>
                <input type="date" name="fecha" id="fecha" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="">Tipo de taller</label>
                <select name="" id="tipo" required="required" class="form-control">
                  <option value="">Presencial</option>
                  <option value="">Semi-Presencial</option>
                  <option value="">Virtual</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Correo de contacto</label>
                <input type="email" name="contacto" id="contacto" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="">trabajas?</label>
                <input type="radio" name="trabaja" id="trabaja_1" required="required">Si
                <input type="radio" name="trabaja" id="trabaja_2" required="required">No
              </div>
              <div class="form-group" id="div_donde" style="display: none;">
                <label for="">Donde trabajas</label>
                <input type="text" name="donde" id="donde" class="form-control" placeholder="Escribra aqui">
              </div>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Ventana Modal
              </button>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-primary" type="submit">Aceptar</button>
          <button class="btn btn-warning" type="submit">Cancelar</button>
        </div>
      </div>
      <div class="card card-success">
        <div class="card-header">
          <h4 class="card-tittle">Titulo de la tabla</h4>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped" id="tabla">
            <thead>
              <tr class="text-center">
                <th>No.</th>
                <th>Nombre del taller</th>
                <th>Fecha</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td>1</td>
                <td>Taller 1</td>
                <td>26-09-21</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Taller 2</td>
                <td>27-09-21</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Taller 3</td>
                <td>28-09-21</td>
              </tr>
              <tr>
                <td>4</td>
                <td>Taller 4</td>
                <td>29-09-21</td>
              </tr>
              <tr>
                <td>5</td>
                <td>Taller 5</td>
                <td>30-09-21</td>
              </tr>
              <tr>
                <td>6</td>
                <td>Taller 6</td>
                <td>31-09-21</td>
              </tr>
              <tr>
                <td>7</td>
                <td>Taller 7</td>
                <td>1-10-21</td>
              </tr>
              <tr>
                <td>8</td>
                <td>Taller 8</td>
                <td>2-10-21</td>
              </tr>
              <tr>
                <td>9</td>
                <td>Taller 9</td>
                <td>3-10-21</td>
              </tr>
              <tr>
                <td>10</td>
                <td>Taller 10</td>
                <td>4-10-21</td>
              </tr>
            </tbody>
            <tfoot></tfoot>
          </table>
        </div>
      </div>
    </form>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->