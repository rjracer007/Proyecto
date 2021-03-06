<!-- ./wrapper -->
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
              <h3 class="box-title">Productos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>EXISTENCIAS</th>
                  <th>DESCRIPCIÓN</th>
                  <th>CÓDIGO DE CATEGORÍA</th>
                  <th>UNIDAD DE MEDIDA</th>
                  <th>PRESENACIÓN</th>
                  <th>NOMBRE</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>001</td>
                  <td>22</td>
                  <td>Para eld olor de cabeza</td>
                  <td>002</td>
                  <td>mm</td>
                  <td>Jarabe</td>
                  <td>Dolotrin</td>
                  <td>
                    <a href="" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-remove"></i></a>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>CÓDIGO</th>
                  <th>EXISTENCIAS</th>
                  <th>DESCRIPCIÓN</th>
                  <th>CÓDIGO DE CATEGORÍA</th>
                  <th>UNIDAD DE MEDIDA</th>
                  <th>PRESENACIÓN</th>
                  <th>NOMBRE</th>
                  <th>OPCIONES</th>
                </tr>
                </tfoot>
              </table>
               <a  class='boton' href="<?= URL ?>producto/registrar" ></a>
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