<?php
$usuario = $_POST['nnombre'];
$pass = $_POST['npassword'];
if (empty($usuario) || empty($pass)) {
    header("Location: index.php");
    exit();
}
$conn = mysqli_connect('mysql', 'root', 'root', 'login') or die;
$sql = "SELECT * FROM users WHERE user='$usuario'";
$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_array($result)) {
    if ($row['password'] == $pass) {
        session_start();
        $_SESSION['user'] = $usuario;
        $_SESSION['izena'] = $row['izena'];
        $_SESSION['abizena'] = $row['abizena'];
        $_SESSION['emaila'] = $row['emaila'];
        header("Location: pagina.php");
    } else {
        header("Location: index.php?EdaAurkitu=true");
        exit();
    }
} else {
    header("Location: index.php?EdaAurkitu=true");
    exit();
}
