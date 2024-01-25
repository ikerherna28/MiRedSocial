<?php

$usuario = $_POST['erabiltzailea'];
$izena = $_POST['izena'];
$abizena = $_POST['abizena'];
$emaila = $_POST['emaila'];
$pass = $_POST['pasahitza'];

$conn = mysqli_connect('mysql', 'root', 'root', 'RedSocial') or die;

$sql = "SELECT * FROM users WHERE user='$usuario'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    header("Location: register.php?Exixtente=true");
} else {

    //TODO: encriptar la contraseña y guardar la imagen en el servidor

    $sql = "INSERT INTO `users` (`id`, `user`, `izena`, `abizena`, `emaila`, `password`) VALUES (NULL, '$usuario', '$izena', '$abizena', '$emaila', '$pass')";
    $result = mysqli_query($conn, $sql);
    session_start();
    $_SESSION['user'] = $usuario;
    $_SESSION['izena'] = $izena;
    $_SESSION['abizena'] = $abizena;
    $_SESSION['emaila'] = $emaila;
    header("Location: pagina.php");
}
