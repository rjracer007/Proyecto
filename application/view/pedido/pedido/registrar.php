<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Registro de Pedido</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">*Código:</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="introduzca un codigo">
            </div>

              <div class="form-group">
                    <label for="exampleInputEmail1">*Fecha de Pedido:</label>
                    <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>">
                </div>

            <div class="form-group">
              <label>*Cliente:</label>
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">001</option>
                <option>002</option>
                <option>003</option>
                <option>004</option>
              </select>
            </div>

          </div>        <!-- /.box-body -->
            <div class="box-header with-border">
              <button value="registrar" class="btn btn-success"  style="background: #3B82DF"  type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
              <button value="Cancelar" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
            </div>
        </form>
      </div>
</div>
</div>
  </section>
</div>

