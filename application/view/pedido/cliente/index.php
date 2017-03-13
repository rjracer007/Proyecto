
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
              <h3 class="box-title">Clientes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>IDENTIFICACÍON</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>NIT</th>
                  <th>TELÉFONO</th>
                  <th>DIRECCIÓN</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($client as $value): ?>
                  <tr>
                    <td><?= $value['idCliente'] ?></td>
                    <td><?= $value['nombre'] ?></td>
                    <td><?= $value['apellidos'] ?></td>
                    <td><?= $value['nit'] ?></td>
                    <td><?= $value['telefono'] ?></td>
                    <td><?= $value['direccion'] ?></td>
                    <td>
                      <a href="<?= URL ?>cliente/editar/<?= $value['idCliente'] ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                      <a href="<?= URL ?>cliente/eliminar/<?= $value['idCliente'] ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></a>
                    </td>
                  </tr>
                <?php endforeach ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>IDENTIFICACÍON</th>
                  <th>NOMBRE</th>
                  <th>APELLIDO</th>
                  <th>NIT</th>
                  <th>TELÉFONO</th>
                  <th>DIRECCIÓN</th>
                  <th>OPCIONES</th>
                </tr>
                </tfoot>
              </table>
              <a  class='boton' href="<?= URL ?>cliente/registrar" ></a>
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

<script src="<?php echo URL; ?>plugins/datatables/dataTables.bootstrap.min.js"></script>

<script src="<?php echo URL; ?>plugins/datatables/jquery.dataTables.min.js"></script>

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
