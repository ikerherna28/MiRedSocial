<?php
include "./constants/db-conection.php";

$usuario = mysqli_real_escape_string($conn, $_POST['nnombre']);
$pass = mysqli_real_escape_string($conn, $_POST['npassword']);
if (empty($usuario) || empty($pass)) {
    header("Location: index.php?EzdaAurkitu=true");
    exit();
}
$sql = "SELECT * FROM user WHERE username='$usuario'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_array($result)) {
    if ($row['password'] == $pass) {
        session_start();
        $_SESSION['user'] = $row['username'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellido'] = $row['apellido'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['foto_perfil'] = $row['foto_perfil'];
        header("Location: dashboard.php");
    } else {
        header("Location: index.php?EzdaAurkitu=true");
        exit();
    }
} else {
    header("Location: index.php?EzdaAurkitu=true");
    exit();
}
