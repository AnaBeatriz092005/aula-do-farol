<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <script>
        // Função para verificar se as senhas coincidem
        function verificarSenha() {
            const senha = document.getElementById("senha").value;
            const confirmarSenha = document.getElementById("confirmarSenha").value;
            const mensagemErro = document.getElementById("mensagemErro");

            if (senha !== confirmarSenha) {
                mensagemErro.textContent = "As senhas não coincidem!";
                return false;
            } else {
                mensagemErro.textContent = "";
                return true;
            }
        }

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

        // Função para enviar o formulário após validação
        function enviarFormulario(event) {
            // Impede o envio automático do formulário para permitir validação
            event.preventDefault();

            // Verifica se as senhas coincidem
            if (verificarSenha()) {
                // Toca o som e exibe o efeito de corações
                playSound();
                showHearts(event);

                // Se a validação for bem-sucedida, envia o formulário (ou redireciona para a próxima página)
                window.location.href = "login_acess.php"; // Altere a URL para a página de destino
            }
        }
    </script>
    <style>
        body {
            background-color: #fee7f3;
            color: #fee7f3;
            font-family: 'Comic Sans MS', sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        /* Contêiner do formulário */
        .form-container {
            width: 100%;
            max-width: 600px;
            background-color: #fffafa;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border: 2px solid #f8bbd0;
        }

        /* Título do formulário */
        .form-container h1 {
            color: #d81b60;
            margin-bottom: 20px;
            font-size: 28px;
            text-align: center;
            font-family: 'Comic Sans MS', sans-serif;
        }

        /* Estilo dos labels */
        label {
            display: block;
            font-weight: bold;
            color: #ad1457;
            margin-top: 10px;
        }

        /* Campos de entrada */
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #f8bbd0;
            border-radius: 8px;
            box-sizing: border-box;
            background-color: #ffe4e1;
            font-family: 'Comic Sans MS', sans-serif;
        }

        /* Grupo de rádio */
        .radio-group {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        /* Mensagem de erro */
        #mensagemErro {
            color: #d32f2f;
            font-size: 14px;
            margin-top: 10px;
        }

        /* Checkbox */
        label input[type="checkbox"] {
            margin-right: 5px;
        }

        /* Botões */
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #f06292;
            color: white;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 20px;
            font-family: 'Comic Sans MS', sans-serif;
            position: relative;
        }

        .btn:hover {
            background-color: #ec407a;
        }

        .back-button {
            background-color: #ad1457;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 15px;
            display: block;
            width: 100%;
            text-align: center;
            font-family: 'Comic Sans MS', sans-serif;
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
        <h1>Formulário de Cadastro</h1>
        <form onsubmit="enviarFormulario(event)">
            <!-- Nome -->
            <label for="fname">Nome:</label>
            <input type="text" id="fname" name="fname" required placeholder="Digite seu nome">

            <!-- Sobrenome -->
            <label for="lname">Sobrenome:</label>
            <input type="text" id="lname" name="lname" required placeholder="Digite seu sobrenome">

            <!-- Data de Nascimento -->
            <label for="data">Data de Nascimento:</label>
            <input type="date" id="data" name="data" required>

            <!-- Idade -->
            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required placeholder="Digite sua idade">

            <!-- CPF -->
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required placeholder="Digite seu CPF">

            <!-- Gênero -->
            <label>Gênero:</label>
            <div class="radio-group">
                <label><input type="radio" id="masculino" name="genero" value="masculino"> Masculino</label>
                <label><input type="radio" id="feminino" name="genero" value="feminino"> Feminino</label>
                <label><input type="radio" id="outro" name="genero" value="outro"> Outro</label>
            </div>

            <!-- Email -->
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Digite seu email">

            <!-- Senha -->
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">

            <!-- Confirmação de Senha -->
            <label for="confirmarSenha">Confirme a Senha:</label>
            <input type="password" id="confirmarSenha" name="confirmarSenha" required placeholder="Confirme sua senha">
            <span id="mensagemErro"></span>

            <!-- Mensagem -->
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required placeholder="Escreva sua mensagem"></textarea>

            <!-- Termos e condições -->
            <label>
                <input type="checkbox" name="termos" required> Aceito os <a href="termos.html" target="_blank">termos e condições</a>.
            </label>

            <!-- Botões de envio e voltar -->
            <button type="submit" class="btn">Enviar</button>
            <button type="button" class="back-button" onclick="window.history.back();">Voltar</button>
            <audio id="click-sound" src="som.mp3" preload="auto"></audio>
        </form>
    </div>
</body>
</html>
