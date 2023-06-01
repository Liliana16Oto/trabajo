<div class="row"; style="background-color: PeachPuff;">
  <div class="col-md-12 text-center">
     <h1><b>NUEVO CLIENTE</b></h1>
  </div>
</div>
<form class=""
action="<?php echo site_url(); ?>/clientes/guardar"
method="post">
    <div class="row",; style="background-color: PeachPuff;">
      <div class="col-md-4">
          <label for="">Cédula:</label>
          <br>
          <input type="number"
          placeholder="Ingrese la cédula"
          class="form-control"
          name="cedula_cli" value=""
          id="cedula_cli">
      </div>
      <div class="col-md-4">
          <label for="">Primer Apellido:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el primer apellido"
          class="form-control"
          name="primer_apellido_cli" value=""
          id="primer_apellido_cli">
      </div>
      <div class="col-md-4">
        <label for="">Segundo Apellido:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el segundo apellido"
        class="form-control"
        name="segundo_apellido_cli" value=""
        id="segundo_apellido_cli">
      </div>
    </div>
    <br>
    <div class="row"; style="background-color: PeachPuff;">
      <div class="col-md-4">
          <label for="">Nombre:</label>
          <br>
          <input type="text"
          placeholder="Ingrese los nombres"
          class="form-control"
          name="nombre_cli" value=""
          id="nombre_cli">
      </div>
      <div class="col-md-4">
          <label for="">Correo:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el titulo"
          class="form-control"
          name="correo_cli" value=""
          id="correo_cli">
      </div>
      <div class="col-md-4">
        <label for="">Teléfono:</label>
        <br>
        <input type="text"
        placeholder="Ingrese el telefono"
        class="form-control"
        name="telefono_cli" value=""
        id="telefono_cli">
      </div>
    </div>

    <br>
    <div class="row"; style="background-color: PeachPuff;">
      <div class="col-md-12">
          <label for="">Dirección:</label>
          <br>
          <input type="text"
          placeholder="Ingrese la direccion"
          class="form-control"
          name="direccion_cli" value=""
          id="direccion_cli">
      </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/clientes/listado"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
<br><br><br><br><br>
