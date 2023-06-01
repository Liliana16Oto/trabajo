<h1>LISTADO DE COMENTARIOS</h1>
<br>
<?php if ($buzones): ?>
    <table class="table table-striped  table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th> PRIMER APELLIDO</th>
          <th>SEGUNDO APELLIDO</th>
          <th>NOMBRES</th>
          <th>CORREO</th>
          <th>COMENTARIO</th>
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
         <?php foreach ($buzones as $filaTemporal): ?>
           <tr>
              <td><?php echo $filaTemporal->id_bu; ?></td>
              <td><?php echo $filaTemporal->primer_apellido_bu; ?></td>
              <td><?php echo $filaTemporal->segundo_apellido_bu; ?></td>
              <td><?php echo $filaTemporal->nombre_bu; ?></td>
              <td><?php echo $filaTemporal->correo_bu; ?></td>
              <td><?php echo $filaTemporal->comentario_bu; ?></td>
              <!-- ico editar
              el foreach es que se va a repetir el numero de veces
               table-hove para que se active cuando pase el maus
                 &nbsp; es para espacios-->
              <td class="text-center">
                  <a href="#" title="Editar Buzon"><i class="glyphicon glyphicon-pencil"> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo site_url(); ?>/buzones/eliminar/<?php echo $filaTemporal->id_bu;?>" title="Eliminar Bunzon"><i class="glyphicon glyphicon-trash"style="color:red"> </i></a>
              </td>
            </tr>

                <?php endforeach; ?>
     </tbody>

  </table>
    <?php else: ?>
      <h1>No hay Comentarios</h1>
    <?php endif; ?>
