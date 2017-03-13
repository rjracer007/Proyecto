<div class="content-wrapper">
  <section class="content">
    <div class="row">

    <div class="col-md-12">
      <div class="box box-primary">
        <center>
        <div class="box-header with-border">
          <h1>Editar Empleados</h1>
        </div>
        <h6>Los campos con (*) son obligatorios</h6>
      </center>

        <form action="<?= URL ?>gusuario/modificar" role="form" method="post">
          <div class="box-body">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">*Identificacíon:</label>
                <input type="text" class="form-control" name="txtid" value="<?php $empleado ['idEmpleado'];?>">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">*Nombres:</label>
                <input type="text" class="form-control" name="txtname" value="<?php $empleado ['nombres'];?>">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">*Apellidos:</label>
                <input type="text" class="form-control" name="txtape" value="<?php $empleado ['apellidos'];?>">
              </div>


              <div class="form-group">
                <label for="exampleInputEmail1">Celular:</label>
                <input type="text" class="form-control" name="txtced" value="<?php $empleado ['celular'];?>">
              </div>


                    <div class="form-group">
                      <label>*Tipo de Sangre:</label>
                      <select class="form-control select2" name="tiprh" id="tiprh" style="width: 100%;" value="<?php $empleado ['rh'];?>">
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
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?php $empleado ['correo_electronico'];?>">
                </div>


                 <div class="form-group">
                  <label for="exampleInputEmail1">*Fecha Ingreso:</label>
                  <input type="date" class="form-control" name="fein" value="<?php echo date("Y-m-d");?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Numero de Hijos:</label>
                  <input type="number" class="form-control" name="numhijo" value="<?php $empleado ['numero_hijos'];?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Teléfono Fijo:</label>
                  <input type="number" class="form-control" name="txtel" value="<?php $empleado ['telefono_fijo'];?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">*Dirección:</label>
                  <input type="text" class="form-control" name="txtdir" value="<?php $empleado ['direccion'];?>">
                </div>
                  </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">*Barrio:</label>
                  <input type="text" class="form-control" name="txtbar" value="<?php $empleado ['barrio'];?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Municipio:</label>
                  <input type="text" class="form-control" name="txtmuni" value="<?php $empleado ['municipio'];?>">
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">*Cargo:</label>
                  <input type="text" class="form-control" name="txtcargo" value="<?php $empleado ['cargo'];?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Cesantias:</label>
                  <input type="text" class="form-control" name="txtcesa" value="<?php $empleado ['cesantias'];?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Pension:</label>
                  <input type="text" class="form-control" name="txtpen" value="<?php $empleado ['Pension_idPension'];?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Caja de Compensacion:</label>
                  <input type="text" class="form-control" name="caja" value="<?php $empleado ['Caja_compensacion_idCaja_compensacion'];?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Tipo de Contrato:</label>
                  <input type="text" class="form-control" name="txtcontra" value="<?php $empleado ['Tipo_contrato_idTipo_contrato'];?>">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">*Proceso:</label>
                  <input type="text" class="form-control" name="txtpross" value="<?php $empleado ['procesos'];?>">
                </div>

                    <div class="form-group">
                      <label>*Género:</label>
                      <select class="form-control select2" id="gene" name="gene" style="width: 100%;">
                      <?php foreach ($adicional as $value):?>
                        <option selected="selected" value="<?=$value['idGenero'] ." ".$value['nombre'] ?>"></option>
                      <?php endforeach; ?>
                      </select>
                    </div>



                      <div class="form-group">
                        <label>*Tipo de Documento:</label>
                        <select class="form-control select2" id="tipdoc" name="tipdoc" style="width: 100%;">
                        <?php foreach ($adicional as $value):?>
                          <option selected="selected" value="<?=$value['idTipo_documento'] ." ".$value['descripcion']?>"></option>
                        <?php endforeach; ?>
                        </select>
                      </div>


                          <div class="form-group">
                            <label>*Cuenta:</label>
                            <select class="form-control select2" id="txtcuenta" name="txtcuenta" style="width: 100%;">
                            <?php foreach ($cuenta as $value):?>
                              <option selected="selected" value="<?=$value['Cuenta_idCuenta'] ." ".$value['nombre_usuario']?>" ></option>
                              <option>M</option>
                              <option>O</option>
                            <?php endforeach; ?>
                            </select>
                          </div>
                      </div>

          <div class="col-md-6">     <!-- /.box-body -->
            <div class="box-header with-border">
              <button  class="btn btn-info" type="submit" name="btnMod"><span class="glyphicon glyphicon-ok"></span>Modificar</button>
              <button  class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
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
          <input type="text" class="form-control" name="txtideps">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">*Nombre:</label>
          <input type="text" class="form-control" name="txtnomeps">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Abreviatura:</label>
          <input type="text" class="form-control" name="txtabreeps">
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
          <input type="text" class="form-control" name="txtidne">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">*Descripción:</label>
          <input type="text" class="form-control" name="txtdesnv">
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
          <input type="text" class="form-control" name="txtidp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">*Descripcion:</label>
          <input type="text" class="form-control" name="txtdesp">
        </div>
      </div>
    </form>
  </div>
</div>

<!-- Form EPS NIVEL PROFESION -->


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
