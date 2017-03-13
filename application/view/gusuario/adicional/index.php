<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Ramsperbit
      <small>Licol S.A.S</small>
    </h1>
  </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!-- /.box -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Genero</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="#registroG" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-success col-md-offset-11"><span class="glyphicon glyphicon-plus" ></span>Nuevo</button></a><br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>IDENTIFICACIÓN</th>
                  <th>NOMBRE</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($genero as $value): ?>
                  <tr>
                    <td><?= $value["idGenero"] ?></td>
                    <td><?= $value["nombre"] ?></td>
                    <td>
                      <a href="<?= URL ?>genero/eliminarG/<?= $value['idGenero'] ?>" class="btn btn-danger btn-sm" ><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="modal fade" id="registroG" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Registrar Genero</h4>
            </div>
            <div class="modal-body">
                <!--Formulario Baja-->
        <form  action="<?= URL ?>genero/crearG" method="POST">
          <label class="">Identificación</label>
          <input type="text" class="form-control" id="txtidgen" name="txtidgen">
          <br>
           <label class="">Nombre</label>
          <input type="text" class="form-control" id="txtnomg" name="txtnomg">


       <br>
       <div class="modal-footer" >
       <button  class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span>Registrar</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
              </div>
            </div>
        </div>
      </div>
    </div>
    </form>
      <!-- /.row -->
    </section>

    <!-- /.content -->
  </div>


  <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Tipo Documento</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <a href="#registroT" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-success col-md-offset-11 "><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>IDENTIFICACIÓN</th>
                    <th>DESCRIPCIÓN</th>
                    <th>OPCIONES</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($documento as $value): ?>
                    <tr>
                      <td><?= $value["idTipo_documento"] ?></td>
                      <td><?= $value["descripcion"] ?></td>
                      <td>
                        <a href="<?= URL ?>tipodocumento/eliminarT/<?= $value['idTipo_documento'] ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></a>
                      </td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="modal fade" id="registroT" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Registrar Tipo Documento</h4>
              </div>
              <div class="modal-body">
                  <!--Formulario Baja-->
          <form  action="<?= URL ?>tipodocumento/crearT" method="post">
            <label class="">Identificación</label>
            <input type="text" class="form-control" id="txtidtip" name="txtidtip">
            <br>
             <label class="">Descripcion</label>
            <input type="text" class="form-control" id="txtdestip" name="txtdestip">

         <br>
         <div class="modal-footer" >
         <button value="registrar" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                </div>
              </div>
          </div>
        </div>
      </div>
        </form>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>

    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <!-- /.box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pension</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <a href="#registroP" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-success col-md-offset-11"><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>IDENTIFICACIÓN</th>
                      <th>NOMBRE</th>
                      <th>ABREVIATURA</th>
                      <th>FECHA INGRESO</th>
                      <th>FECHA RETIRO</th>
                      <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($pension as $value): ?>
                      <tr>
                        <td><?= $value["idPension"] ?></td>
                        <td><?= $value["nombre"] ?></td>
                        <td><?= $value["abreviatura"] ?></td>
                        <td><?= $value["fecha_ingreso"] ?></td>
                        <td><?= $value["fecha_retiro"] ?></td>
                        <td>
                          <a href="<?= URL ?>pension/eliminarP/<?= $value['idPension'] ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <div class="modal fade" id="registroP" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Registrar Pension</h4>
                </div>
                <div class="modal-body">
                    <!--Formulario Baja-->
            <form  action="<?= URL ?>pension/crearP" method="post">
              <label class="">Identificación</label>
              <input type="text" class="form-control" id="txtidpen" name="txtidpen">
              <br>
               <label class="">Nombre</label>
              <input type="text" class="form-control" id="txtnompen" name="txtnompen">
              <br>
               <label class="">Abreviatura</label>
              <input type="text" class="form-control" id="txtabre" name="txtabre">
              <br>
               <label class="">Fecha Ingreso</label>
              <input type="date" class="form-control" id="txtfecin" name="txtfecin">
              <br>
               <label class="">Fecha Retiro</label>
              <input type="date" class="form-control" id="txtfecre" name="txtfecre">



           <br>
           <div class="modal-footer">
           <button value="registrar" class="btn btn-success col-md-offset-2" style="background: #3B82DF" type="submit"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
            <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                  </div>
                </div>
            </div>
          </div>
        </div>
          </form>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>

      <div class="content-wrapper">

          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Tipo de Contrato</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <a href="#registroB" style="color: #fff" data-toggle="modal"><button value="Nuevo" class="btn btn-success col-md-offset-11 " ><span class="glyphicon glyphicon-plus" ></span> Nuevo</button></a><br><br>
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>IDENTIFICACIÓN</th>
                        <th>DESCRIPCIÓN</th>
                        <th>OPCIONES</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($contrato as $value): ?>
                        <tr>
                          <td><?= $value["idTipo_contrato"] ?></td>
                          <td><?= $value["descripcion"] ?></td>
                          <td>
                            <a href="<?= URL ?>tipocontrato/eliminarC/<?= $value['idTipo_contrato'] ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></a>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
            <div class="modal fade" id="registroB" tabindex="-1" data-target=".bs-example-modal-lg"  role="dialog" aria-labelledby="exampleModalLabel" >
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">Registrar Tipo Contrato</h4>
                  </div>
                  <div class="modal-body">
                      <!--Formulario Baja-->
              <form  action="<?= URL ?>tipocontrato/crearC" method="POST">
                <label class="">Identificación</label>
                <input type="text" class="form-control" name="txtidcon">
                <br>
                 <label class="">Descripcion</label>
                <input type="text" class="form-control" name="txtdescon">


             <br>
             <div class="modal-footer">
             <button type="submit" value="registrar" class="btn btn-success col-md-offset-2" style="background: #3B82DF" onclick="tipocontrato/crearC()"><span class="glyphicon glyphicon-ok"></span> Registrar</button>
              <button type="button" class="btn btn-warning" data-dismiss="modal" ><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                    </div>
                  </div>
              </div>
            </div>
          </div>
                </form>
            <!-- /.row -->
          </section>

          <!-- /.content -->
        </div>
