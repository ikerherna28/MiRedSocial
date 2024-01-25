<!-- "registro.php" - aqui el usuario se registrara para despues poder inciar sesion -->
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Red Social - Registro</title>
    <link rel="stylesheet" href="./css/registro.css">
</head>

<body>
    <header>
        <h1>Mi Red Social - Registro</h1>
    </header>

    <script>
        function ErabilErregistratuta(prompt) {
            let parrafo = document.getElementById("UsuarioExsistente")
            parrafo.style.color = "red"
            parrafo.innerHTML = prompt
        }
        function validarContrasenas() {
            var password = document.querySelector('input[name="pasahitza"]').value;
            var password2 = document.querySelector('input[name="pasahitza2"]').value;
    
            if (password !== password2) {
                ErabilErregistratuta("Las contraseñas no coinciden")
                return false;
            }
        }
    </script>

    <main>
        <form action="registrationConfirm.php" method="post" onsubmit="return validarContrasenas()" ENCTYPE="multipart/form-data">
            <!-- Informacion personal del usuario -->
            <label for="nombre">Nombre:</label>
            <input type="text" name="izena" id="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" name="abizena" id="apellido" required>

            <!-- Nombre de usuario (username) -->
            <label for="username">Nombre de Usuario:</label>
            <input type="text" name="erabiltzailea" id="username" required>
            
            <label for="emaila">Correo electronico:</label>
            <input type="email" id="emaila" name="emaila" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="pasahitza" id="password" required>

            <label for="confirmarPassword">Confirmar Contraseña:</label>
            <input type="password" name="pasahitza2" id="confirmarPassword" required>

            <!-- Subir foto de perfil -->
            <label for="foto">Foto de Perfil:</label>
            <input type="file" name="foto">
            <!-- Boton de registro -->   
            <button type="submit">Registrarse</button>
        </form>
        <p id="UsuarioExsistente"></p>
        <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión</a></p>
    </main>


<!-- Si el nombre de usuario existe aparecer mensaje en rojo -->
<?php if (isset($_GET["Exixtente"]) && $_GET["Exixtente"]) { ?>
    <script>
        ErabilErregistratuta('El usuario introducido ya existe! Cambia el nombre de usuario o si ya tienes una cuenta <a href=\'index.php\'>Inicia sesion</a>');
        </script>
<?php } ?>