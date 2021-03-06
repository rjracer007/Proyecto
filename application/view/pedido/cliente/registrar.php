<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Registro de Clientes</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>cliente/insertar" method="POST">
          <div class="box-body">
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">*Identificacíon:</label>
              <input type="text" class="form-control" name="txtcod" placeholder="Introduzca la identificación del cliente">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">*Nombre:</label>
              <input type="text" class="form-control" name="txtnom" placeholder="Introduzca el nombre del cliente">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">Apellido:</label>
              <input type="text" class="form-control" name="txtape" placeholder="Introduzca los apellidos del cliente">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">NIT:</label>
              <input type="text" class="form-control" name="txtnit" placeholder="Introduzca el NIT">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">Teléfono:</label>
              <input type="text" class="form-control" name="txttel" placeholder="Introduzca el teléfono del cliente">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">Dirección:</label>
              <input type="text" class="form-control" name="txtdir" placeholder="Introduzca la dirección del cliente">
            </div>
          <!-- /.box-body -->
          <div class="box-header with-border">
             <button value="registrar" class="btn btn-info" type="submit" onclick="cliente/insertar()"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
             <button value="Cancelar" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
          </div>
        </div>
        </form>
      </div>
</div>
</div>
  </section>
</div>
