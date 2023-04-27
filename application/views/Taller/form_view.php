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
    <form action="<?php echo base_url('save_form')?>" method="post">
    <!-- Default box -->
    <div class="card card-success collapsed-card">
        <div class="card-header">
            <h2 class="card-title">
            <i class="fas fa-plus-square">
            Agregar Curso
            </i>
            </h2>
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
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
                    <div class="form-group">
                        <label for="">Cupo del taller</label>
                        <input type="number" name="cupo" id="cupo" class="form-control" min="1" max="100"
                        placeholder="1" required="required">
                    </div>
                </div>

            <!-- Columna 2 -->    
            <div class="col-xs-12 col-md-12 col-lg-6">
                    
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
                    <div class="form-group">
                        <label for="">¿Trabaja?</label>
                        <input type="radio" name="trabaja" id="trabaja_1" required="required">Si
                        <input type="radio" name="trabaja" id="trabaja_2" required="required " checked="cheked" >No
                    </div>
                    <div class="form-group" id="div_trabaja" style="display:none;">
                        <label for="">Donde trabajas?</label><br>
                        <input type="text" name="donde" id="donde" class="form-control" placeholder="Escribe aquí">
                    </div>
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                        Ventana Modal
                    </button>
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
</div>

    <div class="card card-success">
        <div class="card-header">
            <h2 class="card-title ">
                Cursos Registrados
            </h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped" id="tabla">
                <thead class="text-center">
                    <th>No.</th>
                    <th>Nombre del taller</th>
                    <th>Fecha</th>
                </thead>
                <tbody class="text-center">
                    <?php if($talleres!=false){
                        foreach ($talleres->result() as $taller){
                        ?>
                    <tr>
                        <td><?php echo $taller->id_taller?></td>
                        <td><?php echo $taller->nombre?></td>
                        <td><?php echo $taller->fecha?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->