<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Registro de Empleados</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>

        <form action="<?= URL ?>gusuario/crear" role="form" method="POST">
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">*Identificacíon:</label>
                <input type="text" class="form-control" name="txtid" placeholder="introduzca numero de identificacion">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">*Nombres:</label>
                <input type="text" class="form-control" name="txtname" placeholder="introduzca nombre/s">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">*Apellidos:</label>
                <input type="text" class="form-control" name="txtape" placeholder="introduzca apellidos">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Celular:</label>
                <input type="text" class="form-control" name="txtced" placeholder="introduzca numero de celular">
              </div>


                    <div class="form-group">
                      <label>*Tipo de Sangre:</label>
                      <select class="form-control select2" name="tiprh" id="tiprh" style="width: 100%;">
                        <option selected="selected">O-</option>
                        <option>O+</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                      </select>
                    </div>


              <div class="form-group">
                    <label for="exampleInputEmail1">*Fecha Nacimiento:</label>
                    <input type="date" class="form-control" name="fena" value="<?php echo date("Y-m-d");?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Correo Electronico:</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="introduzca Email">
                </div>


                 <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Ingreso:</label>
                  <input type="date" class="form-control" name="fein" value="<?php echo date("Y-m-d");?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Numero de Hijos:</label>
                  <input type="number" class="form-control" name="numhijo" placeholder="introduzca el numero de hijos">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Teléfono Fijo:</label>
                  <input type="number" class="form-control" name="txtel" placeholder="introduzca numero de telefono">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">*Dirección:</label>
                  <input type="text" class="form-control" name="txtdir" placeholder="introduzca direccion">
                </div>
                  </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Barrio:</label>
                  <input type="text" class="form-control" name="txtbar" placeholder="introduzca barrio">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Municipio:</label>
                  <input type="text" class="form-control" name="txtmuni" placeholder="introduzca municipio">
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">*Cargo:</label>
                  <input type="text" class="form-control" name="txtcargo" placeholder="introduzca su cargo">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Cesantias:</label>
                  <input type="text" class="form-control" name="txtcesa" placeholder="introduzca cesantias">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Pension:</label>
                  <input type="text" class="form-control" name="txtpen" placeholder="introduzca pension">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Caja de Compensacion:</label>
                  <input type="text" class="form-control" name="caja" placeholder="introduzca compensacion">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Tipo de Contrato:</label>
                  <input type="text" class="form-control" name="txtcontra" placeholder="introduzca contrato">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Proceso:</label>
                  <input type="text" class="form-control" name="txtpross" placeholder="introduzca el proceso designado en la empresa">
                </div>

                    <div class="form-group">
                      <label>*Género:</label>
                      <select class="form-control select2" id="gene" name="gene" style="width: 100%;">
                      <?php foreach ($gen as $value):?>
                        <option selected="selected" value="<?=$value['idGenero'] ." ".$value['nombre'] ?>"></option>
                      <?php endforeach; ?>
                      </select>
                    </div>

                      <div class="form-group">
                        <label>*Tipo de Documento:</label>
                        <select class="form-control select2" id="tipdoc" name="tipdoc" style="width: 100%;">
                        <?php foreach ($documento as $value):?>
                          <option value="<?=$value['idTipo_documento'] ?>"><?=$value['idTipo_documento'] ." ".$value['descripcion']?></option>
                        <?php endforeach; ?>
                        </select>
                      </div>


                          <div class="form-group">
                            <label>*Cuenta:</label>
                            <select class="form-control select2" id="txtcuenta" name="txtcuenta" style="width: 100%;">
                            <?php foreach ($cuent as $value):?>
                              <option selected="selected" value="<?=$value['Cuenta_idCuenta'] ." ".$value['nombre_usuario']?>" ></option>

                            <?php endforeach; ?>
                            </select>
                          </div>
                      </div>
        </form>
      </div>
</div>

<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">EPS</h3>
    </div>
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">*Identificacion:</label>
          <input type="text" class="form-control" name="txtideps" placeholder="Digite una identificacion">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">*Nombre:</label>
          <input type="text" class="form-control" name="txtnomeps" placeholder="Digite el nombre de la eps">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Abreviatura:</label>
          <input type="text" class="form-control" name="txtabreeps" placeholder="ingrese la abreviatura del nombre de la eps">
        </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Fecha Ingreso:</label>
            <input type="date" class="form-control" name="txtfecineps" value="<?php echo date("Y-m-d");?>">
          </div>
           <div class="form-group">
            <label for="exampleInputEmail1">Fecha Retiro:</label>
            <input type="date" class="form-control" name="txtfecreeps" value="<?php echo date("Y-m-d");?>">
          </div>
      </div>
    </form>
  </div>
</div>


<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Nivel de Estudio</h3>
    </div>
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">*Identificación:</label>
          <input type="text" class="form-control" name="txtidne" placeholder="Digite una identificacion">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">*Descripción:</label>
          <input type="text" class="form-control" name="txtdesnv" placeholder="Describa su estudio">
        </div>
      </div>
    </form>
  </div>




  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Profesión</h3>
    </div>
    <form role="form">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">*Identificacion:</label>
          <input type="text" class="form-control" name="txtidp" placeholder="Digite una identificación">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">*Descripcion:</label>
          <input type="text" class="form-control" name="txtdesp" placeholder="Describa su experiencia profesional">
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Form EPS NIVEL PROFESION -->
  <div class="col-md-6">     <!-- /.box-body -->
    <div class="box-header with-border">
      <button  class="btn btn-info" type="submit"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
      <button  class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
    </div>
  </div>

</div>
  </section>
</div>


<script type="text/javascript">
  $(document).ready(function(){
    $("#gene").select2();
    $("#tipdoc").select2();
    $("#tiprh").select2();
  })

</script>
