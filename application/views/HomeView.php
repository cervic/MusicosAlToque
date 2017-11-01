
<section class="busqueda" >		
    <h1>Buscando Músicos?</h1>		
    <form id="buscador" >
        <fieldset>
            <!--input type="search" id="inputsearch" placeholder="Buscar..."-->
            <select id="cboInstrumento" class="select2" data-placeholder="Instrumento" style="width:200px">
                <option value=""></option>
            </select>
            <!-- prueba dropdown-->	
            <!--<label for="country_name"></label><input id="country_name" name="country_name" type="text" list="country" placeholder="Localidad"/>-->
            <select id="cboLocalidad" class="select2"  data-placeholder="Localidad" style="width: 200px">
                <option value=""></option>
            </select>
            <button type="submit"id="btn-search">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>

        </fieldset>
    </form>			
</section>
<section>
    <div class="row">
        <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                    <h4 class="card-title">Músicos</h4>
                    <p class="card-text">Registrate y empeza a tener contacto con musicos buscando comenzar un proyecto o sumarse a uno ya sobre ruedas</p>
                    <!--<a href="#" class="btn btn-primary">Publicar</a>-->
                    <button  id="btnPublicacionMusico" type="button" class="btn btn-default" data-toggle="modal" data-target="#LayoutModal">Publicar Búsqueda</button>
              </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Bandas</h4>
                    <p class="card-text">Encontra bandas buscando musicos, conoce sus preferencias y lugar de ensayo. Postulate!</p>
                    <!--<a href="#" class="btn btn-primary">Publicar </a>-->
                    <button  type="button" class="btn btn-default" data-toggle="modal" data-target="#LayoutModal">Publicar Búsqueda</button>
                    </div>
            </div>
        </div>
    </div>            
</section>
<input type="hidden" id="urlProvincias" value="<?php echo base_url('Home/getProvincias'); ?>">
<input type="hidden" id="urlInstrumentos" value="<?php echo base_url('Home/getInstrumentos'); ?>">
<input type="hidden" id="">
<script src="<?php echo base_url('assets/js/scripts/home.js'); ?>" type="text/javascript"></script>
