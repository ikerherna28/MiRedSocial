<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Red Social - Acceder</title>
    <link rel="stylesheet" href="./css/inicionuevo.css">
</head>

<body style="display:flex; align-items:center; justify-content:center;">
    <div class="login-page">
        <div class="form">
            <form action="registrationConfirm.php" method="post" onsubmit="return validarContrasenas()" enctype="multipart/form-data" class="register-form">
                <!-- Informacion personal del usuario -->
                <h2>Registrarme</h2>
                <input type="text" name="izena" placeholder="Nombre completo *" required/>
                <input type="text" name="abizena" placeholder="Apellido(s) *" required/>
                <input type="text" name="erabiltzailea" placeholder="Nombre de usuario *" required/>
                <input type="email" name="emaila" placeholder="Correo electronico *" required/>
                <input type="password" name="pasahitza" placeholder="Contraseña *" required/>
                <input type="password" name="pasahitza2" placeholder="Repetir contraseña *" required/>
                <label style="color: grey;" for="foto">Foto de perfil:</label>
                <input type="file" name="foto" required/>
                <!-- REVISAR SI SELECCIONAR FOTO ES OBLIGATORIA O SALDRA UNA PREDETERMINADA -->
                <!-- REVISAR SI SELECCIONAR FOTO ES OBLIGATORIA O SALDRA UNA PREDETERMINADA -->
                <!-- REVISAR SI SELECCIONAR FOTO ES OBLIGATORIA O SALDRA UNA PREDETERMINADA -->
                <button class="btn" type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Registrarme
                </button>
                <br><br>
                <p class="message">¿Ya estas registrado? <a href="inicionuevo.php">Inicia Sesion</a></p>
            </form>
            <!-- Formulario de inicio de sesión -->
            <form class="login-form" method="POST" action="process.php">
                <h2>Iniciar Sesion</h2> 
                <input type="text" placeholder="Nombre de usuario" name="nnombre" id="username" required>
                <input type="password" placeholder="Contraseña" name="npassword" id="password" required>
                <button class="btn" type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Iniciar Sesion
                </button>
                <br><br>
                <p class="message">¿Aun no tienes una cuenta? <a href="#">Registrate</a></p>
                <p class="message">¿Has olvidado tu contraseña? <a href="index-change-password.php">Cambia tu contraseña</a></p>
                <!-- AÑADIR CAMBIAR CONTRASEÑA -->
                <!-- AÑADIR CAMBIAR CONTRASEÑA -->
                <!-- AÑADIR CAMBIAR CONTRASEÑA -->
                <!-- AÑADIR CAMBIAR CONTRASEÑA -->
                <!-- AÑADIR CAMBIAR CONTRASEÑA -->
                <p style="color: red;">
                    <?php
                    if (isset($_GET["EdaAurkitu"]) && $_GET["EdaAurkitu"]) {
                        echo "Erabiltzailea edo pasahitza ez da zuzena.";
                    }
                    ?>
                </p>

            </form>
        </div>
    </div>

    <p id="UsuarioExsistente"></p>

    <!-- Si el nombre de usuario existe, aparecerá un mensaje en rojo -->
    <?php if (isset($_GET["Exixtente"]) && $_GET["Exixtente"]) { ?>
        <script>
            ErabilErregistratuta('El usuario introducido ya existe! Cambia el nombre de usuario o si ya tienes una cuenta <a href=\'index.php\'>Inicia sesion</a>');
        </script>
    <?php } ?>

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
                ErabilErregistratuta("Las contraseñas no coinciden");
                return false;
            }
            return true;
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/inicionuevo.js"></script>
</body>

</html>
