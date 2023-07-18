<div class="modal fade" id="modalmantenimiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
            <div class="modal-header">  
                  <h4 class="modal-title" id="mdltitulo"></h4>
            </div>
            <form method="post" id="producto_form">
                <div class="modal-body">
                    <input type="hidden" id="prod_id" name="prod_id">

                    <div class="form-group">
                        <label class="form-label" for="cat_id">Categoria</label>
                        <select class="form-control select2" id="cat_id" name="cat_id" data-placeholder="Seleccione" style="width: 100%">
                            
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prod_nom">Nombre</label>
                        <input type="text" class="form-control" id="prod_nom" name="prod_nom" placeholder="Ingrese nombre" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prod_descrip">Descripción</label>
                        <textarea rows="3" class="form-control" placeholder="Ingrese descripción" id="prod_descrip" name="prod_descrip" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="prod_cant">Cantidad</label>
                        <input type="number" class="form-control" id="prod_cant" name="prod_cant" placeholder="Ingrese cantidad" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-primary">Guardar</button>
                </div>
            </form>
      


    </div>
  </div>
</div>