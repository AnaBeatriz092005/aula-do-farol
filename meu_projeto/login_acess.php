<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
        // Função para tocar o som de clique
        function playSound() {
            var audio = document.getElementById('click-sound');
            audio.play();  // Reproduz o som
        }

        // Função para adicionar o efeito dos corações
        function showHearts(event) {
            const button = event.target;
            const heart = document.createElement('div');
            heart.classList.add('heart');
            button.appendChild(heart);
            
            // Remover o coração após a animação
            setTimeout(() => {
                heart.remove();
            }, 1000);  // Tempo de duração da animação
        }

        // Função para redirecionar após o login
        function redirectToProductPage(event) {
            event.preventDefault(); // Impede o envio do formulário
            // Aqui você pode fazer a validação do login antes de redirecionar (se necessário)
            window.location.href = "produto.php";  // Redireciona para produto.php
        }
    </script>
    <style>
        /* Estilos gerais do corpo */
        body {
            background-color: #fee7f3;
            color: #ad1457;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            box-sizing: border-box;
        }

        /* Contêiner do formulário */
        .form-container {
            width: 100%;
            max-width: 400px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            text-align: center;
            border: 3px solid #f8bbd0;
            position: relative;
        }

        /* Coração decorativo */
        .form-container::before {
            content: "❤";
            font-size: 50px;
            color: #ec407a;
            position: absolute;
            top: -25px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Título do formulário */
        .form-container h2 {
            color: #d81b60;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        /* Estilo dos labels */
        label {
            display: block;
            font-weight: bold;
            color: #ad1457;
            margin-top: 15px;
            text-align: left;
            font-size: 14px;
        }

        /* Campos de entrada */
        input[type="email"], 
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px;
            border: 2px solid #f8bbd0;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
            transition: box-shadow 0.3s ease;
        }

        /* Efeito de foco nos campos de entrada */
        input[type="email"]:focus,
        input[type="password"]:focus {
            box-shadow: 0 0 8px #ec407a;
            outline: none;
        }

        /* Botão de ação */
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #ec407a;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .btn:hover {
            background-color: #d81b60;
        }

        /* Botão Voltar */
        .back-button {
            background-color: #ad1457;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: block;
            width: 100%;
            position: relative;
        }

        .back-button:hover {
            background-color: #880e4f;
        }

        /* Animação de corações */
        .heart {
            position: absolute;
            width: 30px;
            height: 30px;
            background-color: #ec407a;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            animation: heartAnimation 1s ease-out forwards;
            opacity: 0.8;
        }

        /* Animação de flutuação dos corações */
        @keyframes heartAnimation {
            0% {
                transform: scale(1) translateY(0);
                opacity: 1;
            }
            50% {
                transform: scale(1.5) translateY(-30px);
                opacity: 0.6;
            }
            100% {
                transform: scale(2) translateY(-60px);
                opacity: 0;
            }

        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form onsubmit="redirectToProductPage(event)">
            <!-- Campo de Email -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Digite seu email">

            <!-- Campo de Senha -->
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">

            <!-- Botão de Envio -->
            <input type="submit" class="btn" value="Entrar" onclick="playSound(); showHearts(event)">
        </form>

        <!-- Botão Voltar -->
        <button class="back-button" onclick="window.history.back(); playSound(); showHearts(event)">Voltar</button>
    </div>

    <!-- Som -->
    <audio id="click-sound" src="som.mp3" preload="auto"></audio>
</body>
</html>

