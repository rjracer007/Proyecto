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
              <h3 class="box-title">Orden de Producción</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>CÓDIGO</th>
                  <th>FECHA INICIO</th>
                  <th>FECHA FINALIZACIÓN</th>
                  <th>ESTADO</th>
                  <th>EMPLEADO QUE REGISTRÓ</th>
                  <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                  <td>001</td>
                  <td>2017-02-22</td>
                  <td>2017-02-28</td>
                  <td>En proceso</td>
                  <td>123</td>
                  <td>
                    <a href="" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
                    <a href="" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-refresh"></i></a>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>CÓDIGO</th>
                  <th>FECHA INICIO</th>
                  <th>FECHA FINALIZACIÓN</th>
                  <th>ESTADO</th>
                  <th>EMPLEADO QUE REGISTRÓ</th>
                  <th>OPCIONES</th>
                </tr>
                </tfoot>
              </table>
              <a  class='boton' href="<?= URL ?>orden/registrar" ></a>
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