<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Estilos para a página inteira */
        body {
            margin: 0;
            font-family: 'Comic Sans MS', sans-serif;
            background-color: #fee7f3;; /* Rosa claro de fundo */
            color: #d81b60;  /* Rosa escuro */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Estilos para o cabeçalho */
        .header {
            background-color: #f8bbd0;  /* Rosa suave */
            padding: 10px 20px;
            width: 100%;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-bottom: 5px solid #d81b60;  /* Rosa escuro */
        }

        /* Estilo para a imagem dentro da barra */
        .logo-img {
            width: 60px;
            height: 70px;
            border-radius: 50%;
            margin-right: 15px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        
        /* Links do menu */
        nav .menu {
            display: flex;
            align-items: center;
        }

        nav .menu a {
            text-decoration: none;
            color: #d81b60;  /* Rosa escuro */
            font-weight: bold;
            font-size: 16px;
            padding: 8px 16px;
            border-radius: 8px;
            background-color: #f1f8e9;  /* Branco suave */
            transition: background-color 0.3s, color 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-left: 10px;
        }

        nav .menu a:hover {
            background-color: #f06292;  /* Rosa intenso ao passar o mouse */
            color: #fff;
        }

        /* Conteúdo principal */
        .content {
            padding: 20px;
            width: 90%;
            max-width: 800px;
            margin-top: 20px;
            background-color: #fce4ec;;  /* Branco */
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: 3px solid #f8bbd0;  /* Rosa suave */
            text-align: center;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 1s ease, transform 1s ease;
            margin-top: 50px;
        }

        .content.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Estilo dos blocos de login e cadastro */
        .login, .cadastro {
            padding: 20px;
            background-color: #f8bbd0;  /* Rosa suave */
            border-radius: 15px;
            margin: 15px 0;
            color: #d81b60;  /* Rosa escuro */
            font-size: 20px;
            font-weight: bold;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .login:hover, .cadastro:hover {
            transform: scale(1.05);
            background-color: #f06292;  /* Rosa intenso */
            color: #fff;
            margin-top: 30px;
        }

        /* Estilos para o vídeo */
        #video-container {
            opacity: 1;
            transition: opacity 1s ease, transform 1s ease;
        }

        #video-container.hidden {
            opacity: 0;
            transform: translateY(-20px);
            pointer-events: none;
            display: none; /* Oculta completamente após a transição */
        }

        /* Ajuste de transições */
        .content {
            opacity: 0;
            transform: translateY(80px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .content.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* Rodapé */
        footer {
            background-color: #f8bbd0;  /* Rosa suave */
            color: #d81b60;  /* Rosa escuro */
            text-align: center;
            padding: 15px;
            font-size: 1rem;
            font-weight: 600;
            margin-top: 40px;
        }

    </style>

    </style>
    <script>
        // Função para tocar o som quando o botão for clicado
        function playSound() {
            var audio = document.getElementById('click-sound');
            audio.play();  // Reproduz o som
        }

        document.addEventListener("DOMContentLoaded", () => {
            const video = document.getElementById("video");
            const videoContainer = document.getElementById("video-container");
            const content = document.getElementById("content");

            // Quando o vídeo termina, ocultar o contêiner do vídeo e mostrar o conteúdo
            video.addEventListener("ended", () => {
                videoContainer.classList.add("hidden");

                // Mostrar o conteúdo após a transição do vídeo
                setTimeout(() => {
                    content.classList.add("show");
                }, 1000); // Tempo sincronizado com a transição do vídeo
            });
        });
    </script>
</head>
<body>
    <!-- Cabeçalho com imagem e links de navegação -->
    <div class="header">
        <img src="logodosite.jpeg" alt="logodosite" class="logo-img">
        <nav>
            <div class="menu">
                <a href="#">Home</a>
                <a href="cadastro_usuario.php">Cadastro</a>
                <a href="login_acess.php">Login</a>
            </div>
        </nav>
    </div>

    <div id="video-container">
        <video id="video" width="1250" controls autoplay>
            <source src="rosa.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Conteúdo principal -->
    <div class="content" id="content">
        <a href="login_acess.php">
            <button class="login" onclick="playSound()">Login do Usuário</button>
        </a>
        <a href="cadastro_usuario.php">
            <button class="cadastro" onclick="playSound()">Cadastro de Usuário</button>
        </a>
        <audio id="click-sound" src="som.mp3" preload="auto"></audio>
    </div>
</body>
</html>
