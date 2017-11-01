<?php
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<?php echo form_open(base_url('Registracion/guardar'), array('id'=>'frmRegistracion')) ?>
    <div id="msform">
          <!-- progressbar -->
          <ul id="progressbar">
            <li class="active">Registrate</li>
            <li>Datos Personales</li>
            <li>Carga tu Perfil</li>
          </ul>
          <!-- fieldsets -->
          <fieldset>
            <h2 class="fs-title">Registrate</h2>
            <h3 class="fs-subtitle">Músicos al toque</h3>
            <input type="text" name="email" placeholder="Email" />
            <input type="password" name="pass" placeholder="Password" />
            <input type="password" name="cpass" placeholder="Confirm Password" />
            <input type="button" name="next" class="next action-button" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">Datos Personales</h2>
            <h3 class="fs-subtitle">Ingresá tus datos personales </h3>
            <input type="text" name="Nomnbre" placeholder="Nombre" />
            <input type="text" name="Apellido" placeholder="Apellido" />
            <input type="text" name="Localidad" placeholder="Localidad" />
            <input type="text" name="Instrumento" placeholder="Instrumento" />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="button" name="next" class="next action-button" value="Next" />
          </fieldset>
          <fieldset>
            <h2 class="fs-title">Personal Detail</h2>
            <h3 class="fs-subtitle">We will never sell it</h3>
            <input type="text" name="fname" placeholder="First Name" />
            <input type="text" name="lname" placeholder="Last Name" />
            <input type="text" name="phone" placeholder="Phone" />
            <textarea name="address" placeholder="Address"></textarea>
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <input type="submit" name="submit" class="submit action-button" value="Submit" />
          </fieldset>
    </div>
    <!--div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10">
            <input type="input" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" required>
        </div>        
    </div>
                  
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
    </div-->
<?php echo form_close(); ?>
<!--script src="<?php //echo base_url('assets/js/scripts/registracion.js')."?".date("D M d, Y G:i")?>" type="text/javascript"></script-->     
<script src="<?php echo base_url('assets/js/progressRegistration.js'); ?>" type="text/javascript"></script>


                    

