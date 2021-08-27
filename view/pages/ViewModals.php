<!--
    |-------------------------------------------------------------------|
    |                  Modal de inicio de sesión.                       |
    |-------------------------------------------------------------------|
 -->
<div class="modal fade" id="modal-login" name="modal-login" role="dialog">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="<?=ASSETS.SRC.IMG?>avatar.png" class="fa fa-user" alt="Avatar">
                </div>
                <h4 class="modal-title"><b>Dellano</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-login" name="form-login" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Correo" id="email_login" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" id="pass" name="pass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div id="msg" class="hide">
                        <div class="alert alert-danger">
                            <i class="icon fas fa-ban"></i>
                            Usuario y/o contraseña incorrecta
                        </div>
                    </div>
                    <div class=" row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Ingresar</button>
                        </div>
                    </div>
                </form>
                <p class="mb-0 text-center">
                    <a href="#" id="btn-register" onclick="register();" class="text-center">Registrarse</a>
                </p>
            </div>
            <div class="modal-footer">
                <a href="#" id="btn-recover-pass" onclick="onRecoveryPass()" class="text-primary">¿Olvido su
                    contraseña?</a>
            </div>
        </div>
    </div>
</div>

<!--
    |-------------------------------------------------------------------|
    |        Modal para registro y edición de un usuario.               |
    |-------------------------------------------------------------------|
 -->
<div class="modal fade" id="modal-register" name="modal-register" role="dialog">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="avatar">
                    <img src="<?=ASSETS.SRC.IMG?>avatar.png" class="fa fa-user" alt="Avatar">
                </div>
                <h4 class="modal-title"><b>Dellano</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-register" name="form-register" method="POST">
                    <input type="hiden" id="funcion" name="funcion" />
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Apellido" id="apellido" name="apellido">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Correo" id="email" name="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña" id="pass_id" name="pass">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Repite contraseña" id="pass_confirm"
                            name="pass_confirm">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                            <label class="custom-control-label" for="exampleCheck1">Acepto
                                <a target="_blank" href="https://dellano.mx/terminos-y-condiciones">terminos y
                                    condiciones</a>.
                            </label>
                        </div>
                    </div>
                    <div id="msg_reg" class="hide">
                        <div class="alert alert-danger">
                            <i class="icon fas fa-ban"></i>
                            No se puede registrar al nuevo usuario
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit"
                                class="btn btn-warning font-weight-bold btn-block text-white">Registro</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="text-center" onclick="openModal('modal-login');">Ya tengo cuenta</a>
            </div>
        </div>
    </div>
</div>

<!--
    |-------------------------------------------------------------------|
    |                           Modal loading                           |
    |-------------------------------------------------------------------|
 -->
<div class="modal" id="modal_procesando" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-12 text-center">
                        <img src="<?=ASSETS.SRC.IMG?>loader.gif" class="fa fa-user" alt="Avatar">
                        <h3>...</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
