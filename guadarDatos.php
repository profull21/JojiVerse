<? include 'extend/header.php' ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "formulario_db";

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Recibir los datos del formulario
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $street = $_POST['street'];
    $colony = $_POST['colony'];
    $delegation = $_POST['delegation'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO usuarios (name, firstname, lastname, street, colony, delegation, state, zip, email, gender)
            VALUES ('$name', '$firstname', '$lastname', '$street', '$colony', '$delegation', '$state', '$zip', '$email', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso. Gracias por registrarte.";
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Acceso no autorizado.";
}
?>

<? include 'extend/footer.php' ?>