<table>
    <thead>
        <tr>
            <th>Descripcion</th>
             <th>Cantidad</th>
              <th>Fecha</th>
              <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php  foreach ($datos as $value): ?>
            <tr>
              <td><?= $value["Descripcion"] ?></td>
              <td><?= $value["Cantidad"] ?></td>
              <td><?= $value["Fecha"] ?></td>  
              <td>
                  <a href="<?= URL ?>lote/edit/<?= $value['Cod'] ?>">Editar></a>
                
              </td>

            </tr>
        <?php endforeach; ?>    


    </tbody>




</table>