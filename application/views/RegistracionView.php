<?php
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<?php echo form_open(base_url('Registracion/guardar'), array('id'=>'frmRegistracion')) ?>    
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            <input type="input" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" required>
        </div>        
    </div>
<div class="contenedor_error" id="errorNombre" style="border-style: solid; border-color: red;"></div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Apellido</label>
        <div class="col-sm-10">
            <input type="input" class="form-control" id="txtApellido" name="txtApellido" placeholder="Apellido" required >
        </div>
        <div class="contenedor_error" id="errorApellido"></div>            
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
        <div class="col-sm-10">
            <input type="input" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Usuario">
        </div>
        <div class="contenedor_error" id="errorUsuario"></div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
        </div>
        <div class="contenedor_error" id="errorEmail"></div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
        </div>
        <div class="contenedor_error" id="errorPassword"></div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Reingresar Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Password">
        </div>
        <div class="contenedor_error" id="errorConfirmPassword"></div>
    </div>        
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnRegistrarse">Registrarme</button>
    </div>
<?php echo form_close(); ?>
<script src="<?php echo base_url('assets/js/scripts/registracion.js')."?".date("D M d, Y G:i")?>" type="text/javascript"></script>           


                    

