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
        <form action="<?php echo base_url('save_form')?>" method="post">
            <div class="card card-success collapsed-card">
                <div class="card-header">
                    <h4 class="card-title">
                        <i class="fas fa-plus-circle"></i>
                        Agregar Taller
                    </h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                        </button>
                    </div>
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
                                <input class="form-control" type="number" name="cupo" id="cupo" placeholder="0" min="1" max="100" required="required">
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
                                <label for="">Correo</label>
                                <input class="form-control" type="email" name="email" id="email" placeholder="Escriba aqui" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">¿Trabajas?</label>
                                <input type="radio" name="trabaja" id="trabaja_1" required="required"> Si
                                <input type="radio" name="trabaja" id="trabaja_2" required="required" checked> No
                            </div>
                            <div class="form-group" id="div_trabaja" style="display:none;">
                                <label for="">Donde trabajas</label>
                                <input class="form-control" type="text" name="donde" id="donde" placeholder="Escriba aqui">
                            </div>

                            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Ver ventana modal</button>
                        
                        </div>
                    </div>
                    
                    
                <div class="card-footer">
                    <button class="btn btn-primary submited">Aceptar</button>
                    <button class="btn btn-warning">Cancelar</button>
                </div>
            </div>
        </form> 
        </div>
        <div class="card">
            <div class="card-body card-success">
                <table class="table table-bordered table-hover table-striped" id="tabla">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Nombre de taller</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            if($talleres!=false){
                                foreach ($talleres->result() as $taller) {
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