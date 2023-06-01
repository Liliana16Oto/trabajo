<div class="row"; style="background-color: PeachPuff;">
  <div class="col-md-12 text-center">
     <h1>LISTADO DE CITAS</h1>
  </div>
</div>
<br>
<?php if ($agendas): ?>
    <table class="table table-striped  table-bordered table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>DÍA</th>
          <th> MES</th>
          <th>AÑO</th>

        </tr>
      </thead>

      <tbody>
         <?php foreach ($agendas as $filaTemporal): ?>
           <tr>
              <td><?php echo $filaTemporal->id_ag; ?></td>
              <td><?php echo $filaTemporal->dia_ag; ?></td>
              <td><?php echo $filaTemporal->mes_ag; ?></td>
              <td><?php echo $filaTemporal->año_ag ?></td>

              <!-- ico editar
              el foreach es que se va a repetir el numero de veces
               table-hove para que se active cuando pase el maus
                 &nbsp; es para espacios-->
              <td class="text-center">
                  <a href="#" title="Editar Agenda"><i class="glyphicon glyphicon-pencil"> </i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?php echo site_url(); ?>/agendas/eliminar/<?php echo $filaTemporal->id_ins;?>" title="Eliminar Agenda"><i class="glyphicon glyphicon-trash"style="color:red"> </i></a>
              </td>
            </tr>

                <?php endforeach; ?>
     </tbody>

  </table>
    <?php else: ?>
      <h1>No hay Citas </h1>
    <?php endif; ?>
