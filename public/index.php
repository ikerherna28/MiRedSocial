<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Red Social - Acceder</title>
    <link rel="stylesheet" href="./css/index.css">
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
                <input type="file" name="foto">
                <button class="btn" type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Registrarme
                </button>
                <br><br>
                <p class="message">¿Ya estas registrado? <a href="index.php">Inicia Sesion</a></p>
                <p  id="UsuarioExsistente"> <?php 
                if (isset($_GET["Exixtente"]) && $_GET["Exixtente"]) {
                    echo "
                    El usuario introducido ya existe! Cambia el nombre de usuario o si ya tienes una cuenta <a href=\'index.php\'>Inicia sesion</a>
                    <script>
                    ActivarRegistro()
                    </script>";} 
                    ?>
                    </p>
            </form>
            <!-- Formulario de inicio de sesión -->
            <form class="login-form" method="POST" action="process.php">
                <h2>Iniciar Sesion</h2> 
                <input type="text" name="nnombre" id="username" placeholder="Nombre de usuario" required>
                <input type="password" name="npassword" id="password" placeholder="Contraseña" required>
                <button class="btn" type="submit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Iniciar Sesion
                </button>
                <br><br>"
                <p class="message">¿Aun no tienes una cuenta? <a id="form_Register" href="#" onclick="ActivarRegistro()">Registrate</a></p>
                <p class="message">¿Has olvidado tu contraseña? <a href="index-change-password.php">Cambia tu contraseña</a></p>
                <p style="color: red;">
                    <?php
                    if (isset($_GET["EzdaAurkitu"]) && $_GET["EzdaAurkitu"]) {
                        echo "El usuario la contraseña no son correctos.";
                    }
                    ?>
                </p>
            </form>
        </div>
    </div>

    <script>
        
        function validarContrasenas() {
            var password = document.querySelector('input[name="pasahitza"]').value;
            var password2 = document.querySelector('input[name="pasahitza2"]').value;

            if (password !== password2) {
                ErabilErregistratuta("Las contraseñas no coinciden");
                return false;
            }
            return true;
        }
        function ActivarRegistro() {
    var forms = document.getElementsByTagName('form');
    for(var i = 0; i < forms.length; i++) {
        if(forms[i].classList.contains('hidden')) {
            forms[i].classList.remove('hidden');
        } else {
            forms[i].classList.add('hidden');
        }
    }
}
    </script>


</body>

</html>
