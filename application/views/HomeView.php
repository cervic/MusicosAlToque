
        <section class="busqueda" >		
            <h1>Buscando Músicos?</h1>		
            <form id="buscador" >
                <fieldset>
                    <input type="search" id="inputsearch" placeholder="Buscar...">
                    <!-- prueba dropdown-->	
                    <label for="country_name"></label><input id="country_name" name="country_name" type="text" list="country" placeholder="Localidad"/>
                    <datalist id="country">
                       <option value="Afghanistan">
                       <option value="Albania">
                       <option value="Algeria">
                       <option value="Andorra">
                       <option value="Angola">
                    </datalist>
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
                                <button  type="button" class="btn btn-default" data-toggle="modal" data-target="#busquedaMusico">Publicar Búsqueda</button>
                          </div>
                        </div>
                </div>
                <div class="col-sm-6">
                        <div class="card">
                                <div class="card-body">
                                <h4 class="card-title">Bandas</h4>
                                <p class="card-text">Encontra bandas buscando musicos, conoce sus preferencias y lugar de ensayo. Postulate!</p>
                                <!--<a href="#" class="btn btn-primary">Publicar </a>-->
                                <button  type="button" class="btn btn-default" data-toggle="modal" data-target="#busquedaBanda">Publicar Búsqueda</button>
                                </div>
                        </div>
                </div>
            </div>
        </section>	