<form roll="form" class="col-md-3 form-inline" action="index.php" method="post">
                <h3 class="center-block">Iniciar sesión</h2>
                <div class="form-group center-block">
                    <label class="sr-only">usuario</label>
                    <input type="text" name="usuario" class="form-control" placeholder="usuario">
                </div>
            <div class="form-group center-block">
                    <label class="sr-only center-block">constraseña</label>
                    <input type="password" class="form-control center-block" name="password" placeholder="contraseña">
                </div>
                <a href="index.php?accion=registrar">Registrar</a>
            <input type="hidden" name="accion" value="ingresar">
            <button type="submit" class="btn btn-primary center-block">Ingresar</button>
</form>