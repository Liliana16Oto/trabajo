<div class="row"; style="background-color: PeachPuff;">
  <div class="col-md-12 text-center">
     <h1><b>NUEVA CITA</b></h1>
  </div>
</div>
<form class=""
action="<?php echo site_url(); ?>/agendas/guardar"
method="post">
    <div class="row",; style="background-color: PeachPuff;">
      <div class="col-md-4">
          <label for="">DÍA:</label>
          <br>
          <input type="number"
          placeholder="Ingrese el dia de la cita"
          class="form-control"
          name="dia_ag" value=""
          id="dia_ag">
      </div>
      <div class="col-md-4">
          <label for="">MES:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el mes de la cita"
          class="form-control"
          name="mes_ag" value=""
          id="mes_ag">
      </div>
      <div class="col-md-4">
        <label for="">AÑO:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el año de la cita"
        class="form-control"
        name="año_ag" value=""
        id="año_ag">
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
            <a href="<?php echo site_url(); ?>/agendas/listado"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br>
