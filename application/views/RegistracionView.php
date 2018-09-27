<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>MUSICOS AL TOQUE</strong> REGISTRATE</h1>
                    <div class="description">
                        <p>
                            Completa tus datos para comenzar a tener contacto con otros músicos como vos en <a href="http://azmind.com"><strong>Musicos Al Toque</strong></a>!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">                        	
                    <form role="form" action="" method="post" class="registration-form">
                        <fieldset class="fieldsetWidth">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Paso 1 / 3</h3>
                                    <p>Contanos quién sos:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Nombre</label>
                                    <input type="text" name="form-first-name" placeholder="Nombre..." class="form-first-name form-control" id="form-first-name" required>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-last-name">Apellido</label>
                                    <input type="text" name="form-last-name" placeholder="Apellido..." class="form-last-name form-control" id="form-last-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-about-yourself">De donde sos</label>
                                    <div style='display: block'>
                                        <select name="form-provincia" id="form-provincia" class="form-control select2" style="width: 200px" data-placeholder="Provincia">
                                        <option value=""></option>
                                    </select>
                                    </div>                                    
                                    <div id="contenedor-departamento" style='display:none'>
                                        <select name="form-departamento" id="form-departamento" class="form-control select2" style="width: 200px" data-placeholder="Departamento" >
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div id="contenedor-localidad" style='display:none'>
                                        <select name="form-localidad" id="form-localidad" class="form-control select2" style="width: 200px" data-placeholder="Localidad" >
                                            <option value=""></option>
                                        </select>
                                    </div>
                                    <div id="contenedor-barrio" style='display:none'>
                                        <select name="form-barrio" id="form-barrio" class="form-control select2" style="width: 200px" data-placeholder="Barrios" >
                                            <option value=""></option>
                                        </select>
                                    </div>                                   
                                </div>
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>
                        <fieldset class="fieldsetWidth">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Paso 2 / 3</h3>
                                    <p>Completa los datos de tu cuenta:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-key"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Email</label>
                                    <input type="email" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Password</label>
                                    <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-repeat-password">Repetir password</label>
                                    <input type="password" name="form-repeat-password" placeholder="Repetir password..." 
                                           class="form-repeat-password form-control" id="form-repeat-password">
                                </div>
                                <button type="button" class="btn btn-previous">Atras</button>
                                <button type="button" class="btn btn-next">Siguiente</button>
                            </div>
                        </fieldset>
                        <fieldset class="fieldsetWidth">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Paso 3 / 3</h3>
                                    <p>Perfil de Musico</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-twitter"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <div class="form-group">
                                    <label class="sr-only" for="form-facebook">Instrumento</label>
                                    <select name="form-instrumento" id="form-instrumento" class="form-control select2" style="width: 200px" data-placeholder="Instrumento" >
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-twitter">Fecha de nacimiento</label>
                                    <input type="date" name="form-fecha-nacimiento" id="form-fecha-nacimiento" placeholder="Fecha nacimiento" class="form-control" id="form-twitter">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-google-plus">Estilo Musical</label>
                                    <input type="text" name="form-google-plus" placeholder="Google plus..." class="form-google-plus form-control" id="form-google-plus">
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="form-google-plus">Artistas/Bandas de tu gusto</label>
                                    <input type="text" name="form-google-plus" placeholder="Google plus..." class="form-google-plus form-control" id="form-google-plus">
                                </div>
                                <button type="button" class="btn btn-previous">Atras</button>
                                <button type="submit" class="btn">Registrarme!</button>
                            </div>
                        </fieldset>		                    
                    </form>		                    
                </div>
            </div>
        </div>
    </div>            
</div>    
<input type="hidden" id="urlProvincias" value="<?php echo base_url('registracion/getProvincias'); ?>">
<input type="hidden" id="urlDepartamentos" value="<?php echo base_url('registracion/getDepartamentos'); ?>">
<input type="hidden" id="urlLocalidades" value="<?php echo base_url('registracion/getLocalidades'); ?>">
<input type="hidden" id="urlBarrios" value="<?php echo base_url('registracion/getBarrios'); ?>">
<input type="hidden" id="urlInstrumentos" value="<?php echo base_url('registracion/getInstrumentos')?>">

<script src="<?php echo base_url('assets/js/progressRegistration.js') . "?" . date("D M d, Y G:i"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/scripts/registracion.js') . "?" . date("D M d, Y G:i"); ?>" type="text/javascript"></script>




