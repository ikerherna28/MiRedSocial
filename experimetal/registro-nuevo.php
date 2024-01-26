    <!-- NO ESTA ACABADO -->
    <!-- NO ESTA ACABADO -->
    
    
    <!doctype html>
    <html lang="en">

    <head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./css/registro-nuevo.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    </head>

    <body>
    <div class="register-box">
    <!-- multistep form -->
    <form id="msform" action="registrationConfirm.php" method="post" onsubmit="return validarContrasenas()" enctype="multipart/form-data" class="form">
        <!-- progressbar -->
        <ul id="progressbar">
        <li class="active">Detalles Personales</li>
        <li>Configuracion de la cuenta</li>
        <li>Perfiles sociales</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
        <h2 class="fs-title">Crea tu cuenta ahora</h2>
            <h3 class="fs-subtitle">Rellena tu informacion personal</h3>
            <input type="text" name="izena" placeholder="Nombre completo *" required/>
            <input type="text" name="abizena" placeholder="Apellido(s) *" required/>
            <input type="email" name="emaila" placeholder="Correo electronico *" required/>
            <!-- AÑADIR "TLF" A LA BASE DE DATOS -->
            <!-- AÑADIR "TLF" A LA BASE DE DATOS -->
            <input type="text" name="tlf" placeholder="Numero de telefono "/>
            <!-- AÑADIR "TLF" A LA BASE DE DATOS -->
            <!-- AÑADIR "TLF" A LA BASE DE DATOS -->
        <input type="button" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
        <h2 class="fs-title">Crea tu cuanta ahora</h2>
            <h3 class="fs-subtitle">Detalles de la cuenta</h3>
            <input type="text" name="erabiltzailea" placeholder="Nombre de usuario *" required/>
            <input type="password" name="pasahitza" placeholder="Contraseña *" required/>
            <input type="password" name="pasahitza2" placeholder="Repetir contraseña *" required/>
            <!-- ME QUEDE AQUI -->
            <!-- ME QUEDE AQUI -->
            <label style="color: grey;" for="foto">Foto de perfil:</label>
            <input type="file" name="foto" required/>
        <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
        <h2 class="fs-title">Social Profiles</h2>
            <h3 class="fs-subtitle">Your presence on the social network</h3>
            <input type="text" placeholder="Instagram" />
            <input type="text" placeholder="Github" />
            <input type="text" placeholder="Twitter" />
        <input type="button"class="next action-button" value="Submit" />
        </fieldset>
    </form>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="./js/registro-nuevo.js"></script>
    </body>
    </html>