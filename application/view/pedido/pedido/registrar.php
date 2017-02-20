<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Registro de Empleados</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Codigo:</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="introduzca un codigo">
            </div>
            <div class="form-group">
              <label>Fecha del Pedido:</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker">
              </div>
              <!-- /.input group -->
            </div>
            <div class="form-group">
              <label>Cliente:</label>
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">Alabama</option>
                <option>Alaska</option>
                <option>California</option>
                <option>Delaware</option>
                <option>Tennessee</option>
                <option>Texas</option>
                <option>Washington</option>
              </select>
            </div>

          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>
      </div>
</div>
</div>
  </section>
</div>
<script type="text/javascript">
$(document).ready(function() {
  $(".form-control select2").select2();
});
</script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
