<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Modificación de Cliente</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="<?= URL ?>cliente/modificar" method="post">
          <div class="box-body">
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">*Identificacíon:</label>
              <input type="text" class="form-control" name="txtcod" value="<?= $client['idCliente']; ?>">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">*Nombre:</label>
              <input type="text" class="form-control" name="txtnom" value="<?= $client['nombre']; ?>">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">Apellido:</label>
              <input type="text" class="form-control" name="txtape" value="<?= $client['apellidos']; ?>">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">NIT:</label>
              <input type="text" class="form-control" name="txtnit" value="<?=$client['nit']; ?>">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">Teléfono:</label>
              <input type="text" class="form-control" name="txttel" value="<?=$client['telefono']; ?>">
            </div>
          </div>
          <div class="col-md-8">
            <div class="form-group">
              <label for="exampleInputEmail1">Dirección:</label>
              <input type="text" class="form-control" name="txtdir" value="<?=$client['direccion']; ?>">
            </div>
          <!-- /.box-body -->
          <div class="box-header with-border">
             <button value="Modificar" class="btn btn-info" type="submit" onclick="cliente/modificar()"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
             <button value="Cancelar" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>