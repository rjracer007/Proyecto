<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
      <center>
        <div class="box-header with-border">
          <h1>Registro de Orden</h1>
        </div>
                <h6>Los campos con (*) son obligatorios</h6>
        </center>
        <form role="form">
        <div class="box-body">
        <div class="col-md-8">
          <div class="form-group">
              <label for="exampleInputEmail1">*Código:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Introduzca su el código del cliente">
            </div>
          </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Inicio:</label>
                  <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>">
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Finalizacion:</label>
                  <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>">
                </div>
              </div>
      
          <div class="col-md-8">
          <div class="form-group">
              <label for="exampleInputEmail1">*Identificación del Empleado:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Introduzca su el nombre del cliente">
            </div>
          </div>
          <div class="col-md-8">
                <div class="box-header with-border">
                   <button value="registrar" class="btn btn-info" type="button"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
                   <button value="Cancelar" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
                </div>
          </div>
        </div>
        </form>
      </div>
</div>
</div>
  </section>
</div>
