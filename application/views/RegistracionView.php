<?php
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<?php //echo form_open(base_url('Registracion/guardar'), array('id'=>'frmRegistracion')) ?>
    <!--nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
            <div class="container">
                    <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html">Bootstrap Multi Step Registration Form Template</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling >
                    <div class="collapse navbar-collapse" id="top-navbar-1">
                            <ul class="nav navbar-nav navbar-right">
                                    <li>
                                            <span class="li-text">
                                                    Put some text or
                                            </span> 
                                            <a href="#"><strong>links</strong></a> 
                                            <span class="li-text">
                                                    here, or some icons: 
                                            </span> 
                                            <span class="li-social">
                                                    <a href="#"><i class="fa fa-facebook"></i></a> 
                                                    <a href="#"><i class="fa fa-twitter"></i></a> 
                                                    <a href="#"><i class="fa fa-envelope"></i></a> 
                                                    <a href="#"><i class="fa fa-skype"></i></a>
                                            </span>
                                    </li>
                            </ul>
                    </div>
            </div>
    </nav-->

    <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Bootstrap</strong> Multi Step Registration Form</h1>
                            <div class="description">
                            	<p>
	                            	This is a free responsive multi-step registration form made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
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
		                        			<h3>Step 1 / 3</h3>
		                            		<p>Tell us who you are:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-user"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="form-first-name" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Last name</label>
				                        	<input type="text" name="form-last-name" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">About yourself</label>
				                        	<textarea name="form-about-yourself" placeholder="About yourself..." 
				                        				class="form-about-yourself form-control" id="form-about-yourself"></textarea>
				                        </div>
				                        <button type="button" class="btn btn-next">Next</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Step 2 / 3</h3>
		                            		<p>Set up your account:</p>
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
				                        	<label class="sr-only" for="form-repeat-password">Repeat password</label>
				                        	<input type="password" name="form-repeat-password" placeholder="Repeat password..." 
				                        				class="form-repeat-password form-control" id="form-repeat-password">
				                        </div>
				                        <button type="button" class="btn btn-previous">Previous</button>
				                        <button type="button" class="btn btn-next">Next</button>
				                    </div>
			                    </fieldset>
			                    
			                    <fieldset>
		                        	<div class="form-top">
		                        		<div class="form-top-left">
		                        			<h3>Step 3 / 3</h3>
		                            		<p>Social media profiles:</p>
		                        		</div>
		                        		<div class="form-top-right">
		                        			<i class="fa fa-twitter"></i>
		                        		</div>
		                            </div>
		                            <div class="form-bottom">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-facebook">Facebook</label>
				                        	<input type="text" name="form-facebook" placeholder="Facebook..." class="form-facebook form-control" id="form-facebook">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-twitter">Twitter</label>
				                        	<input type="text" name="form-twitter" placeholder="Twitter..." class="form-twitter form-control" id="form-twitter">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-google-plus">Google plus</label>
				                        	<input type="text" name="form-google-plus" placeholder="Google plus..." class="form-google-plus form-control" id="form-google-plus">
				                        </div>
				                        <button type="button" class="btn btn-previous">Previous</button>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </div>
			                    </fieldset>
		                    
		                    </form>
		                    
                        </div>
                    </div>
                </div>
            </div>
            
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
<?php //echo form_close(); ?>
<!--script src="<?php //echo base_url('assets/js/scripts/registracion.js')."?".date("D M d, Y G:i")?>" type="text/javascript"></script-->     
<script src="<?php //echo base_url('assets/js/progressRegistration.js'); ?>" type="text/javascript"></script>


                    

