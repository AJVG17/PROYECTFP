<?php

$id_propietario = isset($_POST['propietarios']) ? $_POST['propietarios']:'';
$id_propiedad = isset($_POST['direcciones']) ? $_POST['direcciones'] : '';
$nom_arrendatario = isset($_POST['nombre1']) ? $_POST['nombre1'] : '';
$cc_arrendatario = isset($_POST['cedula1']) ? $_POST['cedula1'] : '';
$image_c2 = isset($_POST['documento']) ? $_POST['documento'] : '';
$num_arrendatario = isset($_POST['telefono1']) ? $_POST['telefono1'] : '';
$email_arrendatario = isset($_POST['email1']) ? $_POST['email1'] : '';
$nom_fiador = isset($_POST['name2']) ? $_POST['name2'] : '';
$cc_fiador = isset($_POST['cedula2']) ? $_POST['cedula2'] : '';
$image_c3 = isset($_POST['documento2']) ? $_POST['documento2'] : '';
$num_fiador = isset($_POST['telefono2']) ? $_POST['telefono2'] : '';
$email_fiador = isset($_POST['email2']) ? $_POST['email2'] : '';
$date_star = isset($_POST['fechaContrato']) ? $_POST['fechaContrato'] : '';
$image_contrato = isset($_POST['contrato']) ? $_POST['contrato'] : '';




try {

    $conexion = new PDO('mysql:host=localhost;port=3306;dbname=p1', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

 

    $pdo = $conexion->prepare('INSERT INTO contratos(id_propietario, id_propiedad, nom_arrendatario, cc_arrendatario, image_c2, num_arrendatario, email_arrendatario, nom_fiador, cc_fiador, image_c3, num_fiador, email_fiador, date_star, image_contrato) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    $pdo->bindParam(1, $id_propietario);
    $pdo->bindParam(2, $id_propiedad);
    $pdo->bindParam(3, $nom_arrendatario);
    $pdo->bindParam(4, $cc_arrendatario);
    $pdo->bindParam(5, $image_c2);
    $pdo->bindParam(6, $num_arrendatario);
    $pdo->bindParam(7, $email_arrendatario);
    $pdo->bindParam(8, $nom_fiador);
    $pdo->bindParam(9, $cc_fiador);
    $pdo->bindParam(10, $image_c3);
    $pdo->bindParam(11, $num_fiador);
    $pdo->bindParam(12, $email_fiador);
    $pdo->bindParam(13, $date_star);
    $pdo->bindParam(14, $image_contrato);
    $pdo->execute() or die(print($pdo->errorInfo()));

    echo json_encode('true');



catch (PDOException $error) {
    echo $error->getMessage();}
}

$sele = $conexion->prepare('SELECT id,nombre_propietario FROM propietarios');
while ($fila = $sele->fetch_assoc()):
    $id=$fila['id'];
    $nombre=$fila['nombre_propietario'];
    echo "<option value=$id>$nombre</option>";
endwhile;
