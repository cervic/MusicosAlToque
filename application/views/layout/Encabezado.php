<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Músicos al Toque</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet"/>
    <link href="<?php echo base_url('assets/css/bootstrap-chosen.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('assets/css/estilosHome.css'); ?>" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css') ?>" />
    <!--script src="<?php //echo base_url('assets/css/estilos.css'); ?>" type="text/javascript"></script-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/form-elements.css');?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/estilosRegistracion.css')?>" />
    <link rel="shortcut icon" href="<?php echo base_url('assets/ico/favicon.png');?>" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"> </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/jquery.backstretch.min.js'); ?>" type="text/javascript" ></script>
    <script src="<?php echo base_url('assets/js/retina-1.1.0.js'); ?>" type="text/javascript"></script>    
    <script src="<?php echo base_url('assets/js/progressRegistration.js'); ?>" type="text/javascript"></script>
    
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css");?>"/>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700i,900');
        </style> 
    </head>
    <body class="bg-full img-bkg">
        <div id="contenedor la-anim-1 ">	
            <div class="col-xs-12 col-md-6 col-md-offset-3">	
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                          <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url('Home/index')?>">MUSICOS AL TOQUE</a>
                        </div>

                          <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                  <li><a href="#">Buscar<span class="sr-only">(current)</span></a></li>
                                  <li><a href="#">Explorar</a></li>
                                  <li><a href="#">Mi cuenta</a></li>

                            </ul>
                            <form class="navbar-form navbar-left">
                                  <!--<div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                  </div>-->
                            
                            <?php 
                                if(isset($this->session->userdata['logged_in'])){
                                    $user_data = $this->session->userdata['logged_in'];      
                                    echo '<p>';
                                    echo 'Hola '.$user_data['usuario']."  ";
                                    echo "<button  class='btn btn-default'  id='btnCerrarSession'>Cerrar Sesion</button>";
                                    echo '</p>';
                                }else{
                                    echo "<ul class='nav navbar-nav navbar-right'>
                                            <a class='btn btn-default' href='";
                                            echo base_url("Registracion/index"); 
                                            echo "'>Registrate</a>
                                            <!--button  class='btn btn-default' data-toggle='modal' data-target='#LayoutModal' id='btnModalRegistracion'> Registrate</button-->
                                            <button  class='btn btn-default' data-toggle='modal' data-target='#LayoutModal' id='btnModalLogin'> Iniciar Sesión</button>                                  
                                         </ul>";
                                }
                            ?>
                            </form>
                            <input type="hidden" id="urlCerrarSession" value="<?php echo base_url("Login/cerrar_session"); ?>">
                            <input type="hidden" id="urlHome" value="<?php echo base_url("Home/index"); ?>">
                            <!--<ul class="nav navbar-nav navbar-right">
                                  <button  class="btn btn-default" data-toggle="modal" data-target="#LayoutModal" id="btnModalRegistracion"> Registrate</button>
                                  <button  class="btn btn-default" data-toggle="modal" data-target="#LayoutModal" id="btnModalLogin"> Iniciar Sesión</button>                                  
                            </ul>-->
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                    
               

