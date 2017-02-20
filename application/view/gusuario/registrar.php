<div class="content-wrapper">
  <section class="content">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
      <center>
        <div class="box-header with-border">
          <h3 class="box-title">Registro de Empleados</h3>
        </div>
        </center>
        <form role="form">
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Identificacion:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su numero de identificacion">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombres:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su nombre/s">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Apellidos:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca sus apellidos">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
              <label for="exampleInputEmail1">Celular:</label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su numero de celular">
            </div>
        </div>
        <div class="col-md-6">
                  <div class="form-group">
                    <label>Tipo de Sangre:</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">O-</option>
                      <option>O-</option>
                      <option>O+</option>
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <option>AB+</option>
                      <option>AB-</option>
                    </select>
                  </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                  <label for="exampleInputEmail1">Fecha Nacimiento:</label>
                  <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputEmail1">Correo Electronico:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="introduzca su email">
              </div>
            </div>
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Fecha Ingreso:</label>
                  <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Numero de Hijos:</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="introduzca el numero de hijos">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Telefono Fijo:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su numero de telefono">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Direccion:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su direccion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Barrio:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su barrio">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Municipio:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su municipio">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cargo:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su cargo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cesantias:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca sus cesantias">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Pension:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su pension">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Caja de Compensacion:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca su compensacion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tipo de Contrato:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca contrato">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Proceso:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca el proceso designado en la empresa">
                </div>
              </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label>Tipo de Documento:</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Cedula</option>
                          <option>Cedula</option>
                          <option>Targeta de Identidad</option>
                        </select>
                      </div>
                      </div>
                  <div class="col-md-6">
                      <div class="form-group">
                        <label>Genero:</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Hombre</option>
                          <option>Hombre</option>
                          <option>Mujer</option>
                          <option>Otro</option>
                        </select>
                      </div>
                  </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Cuenta:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="introduzca el Id de la cuenta asignada">
                </div>
                </div>
                <br><br><br><br>
                <div class="box-body">
                    <div class="box-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                  </div>
                  <br><br><br><br>
        </form>
      </div>
</div>
</div>
  </section>
</div>
