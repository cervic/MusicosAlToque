<?php
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>MUSICOS AL TOQUE</strong> Registrate</h1>
                    <div class="description">
                        <p>
                                Completa tus datos para comenzar a tener contacto con otros músicos como vos en <a href="http://azmind.com"><strong>Musicos Altoque</strong></a>!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">                        	
                    <form role="form" action="" method="post" class="registration-form">
                        <fieldset>
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
                                                <input type="text" name="form-first-name" placeholder="Nombre..." class="form-first-name form-control" id="form-first-name">
                                        </div>
                                        <div class="form-group">
                                                <label class="sr-only" for="form-last-name">Apellido</label>
                                                <input type="text" name="form-last-name" placeholder="Apellido..." class="form-last-name form-control" id="form-last-name">
                                        </div>
                                        <div class="form-group">
                                                <label class="sr-only" for="form-about-yourself">De donde sos</label>
                                                <select name="form-localidad" id="form-localidad" class="form-control select2" style="width: 200px" data-placeholder="De donde sos">
                                                    <option value=""></option>
                                                </select>
                                                <!--textarea name="form-about-yourself" placeholder="De dónde Sos." 
                                                                        class="form-about-yourself form-control" id="form-about-yourself"></textarea-->
                                        </div>
                                        <button type="button" class="btn btn-next">Siguente</button>
                                    </div>
                            </fieldset>
                            <fieldset>
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
                                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
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
                            <fieldset>
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
                                            <input type="text" name="form-facebook" placeholder="Instrumento" class="form-facebook form-control" id="form-facebook">
                                    </div>
                                    <div class="form-group">
                                            <label class="sr-only" for="form-twitter">Edad</label>
                                            <input type="text" name="form-twitter" placeholder="Edad" class="form-twitter form-control" id="form-twitter">
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
<?php //echo form_close(); ?>
<script src="<?php echo base_url('assets/js/progressRegistration.js')."?".date("D M d, Y G:i"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/scripts/registracion.js')."?".date("D M d, Y G:i"); ?>" type="text/javascript"></script>


                    

