            </div>
        </div>

        <!-- POP UP-->
        <div class="modal fade" id="LayoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <div id="form-content" ></div>
              </div>                
            </div>
          </div>
        </div>        
        <input type="hidden" id="urlRegistracionView" value="<?php echo base_url("Registracion/index"); ?>" >
        <input type="hidden" id="urlLoginView" value="<?php echo base_url("Login/index"); ?>" >              
        
        <script src="<?php echo base_url('assets/js/Common.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('assets/js/scripts/layout.js'); ?>" type="text/javascript"></script>        
    </body>
</html>                        