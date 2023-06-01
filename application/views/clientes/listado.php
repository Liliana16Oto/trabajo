<div class="row"; style="background-color: PeachPuff;">
  <div class="col-md-12 text-center">
     <h1><b>LISTADO DE CLIENTE</b></h1>
  </div>
</div>
<br>
<?php if ($clientes): ?>
    <table class="table table-striped  table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>CEDULA</th>
          <th> PRIMER APELLIDO</th>
          <th>SEGUNDO APELLIDO</th>
          <th>NOMBRES</th>
          <th>CORREO</th>
          <th>TEFEFONO</th>
          <th>DIRECCION</th>
          <th>ACCIONES</th>
        </tr>
      </thead>
      <!-- sentecias selectivas
      ->if
      -> switch / clase
      sentencias repetetiva/iterativa
      -> for incio, condicion,incre
      -> while condicion
      -> do while
      -> foreach -->
      <tbody>
         <?php foreach ($clientes as $filaTemporal): ?>
           <tr>
              <td><?php echo $filaTemporal->id_cli; ?></td>
              <td><?php echo $filaTemporal->cedula_cli; ?></td>
              <td><?php echo $filaTemporal->primer_apellido_cli; ?></td>
              <td><?php echo $filaTemporal->segundo_apellido_cli; ?></td>
              <td><?php echo $filaTemporal->nombre_cli; ?></td>
              <td><?php echo $filaTemporal->correo_cli; ?></td>
              <td><?php echo $filaTemporal->telefono_cli; ?></td>
              <td><?php echo $filaTemporal->direccion_cli; ?></td>
              <!-- ico editar
              el foreach es que se va a repetir el numero de veces
               table-hove para que se active cuando pase el maus
                 &nbsp; es para espacios-->
              <td class="text-center">
                  <a href="#" title="Editar Cliente"><i class="glyphicon glyphicon-pencil"> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo site_url(); ?>/clientes/eliminar/<?php echo $filaTemporal->id_cli;?>" title="Eliminar Cliente"><i class="glyphicon glyphicon-trash"style="color:red"> </i></a>
              </td>
            </tr>

                <?php endforeach; ?>
     </tbody>

  </table>
    <?php else: ?>
      <h1>No hay clientes</h1>
    <?php endif; ?>
