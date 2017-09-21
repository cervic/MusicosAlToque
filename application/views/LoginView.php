<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


    <div class="col-xs-12 col-md-6 col-md-offset-3">	
        <span>
            <h1>Bienvenido</h1>
            <h2>Ingrese su usuario</h2>
            <?php echo form_open(base_url('Login/ingresar'), array('id' => 'frmLogin')) ?> 
                <div class="contenedor_error" id="login"></div>
                <div class="form-group">
                      <label for="exampleInputEmail1">Correo Electrónico</label>
                      <input type="input" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
                </div>
                <div class="contenedor_error" id="errorEmail"></div>
                <div class="form-group">
                      <label for="exampleInputPassword1">Contraseña</label>
                      <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
                </div>
                <div class="contenedor_error" id="errorPassword"></div>
                <button type="button" class="btn btn-default" id="btnIngresar">Ingresar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <?php echo form_close(); ?>
        </span>
     </div> <!-- cierra contenedor -->
     <script src="<?php echo base_url('assets/js/scripts/login.js')."?".date("D M d, Y G:i") ?>"type="text/javascript"></script>
