<?php
include "./constants/db-conection.php";
include "./constants/varibles.php";

$usuario = $_POST['erabiltzailea'];
$izena = $_POST['izena'];
$abizena = $_POST['abizena'];
$emaila = $_POST['emaila'];
$pass = $_POST['pasahitza'];

$nuevoDestino = null;

// TODO: La función de abajo no funciona, me dice que  el file foto no existe
if ($_FILES['foto'] != null) {
    // irudia gordetzeko direktoria sortzen
    $karpeta = Default_user_photo_folder($usuario);
    $irudiIzena = basename($_FILES['foto']['name']);
    $destino = $karpeta . $irudiIzena;
    
    // Irudia igo $destino-ra
    move_uploaded_file($_FILES['foto']['tmp_name'], $destino);

    $nuevoDestino = $karpeta . $usuario . "FotoPerfil" . ".jpg";
    rename($destino, $nuevoDestino);
    $nuevoDestino = "./" . $nuevoDestino;
} else {
    $nuevoDestino = null;
}

$sql = "SELECT * FROM user WHERE username='$usuario'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {

    header("Location: registro.php?Exixtente=true");
} else {

    //TODO: encriptar la contraseña y guardar la imagen en el servidor

    $sql = "INSERT INTO `user` (`id`, `nombre`, `apellido`, `username`, `password`, `email`, `create_time`, `foto_perfill`) VALUES (NULL, '$izena', '$abizena', '$usuario', '$pass', '$emaila', CURRENT_TIMESTAMP, '$nuevoDestino')";
    $result = mysqli_query($conn, $sql);
    session_start();
    $_SESSION['user'] = $usuario;
    $_SESSION['nombre'] = $izena;
    $_SESSION['apellido'] = $abizena;
    $_SESSION['email'] = $emaila;
    $_SESSION['foto_perfil'] = $nuevoDestino;
    header("Location: dashboard.php");
}

