<?php include 'extend/header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Conexión a la base de datos
  $conexion = new mysqli("localhost", "root", "", "registro_usuarios");
  if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
  }

  // Recibir datos
  $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
  $apellido1 = isset($_POST['apellido1']) ? $_POST['apellido1'] : '';
  $apellido2 = isset($_POST['apellido2']) ? $_POST['apellido2'] : '';
  $calle = isset($_POST['calle']) ? $_POST['calle'] : '';
  $colonia = isset($_POST['colonia']) ? $_POST['colonia'] : '';
  $delegacion = isset($_POST['delegacion']) ? $_POST['delegacion'] : '';
  $estado = isset($_POST['estado']) ? $_POST['estado'] : '';
  $cp = isset($_POST['cp']) ? $_POST['cp'] : '';
  $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
  $genero = isset($_POST['genero']) ? $_POST['genero'] : '';

    // Debug para ver qué llega en delegacion
    

  // Insertar datos
  $sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, calle, colonia, delegacion, estado, cp, correo, genero)
          VALUES ('$nombre', '$apellido1', '$apellido2', '$calle', '$colonia', '$delegacion', '$estado', '$cp', '$correo', '$genero')";

  if ($conexion->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>Registro guardado correctamente.</div>";
  } else {
    echo "<div class='alert alert-danger'>Error: " . $conexion->error . "</div>";
  }

  $conexion->close();
}
?>


<form class="row g-3" action="registro.php" method="POST">

  <!--nombre-->
    <div class="col-12">
        <label for="name" class="form-label">Nombre(s):</label>
        <input type="text" class="form-control" name="nombre" id="name" placeholder="Nombre o nombres" required>
    </div>
    <div class="col-12">
        <label for="firstname" class="form-label">Primer apellido:</label>
        <input type="text" class="form-control" name="apellido1" id="firstname" placeholder="Perez" required>
    </div>
    <div class="col-12">
        <label for="lastname" class="form-label">Segundo apellido:</label>
        <input type="text" class="form-control" name="apellido2" id="lastname" placeholder="Mendoza" required>
    </div>
    <div class="col-6">
        <label for="street" class="form-label">Calle:</label>
        <input type="text" class="form-control" name="calle" id="street" placeholder="Peluqueros" required>
    </div>
    <div class="col-6">
        <label for="colony" class="form-label">Colonia:</label>
        <input type="text" class="form-control" name="colonia" id="colony" placeholder="Michoacana" required>
    </div>
    <div class="col-6">
        <label for="delegation" class="form-label">Delegación:</label>
        <input type="text" class="form-control" name="delegacion" id="del" placeholder="Venustiano Carranza" required>
    </div>
    <div class="col-4">
        <label for="state" class="form-label">Estado:</label>
        <select id="state" class="form-select" name="estado" required>
            <option value="">Seleccione uno...</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="CDMX">Ciudad de México</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
        </select>
    </div>
    <div class="col-2">
        <label for="zip" class="form-label">CP</label>
        <input type="text" class="form-control" name="cp" id="zip" placeholder="08000" required>
    </div>
    <div class="col-12">
        <label for="email" class="form-label">Correo:</label>
        <input type="email" class="form-control" name="correo" id="email" placeholder="ejemplocorreo@gmail.com" required>
    </div>
  <!-- Género -->
  <div class="col-12">
    <label class="form-label">Género:</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="genero" id="male" value="Masculino">
      <label class="form-check-label" for="male">Masculino</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="genero" id="female" value="Femenino">
      <label class="form-check-label" for="female">Femenino</label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="genero" id="other" value="Otro">
      <label class="form-check-label" for="other">Prefiero no decirlo</label>
    </div>
  </div>
    <div class="col-12">
        <input class="form-check-input" type="checkbox" id="terms" required>
        <label class="form-check-label" for="terms">
            <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Acepto términos y condiciones
            </button>
        </label>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Términos y Condiciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Términos y Condiciones de JOJI ARCHIVE:</p>
                    <ol>
                        <li>
                            <strong>Aceptación de los términos:</strong><br>
                            Al registrarte en JOJI ARCHIVE, aceptas cumplir con estos términos y condiciones. Si no estás de acuerdo con alguno de estos términos, te recomendamos no utilizar nuestros servicios.
                        </li>
                        <li>
                            <strong>Uso de la información:</strong><br>
                            Toda la información proporcionada durante el registro será utilizada exclusivamente para el envío de actualizaciones, novedades, y contenido relevante. No compartiremos tu información personal con terceros sin tu consentimiento previo.
                        </li>
                        <li>
                            <strong>Actualizaciones y comunicaciones:</strong><br>
                            Al registrarte, aceptas recibir correos electrónicos, notificaciones o mensajes informativos sobre eventos y novedades de JOJI ARCHIVE.
                        </li>
                        <li>
                            <strong>Propiedad intelectual:</strong><br>
                            Todo el contenido de JOJI ARCHIVE es propiedad intelectual de sus respectivos creadores. Está prohibido el uso no autorizado.
                        </li>
                        <li>
                            <strong>Modificaciones de los términos:</strong><br>
                            JOJI ARCHIVE se reserva el derecho de modificar estos términos en cualquier momento.
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>


<?php include 'extend/footer.php'; ?>
