<!-- NO ESTA DEL TODO ACABADO, LE FALTAN COSAS DEL CSS, SOLUCIONAR LOS PROBLEMAS CON LA DB, CAMBIAR EL MENU, LA FUENTE DE LETRA DE LA HORA... -->
<!-- NO ESTA DEL TODO ACABADO, LE FALTAN COSAS DEL CSS, SOLUCIONAR LOS PROBLEMAS CON LA DB, CAMBIAR EL MENU, LA FUENTE DE LETRA DE LA HORA... -->
<!-- NO ESTA DEL TODO ACABADO, LE FALTAN COSAS DEL CSS, SOLUCIONAR LOS PROBLEMAS CON LA DB, CAMBIAR EL MENU, LA FUENTE DE LETRA DE LA HORA... -->
<?php 
session_start();

$usuario = $_SESSION['user'];
$nombre = $_SESSION['nombre'];
$apellido = $_SESSION['apellido'];
$correo = $_SESSION['email'];
$foto_perfil = $_SESSION['foto_perfil'];

?>
<!-- dashboard-nuevo.html -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboard-nuevo.css">
    <title>Mi Red Social - Dashboard</title>
</head>
<body>
    <header>
        <h1>Bienvenido a Mi Red Social</h1>
        <div id="usuario-info">
            <div id="opciones-usuario">
                <img src="" alt="Foto de Perfil" id="fotoPerfil">
                <p id="nombreUsuario"></p>
                <div class="dropdown-content">
                    <a href="editar-perfil.html" onclick="mostrarModal('editar-perfil-modal')">Editar perfil</a>
                    <a href="change-password.html" onclick="mostrarModal('seguridad-modal')">Seguridad</a>
                    <a href="amigos.html" onclick="mostrarModal('amigos-modal')">Amigos</a>
                    <a href="inicionuevo.php">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="post-form">
            <textarea id="caption" placeholder="Escribe tu publicación..."></textarea>
            <input type="file" id="image" accept="image/*">
            <button onclick="crearPublicacion()">Publicar</button>
        </section>

        <section id="feed" class="feed-container">
            <!-- Contenedor de publicaciones -->
        </section>
    </main>

    <script>

        function guardarCambiosPerfil() {
        // Aquí debes implementar la lógica para guardar los cambios del perfil
        // Puedes obtener los valores de los campos utilizando document.getElementById
        // y luego realizar las acciones necesarias (por ejemplo, enviar a un servidor).
        alert("Cambios de perfil guardados");
    }

    function cambiarContraseña() {
        // Aquí debes implementar la lógica para cambiar la contraseña
        // Puedes obtener los valores de los campos utilizando document.getElementById
        // y luego realizar las acciones necesarias (por ejemplo, enviar a un servidor).
        alert("Contraseña cambiada");
    }
        const postsData = [];
        let usuarioAutenticado = null;

        window.onload = function() {
            // Obtener el usuario autenticado al cargar la página
            usuarioAutenticado = obtenerUsuarioAutenticado();

            // Verificar si la información del usuario está completa
            if (!infoUsuarioCompleta(usuarioAutenticado)) {
                mostrarModalInfoUsuario();
            }

            // Mostrar la información del usuario en el encabezado
            mostrarInfoUsuario();

            // Actualizar el feed con las publicaciones existentes
            actualizarFeed();
        };

        function obtenerUsuarioAutenticado() {
            // Implementa la lógica para obtener la información del usuario autenticado.
            // Por ejemplo, desde localStorage.
            const usuarioAutenticado = localStorage.getItem('usuarioAutenticado');
            if (usuarioAutenticado) {
                return JSON.parse(usuarioAutenticado);
            } else {
                // Manejar el caso en el que el usuario no esté autenticado.
                // Puedes redirigir a la página de inicio de sesión u otras acciones.
                console.error('Usuario no autenticado');
                return {};
            }
        }

        function infoUsuarioCompleta(usuario) {
            // Implementa la lógica para verificar si la información del usuario está completa.
            // Por ejemplo, verifica si todos los campos obligatorios están presentes.
            return usuario.nombre && usuario.apellido && usuario.fotoPerfil;
        }

        function mostrarModalInfoUsuario() {
            // Muestra el modal para completar la información del usuario
            document.getElementById('complete-info-modal').style.display = 'flex';
        }

        function mostrarInfoUsuario() {
            // Mostrar la información del usuario en el encabezado
            const nombreUsuarioElement = document.getElementById('nombreUsuario');
            nombreUsuarioElement.textContent = `@${usuarioAutenticado.username}`;

            const fotoPerfilUsuarioElement = document.getElementById('fotoPerfilUsuario');
            fotoPerfilUsuarioElement.src = usuarioAutenticado.fotoPerfil;
        }

        function actualizarFeed() {
            const feedContainer = document.getElementById('feed');
            feedContainer.innerHTML = '';

            postsData.forEach(post => {
                const postElement = document.createElement('div');
                postElement.classList.add('post');

                const usernameElement = document.createElement('p');
                usernameElement.textContent = `Usuario: @${usuarioAutenticado.username}`;

                const captionElement = document.createElement('p');
                captionElement.textContent = post.caption;

                const imageElement = document.createElement('img');
                imageElement.src = post.imageUrl;
                imageElement.alt = 'Publicación';

                const postInfoElement = document.createElement('div');
                postInfoElement.classList.add('post-info');
                postInfoElement.textContent = `Publicado el ${formatTimestamp(post.timestamp)}`;

                postElement.appendChild(usernameElement);
                postElement.appendChild(captionElement);
                postElement.appendChild(imageElement);
                postElement.appendChild(postInfoElement);

                feedContainer.appendChild(postElement);
            });
        }

        function formatTimestamp(timestamp) {
            const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric' };
            return new Intl.DateTimeFormat('es-ES', options).format(timestamp);
        }

        function crearPublicacion() {
            const caption = document.getElementById('caption').value;
            const image = document.getElementById('image').files[0];

            // Lógica para procesar la publicación y añadir al array postsData
            const nuevaPublicacion = {
                username: usuarioAutenticado.username,
                caption: caption,
                imageUrl: URL.createObjectURL(image),
                timestamp: new Date(),
            };

            postsData.push(nuevaPublicacion);

            actualizarFeed();
        }
    </script>
</body>
</html>
