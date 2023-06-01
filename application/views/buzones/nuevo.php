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
  <div class="col-md-12 text-center">
     <h1><b>NUEVO COMENTARIO</b></h1>
  </div>

</div>
<form class=""
action="<?php echo site_url(); ?>/buzones/guardar"
method="post">
    <div class="row"; style="background-color: PeachPuff;">
      <div class="col-md-4">
          <label for="">Primer Apellido:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el primer apellido"
          class="form-control"
          name="primer_apellido_bu" value=""
          id="primer_apellido_bu">
      </div>
      <div class="col-md-4">
        <label for="">Segundo Apellido:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el segundo apellido"
        class="form-control"
        name="segundo_apellido_bu" value=""
        id="segundo_apellido_nu">
      </div>
    </div>
    <br>
    <div class="row" ; style="background-color: PeachPuff;">
      <div class="col-md-4">
          <label for="">Nombre:</label>
          <br>
          <input type="text"
          placeholder="Ingrese los nombres"
          class="form-control"
          name="nombre_bu" value=""
          id="nombre_bu">
      </div>
      <div class="col-md-4">
          <label for="">Correo:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el titulo"
          class="form-control"
          name="correo_bu" value=""
          id="correo_bu">
      </div>
      <div class="col-md-4">
        <label for="">Comentario:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el telefono"
        class="form-control"
        name="telefono_bu" value=""
        id="telefono_bu">
      </div>
    </div>


    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/buzones/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<br><br><br><br><br>
