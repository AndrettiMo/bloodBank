
<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="txtNombre" >
    </div>
    <div class="form-group">
      <label for="apellido">Apellido:</label>
      <input type="text" class="form-control" id="txtApellido">
    </div>
    <div class="form-group">
      <label for="tipoDocumento">Tipo de documento:</label>
      <select  id="tipoDocumento"  class="form-control"     >
       <option disabled selected>Selecciona una opcion</option>
        <option value="cedula de ciudadania">Cedula de ciudadania</option>      
        <option value="cedula extranjera">Cedula extranjera</option>    
        <option value="registro civil">Registro civil</option>    
        <option value="tarjeta de identidad">Tarjeta de identidad</option>    


      </select>
    </div>
    <div class="form-group">
      <label for="numeroDocumento">Numero documento:</label>
      <input type="text" class="form-control" id="numeroDocumento" >
    </div>
    <div class="form-group">
      <label for="fecha">Fecha en la que desea ir a donar :</label>
      <input type="date" class="form-control" id="fecha" >
    </div>
    <div class="form-group">
      <label for="email">Hora:</label>
      <input type="time" class="form-control" id="hora" >
    </div>
    <div class="form-group">
      <label for="lugar">Lugar:</label>
      <input type="text" class="form-control" id="txtLugar" >
    </div>
    <div class="form-group">
      <label for="email">Correo electronico:</label>
      <input type="text" class="form-control" id="txtEmail">
    </div>
    
    <button id="btnAgendar" type="submit" class="btn btn-default">Agendar cita</button>
  </form>
</div>