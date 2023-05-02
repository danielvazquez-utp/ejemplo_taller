<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Default Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>

        <div class="row">
          <div class="col-xs-12 col-md-12 col-lg-6">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="">Nombre del taller</label>
              <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escriba aquí" required="required">
            </div>
            <div class="form-group">
              <label for="">Lugar</label>
              <input type="text" name="lugar" id="lugar" class="form-control" placeholder="Escriba aquí" required="required">
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
              <select name="tipo" id="tipo" class="form-control" required="required">
                <option value="">Seleccione una opción</option>
                <option value="1">Presencial</option>
                <option value="2">Semi-Presencial</option>
                <option value="3">Virtual</option>
              </select>
            </div>
            <div class="form-group">
              <label for="">Correo de Contacto</label>
              <input type="email" name="correo" id="correo" class="form-control" required="required">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>