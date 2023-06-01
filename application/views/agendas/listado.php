<div class="logo">
	        <div class="col-md-4 text-left">
	             <img src="<?php echo base_url();?>/assets/imagenes/pelu.png" alt="imagen logo" style="height:100px; width:100px;"
      margin-left: 5px;>
	    </div>
	     </div>
	       <div class="row", style="background-color:rgba(221, 91, 156, 0.753)">
	               <div class=" col-md-6 text-center">
	                 <h1 style="color:black; font-family:Ariel;"> ESTUDIO DE COLOR Y  CORTE </h1>
	               </div>
	      </div>

    <br>
<div class="row"; style="background-color: PeachPuff;">
  <div class="col-md-8 text-center">
     <h1>LISTADO DE CITAS</h1>
  </div>
	<div class="col-md-4">
			<br>
			<br>
			<a href="<?php echo site_url('agendas/nuevo'); ?>"class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i>Agregar Cita</a>
		</div>
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
          <th>ACCIONES</th>
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
                  <a href="<?php echo site_url(); ?>/agendas/eliminar/<?php echo $filaTemporal->id_ag;?>" title="Eliminar Agenda" onclick="return confirm('¿Estas seguro de eliminar permanenteme el registro?');"><i class="glyphicon glyphicon-trash"style="color:red"> </i></a>
              </td>
            </tr>

                <?php endforeach; ?>
     </tbody>

  </table>
    <?php else: ?>
      <h1>No hay Citas </h1>
    <?php endif; ?>
    <br><br><br><br><br><br><br><br>
