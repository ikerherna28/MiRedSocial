<!-- index-change-password.html -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index-change-password.css">
    <title>Mi Red Social - Cambiar Contraseña</title>
</head>

<body style="display:flex; align-items:center; justify-content:center;">
    <main class="login-page">
        <div class="form" >
            <form onsubmit="cambiarContraseña(event)">
                <h2>Cambiar Contraseña</h2>
                <!-- REVISAR SI ESTA BIEN, NO ESTA EMPAREJADO CON OTRO PHP.. -->
                <!-- REVISAR SI ESTA BIEN, NO ESTA EMPAREJADO CON OTRO PHP.. -->
                <input type="text" name="erabiltzailea" placeholder="Nombre de usuario *" required/>
                <input type="email" name="emaila" placeholder="Correo electronico *" required/>
                <input type="password" name="pasahitza" placeholder="Contraseña nueva *" required/>
                <input type="password" name="pasahitza2" placeholder="Repetir nueva contraseña *" required/>
                <!-- REVISAR SI ESTA BIEN.. -->
                <!-- REVISAR SI ESTA BIEN-->
                <button type="submit" class="btn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Cambiar Contraseña
                </button>
                <br><br>
                <p class="message">¿Has solucionado tu problema? <a href="inicionuevo.php">Inicia Sesion</a></p>
            </form>

            <p id="mensajeError" class="message"></p>
        </div>
    </main>

    <script>
        function cambiarContraseña(event) {
            event.preventDefault();

            const username = document.getElementById('username').value;
            const oldPassword = document.getElementById('oldPassword').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmNewPassword = document.getElementById('confirmNewPassword').value;

            // Obtener la información del usuario desde localStorage
            const usuarioEnBaseDatos = JSON.parse(localStorage.getItem(username));

            if (usuarioEnBaseDatos) {
                // Verificar la contraseña actual
                if (usuarioEnBaseDatos.password === oldPassword) {
                    // Verificar que las nuevas contraseñas coincidan
                    if (newPassword === confirmNewPassword) {
                        // Actualizar la contraseña en el objeto usuarioEnBaseDatos
                        usuarioEnBaseDatos.password = newPassword;

                        // Actualizar la información en localStorage
                        localStorage.setItem(username, JSON.stringify(usuarioEnBaseDatos));

                        // Mostrar mensaje de éxito
                        document.getElementById('mensajeError').textContent = 'Contraseña cambiada con éxito';
                    } else {
                        // Mostrar mensaje de error si las nuevas contraseñas no coinciden
                        document.getElementById('mensajeError').textContent = 'Las nuevas contraseñas no coinciden. Por favor, inténtalo de nuevo.';
                    }
                } else {
                    // Mostrar mensaje de error si la contraseña actual es incorrecta
                    document.getElementById('mensajeError').textContent = 'Contraseña actual incorrecta. Por favor, inténtalo de nuevo.';
                }
            } else {
                // Mostrar mensaje de error si el nombre de usuario no existe
                document.getElementById('mensajeError').textContent = 'Usuario no existente. Por favor, verifica el nombre de usuario.';
            }
        }
    </script>
</body>

</html>
