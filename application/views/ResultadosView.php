<section class="resultados" >
    <h1>Resultados de Búsqueda</h1>                    
        <div id="resultados">
            <ul class="list-unstyled">
              <?php foreach($response as $value){ ?>
                <li class="media">
                      <img class="mr-3" src=".." alt="Instrumento">
                      <div class="media-body">
                        <h5 class="mt-0 mb-1"><?php echo $value->nombre_usuario ?></h5>
                        <p>Instrumento: <?php echo $value->instrumento ?></p>
                        <p>Correo electrónico: <?php echo $value->email ?></p>
                        <p>Localidad: <?php echo $value->localidad ?></p>
                        <p>Estilo_musical: <?php echo $value->estilo_musical ?></p>
                      </div>
                </li>
              <?php } ?>                            
            </ul>	
        </div>
	
</section>