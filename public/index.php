<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <head>
    <title>Mi Red Social - Iniciar Sesión</title>
</head>
<body>
    <header>
        <h1>Mi Red Social - Iniciar Sesión</h1>
    </header>

    <main>
        <form method="POST" action="process.php">
            <label for="username">Nombre de Usuario:</label>
            <input type="text" name="nnombre" id="username" required>

            <label for="password">Contraseña:</label>
            <input type="password" name="npassword" id="password" required>

            <button type="submit">Iniciar Sesión</button>
            <p style="color: red;">
                    <?php
                    if (isset($_GET["EdaAurkitu"]) && $_GET["EdaAurkitu"]) {
                        echo "Erabiltzailea edo pasahitza ez da zuzena.";
                    }
                    ?>
                </p>
        </form>

        <p>¿Aún no tienes una cuenta? <a href="registro.php">Regístrate</a></p>
        <p id="mensajeError" style="color: red;"></p>
        <p><a href="index-change-password.html">¿Olvidaste tu contraseña?</a></p>
    </main>
    </body>
</html>



    <!-- <div class="container">
        <div class="login-box">
            <div class="title-box blue-background">
                <h2>Saioa hasi</h2>
            </div>
            <form method="POST" action="process.php">
                <br><br><br>
                <label for="nnombre">Erabiltzailea:</label>
                <input type="text" name="nnombre" placeholder="Erabiltzailea" />
                <br /><br>
                <label for="npassword">Pasahitza:</label>
                <input type="password" name="npassword" placeholder="Pasahitza" />
                <br /><br>
                <button type="submit">Hasi saioa</button>
                <br><br>
                <p>Ez duzu konturik: <a href="register.php">Erregistratu</a></p>
                <p style="color: red;">
                    <?php
                    // if (isset($_GET["EdaAurkitu"]) && $_GET["EdaAurkitu"]) {
                    //    echo "Erabiltzailea edo pasahitza ez da zuzena.";
                    // }
                    ?>
                </p>
            </form>
        </div>
        <aside>
            <img src="photo.jpg" alt="Logo" class="logo">
        </aside>
    </div>

    <footer>
        <p>&copy; 2023-2024 IKASTURTEA</p>
    </footer>

</body>

</html> -->