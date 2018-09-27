
<section class="busqueda" >		
    <h1>Buscando Músicos?</h1>		
    <form id="buscador" action="<?php echo base_url('Resultados/index')?>" >
        <fieldset>
            <select id="cboInstrumento" class="select2" data-placeholder="Instrumento" style="width:200px">
                <option value=""></option>
            </select>          
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
        <h2>Publicar Búsqueda</h2>
        <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Correo Electronico</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Instrumento</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect2">Localidad</label>
              <select multiple class="form-control" id="exampleFormControlSelect2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripcion de la Búsqueda</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
          </form>
        
        
    </div>            
</section>
<input type="hidden" id="urlProvincias" value="<?php echo base_url('Home/getProvincias'); ?>">
<input type="hidden" id="urlInstrumentos" value="<?php echo base_url('Home/getInstrumentos'); ?>">
<input type="hidden" id="urlPublicacionMusicoView" value="<?php echo base_url('Publicacion/index'); ?>">
<input type="hidden" id="urlPublicacionBandaView" value="<?php echo base_url('Publicacion/banda'); ?>">
<input type="hidden" id="urlBuscarMusicosView" value="<?php echo base_url('Resultados/index'); ?>">
<script src="<?php echo base_url('assets/js/scripts/home.js'); ?>" type="text/javascript"></script>
