<?php
// Función para buscar usuarios
function buscarUsuario($nombre, $conn) {
    $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre'";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Red Social - Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            background-color: #3897f0;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column; /* Cambiado a columna para que el contenido esté apilado verticalmente */
            height: 100vh; /* Establecido el 100% de la altura de la ventana */
        }

        /* Cuadro de chats que ocupa toda la pantalla */
        .chat-container {
            display: flex;
            flex: 1; /* Hace que ocupe todo el espacio disponible */
        }

        .chat-list {
            width: 300px;
            background-color: #fff;
            border-radius: 20px;
            overflow-y: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Encabezado del chat */
        .chat-header {
            background-color: #3897f0;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Lista de chats */
        .chat-list ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        /* Elemento de la lista de chats */
        .chat-list li {
            padding: 10px;
            border-bottom: 1px solid #e0e0e0;
            cursor: pointer;
        }

        /* Buscador de usuarios */
        .user-search {
            display: flex;
            align-items: center;
            padding: 10px;
            background-color: #fff;
            border-bottom: 1px solid #e0e0e0;
        }

        .user-search input {
            width: calc(100% - 22px); /* Ajustado para tener en cuenta el padding y el borde */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        .user-search button {
            background-color: #3897f0;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Cuadro de mensajes en la pantalla principal */
        .message-box {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        /* Encabezado del cuadro de mensajes */
        .message-header {
            background-color: #3897f0;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Mensajes y área de entrada */
        .messages {
            margin-bottom: 20px;
        }

        .message {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        .message.sender {
            background-color: #e0e0e0;
            color: #333;
            align-self: flex-start;
        }

        .message.receiver {
            background-color: #fff;
            color: #333;
            align-self: flex-end;
        }

        .message-input {
            width: calc(100% - 22px); /* Ajustado para tener en cuenta el padding y el borde */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Botón de enviar mensaje */
        .send-button {
            background-color: #3897f0;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Mi Red Social - Chat</h1>
        <a href="dashboard.html">Volver al inicio</a>
    </header>

    <div class="container">

        <!-- Buscador de usuarios -->
        <div class="user-search">
            <input type="text" placeholder="Buscar usuario..." id="searchInput">
            <button onclick="buscarUsuario()">Buscar</button>
        </div>

        <!-- Cuadro de chats -->
        <div class="chat-container">
            <div class="chat-list">
                <div class="chat-header">Chats:</div>
                <ul>
                    <!-- Lista de chats -->
                    <!-- Cada elemento de la lista puede ser un enlace a una conversación -->
                    <li onclick="mostrarConversacion('Usuario 1')">Usuario 1</li>
                    <li onclick="mostrarConversacion('Usuario 2')">Usuario 2</li>
                    <!-- ... Agrega más elementos según sea necesario -->
                </ul>
            </div>

            <!-- Área de chat -->
            <div class="message-box" id="conversationBox">
                <div class="message-header">Conversación</div>

                <!-- Mensajes -->
                <div class="messages" id="conversationMessages">
                    <!-- Los mensajes de la conversación se mostrarán aquí -->
                </div>

                <!-- Área de entrada -->
                <textarea class="message-input" placeholder="Escribe tu mensaje" id="messageInput"></textarea>
                <button class="send-button" onclick="enviarMensaje()">Enviar</button>
            </div>
        </div>
    </div>

    <script>
        // Función para mostrar la conversación del usuario seleccionado
        function mostrarConversacion(usuario) {
            // Aquí deberías cargar los mensajes de la conversación del usuario desde la base de datos
            // y mostrarlos en el área de mensajes (id="conversationMessages")
            document.getElementById("conversationBox").style.display = "block";
            document.getElementById("conversationMessages").innerHTML = "Cargando mensajes de " + usuario + "...";
        }

        // Función para enviar un mensaje
        function enviarMensaje() {
            // Aquí deberías enviar el mensaje a la base de datos y mostrarlo en el área de mensajes
            var mensajeInput = document.getElementById("messageInput").value;
            document.getElementById("conversationMessages").innerHTML += '<div class="message sender">Yo: ' + mensajeInput + '</div>';
            document.getElementById("messageInput").value = ""; // Limpiar el área de entrada después de enviar el mensaje
        }

        // Función para buscar un usuario
        function buscarUsuario() {
            var usuarioBuscado = document.getElementById("searchInput").value;
            // Aquí deberías implementar la lógica para buscar el usuario en la base de datos
            // y mostrar la conversación si el usuario existe
            document.getElementById("conversationBox").style.display = "block";
            document.getElementById("conversationMessages").innerHTML = "Cargando mensajes de " + usuarioBuscado + "...";
        }
    </script>

</body>
</html>

