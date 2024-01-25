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
        <form action="registrationConfirm.php" method="post" onsubmit="return validarContrasenas()">
            <label for="nombre">Nombre:</label>
            <input type="text" name="izena" id="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" name="abizena" id="apellido" required>

            <label for="username">Nombre de Usuario:</label>
            <input type="text" name="erabiltzailea" id="username" required>
            
            <label for="emaila">Correo electronico:</label>
            <input type="email" id="emaila" name="emaila" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="pasahitza" id="password" required>

            <label for="confirmarPassword">Confirmar Contraseña:</label>
            <input type="password" name="pasahitza2" id="confirmarPassword" required>

            <!-- Nuevo campo para la foto de perfil -->
            <label for="fotoPerfil">Foto de Perfil:</label>
            <input type="file" id="fotoPerfil" name="foto" accept="image/*" required>

            <button type="submit">Registrarse</button>
        </form>
        <p id="UsuarioExsistente"></p>
        <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión</a></p>
    </main>


<!-- <body>
    <header>
        <div class="header-line">
            XIKER, IKER ETA HEGOI
        </div>
    </header>
    <div class="container">
        <div class="login-box">
            <div class="title-box blue-background">
                <h2>Erabiltzailea Izena eman</h2>
            </div>
            <form action="registrationConfirm.php" method="post" onsubmit="return validarContrasenas();">
                <br><br><br>
                <label for="erabiltzailea">Erabiltzaile Izena:</label>
                <input type="text" name="erabiltzailea" placeholder="Erabiltzailea" required />
                <br /><br>
                <label for="izena">Izena:</label>
                <input type="text" id="izena" name="izena" placeholder="izena" required>
                <br><br>
                <label for="abizena">Abizena:</label>
                <input type="text" id="abizena" name="abizena" placeholder="abizena" required>
                <br><br>
                <label for="emaila">Posta Elektronikoa:</label>
                <input type="email" id="emaila" name="emaila" placeholder="emaila" required>
                <br><br>
                <label for="pasahitza">Pasahitza:</label>
                <input type="password" name="pasahitza" placeholder="Pasahitza" required />
                <br /><br>
                <label for="pasahitza2">Errepikatu pasahitza:</label>
                <input type="password" name="pasahitza2" placeholder="Pasahitza" required />
                <br /><br>
                <button type="submit">Erregistratu</button>
            </form>
            <p id="UsuarioExsistente"></p>
        </div>
        <aside>
            <img src="photo.jpg" alt="Logo" class="logo">
        </aside>
    </div>
</body>

</html> -->
<?php if (isset($_GET["Exixtente"]) && $_GET["Exixtente"]) { ?>
    <script>
        ErabilErregistratuta('Erabiltzailea jadanik erregistratuta dago. Mesedez, saiatu berriz. edo <a href=\'index.php\'>hasi saioa</a>');
        </script>
<?php } ?>