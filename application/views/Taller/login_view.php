
<div class=" text-center m-0 vh-100 row justify-content-center align-items-center" >
  <!-- /.login-logo -->
  <div class="card card-outline card-primary col-auto" >
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Assistance</b>System</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresa a tu sesión!</p>

      <form action="<?= base_url('log_in')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" id="user" name="user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordar contraseña
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Has olvidado tu contraseña.</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrarse</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>