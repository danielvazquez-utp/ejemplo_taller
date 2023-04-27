
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
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
                        <i class="fa-regular fa-square-plus"></i>
                        Agregar Taller
                    </h4>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tools" data-card-widget="collapse"> <i
                                class="fa fa-plus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-6">

                            <div class="form-group">
                                <label for="">Nombre del taller</label>
                                <input type="text" name="nombre" id="nombre" class="form-control"
                                    placeholder="Escriba aquí" required>
                            </div>
                            <div class="form-group">
                                <label for="">Lugar</label>
                                <input type="text" name="fecha" id="fecha" class="form-control"
                                    placeholder="Escriba aquí" required>
                            </div>
                            <div class="form-group">
                                <label for="">Cupo del taller</label>
                                <input type="number" min="1" max="100" name="cupo" id="cupo" class="form-control"
                                    placeholder="0" required>
                            </div>
                            <div class="form-group">
                                <label for="">Hora del taller</label>
                                <input type="time" name="hora" id="hora" class="form-control" placeholder="Escriba aquí"
                                    required>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label for="">Fecha del taller</label>
                                <input type="date" name="fecha" id="fecha" class="form-control"
                                    placeholder="Escriba aquí" required>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha del taller</label>
                                <select name="tipo" id="tipo" class="form-control" required>
                                    <option value="">Virtual</option>
                                    <option value="">Precensial</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Correo del contacto</label>
                                <input type="email" name="fecha" id="fecha" class="form-control"
                                    placeholder="Escriba aquí" required>
                            </div>
                            
                            <div class="form-group">
                              <label for="">¿Trabajas?</label>
                              <input type="radio" name="trabaja" id="trabaja_1" required>Si</input>
                              <input type="radio" name="trabaja" id="trabaja_2" required>No</input>
                            </div>

                            <div class="form-group" id="div_trabaja" style="display:none;">
                              <label for="">¿Donde trabajas?</label>
                              <input type="text" name="donde" id="donde" class="form-control" placeholder="Escriba aquí"></input>
                            </div>

                            <button type="button" class="btn btn-default" data-toggle="modal"
                                data-target="#modal-default">
                                Ver ventana Modal
                            </button>
                        </div>
                    </div>
                </div>

                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    <button class="btn btn-warning">Cancelar</button>
                </div>
            </div>
        </form>

        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h2>Taller registrados</h2>
                </div>
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
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Taller</td>
                            <td>15-05-2023</td>
                        </tr>
                    </tbody>

                    <tfoot></tfoot>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->