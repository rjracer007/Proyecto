<div class="content-wrapper">
    <!-- Content Header (Page header) -->
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
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Empleados</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>IDENTIFICACIÓN</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>FECHA INGRESO</th>
                  <th>CARGO</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($empleado as $value): ?>
                  <tr>
                    <td><?= $value["idEmpleado"] ?></td>
                    <td><?= $value["nombres"] ?></td>
                    <td><?= $value["apellidos"] ?></td>
                    <td><?= $value["fecha_ingreso"] ?></td>
                    <td><?= $value["cargo"] ?></td>
                    <td><?= $value["estado"]==1?"Activo" : "Inactivo" ?></td>
                    <td>
                      <a href="<?= URL ?>gusuario/editar/<?= $value['idEmpleado'] ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                      <?php if($value["estado"] == 1){  ?>
                        <a href="#" oneclick="cambiarEstado(<?= $value['idEmpleado'] ?>,0)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
                      <?php }else { ?>
                        <a href="#" oneclick="cambiarEstado(<?= $value['idEmpleado'] ?>,1)" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
                      <?php } ?>
                      <a href="#" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>IDENTIFICACIÓN</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>FECHA INGRESO</th>
                  <th>CARGO</th>
                  <th>ESTADO</th>
                  <th>OPCIONES</th>
                </tr>
                </tfoot>
              </table>
              <a  class='boton' href="<?= URL ?>gusuario/registrar" ></a>
          </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
      </div>
        <!-- /.col -->
    </div>
      <!-- /.row -->
  </section>
    <!-- /.content -->
</div>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
