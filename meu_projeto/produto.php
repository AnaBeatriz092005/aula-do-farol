<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontros Cristãos</title>
    <style>
        /* Resetando margens e paddings */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Corpo da página */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fce4ec;  /* Rosa muito claro de fundo */
            color: #880e4f;  /* Cor de texto em rosa escuro */
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }

        /* Cabeçalho */
        header {
            background-color: #f8bbd0;  /* Rosa suave para o cabeçalho */
            color: white;
            padding: 20px;
            text-align: center;
            border-bottom: 5px solid #f48fb1; /* Borda suave rosa */
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #f48fb1;  /* Destaque rosa mais claro */
        }

        /* Seção de banner */
        .banner {
            background-color: #f8bbd0;  /* Rosa suave de fundo */
            color: #880e4f;
            text-align: center;
            padding: 80px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin: 20px;
        }

        .banner h1 {
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .banner p {
            font-size: 1.4rem;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
        }

        /* Seção Sobre nós */
        #sobre {
            padding: 60px 20px;
            background-color: #f1f8e9;  /* Rosa muito claro com um toque de verde suave */
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        #sobre h2 {
            font-size: 2.2rem;
            color: #ec407a;  /* Rosa mais intenso para o título */
            margin-bottom: 30px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        #sobre p {
            font-size: 1.1rem;
            max-width: 850px;
            margin: 0 auto;
            line-height: 1.7;
            color: #880e4f;
        }

        /* Seção Relacionamento */
        #relacionamento {
            padding: 60px 20px;
            background: linear-gradient(135deg, #ec407a, #f48fb1);  /* Gradiente suave de rosa */
            color: #5a2a4b;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        #relacionamento h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: white;
            margin-bottom: 40px;
        }

        .relacionamento-item {
            display: inline-block;
            width: 28%;
            margin: 15px 1%;
            background-color: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .relacionamento-item:hover {
            transform: translateY(-10px);
        }

        .relacionamento-item img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .relacionamento-item h3 {
            color: #ec407a;  /* Cor de título rosa mais intenso */
            font-size: 1.7rem;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .relacionamento-item p {
            font-size: 1.1rem;
            color: #5a2a4b;
            line-height: 1.6;
            text-align: justify;
        }

        /* Seção de Contato */
        #contato {
            padding: 60px 20px;
            background-color: #f8bbd0;  /* Rosa claro suave */
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        #contato h2 {
            font-size: 2.2rem;
            color: #880e4f;
            margin-bottom: 30px;
            font-weight: 600;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        form label {
            font-size: 1.1rem;
            color: #880e4f;
            font-weight: 600;
        }

        form input, form textarea {
            width: 80%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #f48fb1;  /* Borda rosa suave */
            border-radius: 8px;
            font-size: 1.1rem;
        }

        form button {
            width: 80%;
            padding: 15px;
            background-color: #ec407a;  /* Rosa claro para o botão */
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #f48fb1;  /* Rosa mais claro para o botão ao passar o mouse */
        }

        /* Rodapé */
        footer {
            background-color: #f7c8d1;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 1rem;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#relacionamento">Relacionamento</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="banner">
        <h1>Bem-vindo ao Encontro Cristão</h1>
        <p>Conecte-se com pessoas que compartilham a mesma fé e propósito!</p>
    </section>

    <section id="sobre">
        <h2>Sobre Nós</h2>
        <p>Somos uma comunidade cristã dedicada a promover encontros significativos e espirituais.</p>
    </section>

    <!-- Seção de Relacionamento -->
    <section id="relacionamento">
        <h2>Relacionamento Cristão</h2>
        <div class="relacionamento-item">
            <img src="fortalecer familia.jpeg" alt="Relacionamento 1">
            <h3>Fortalecer Laços Familiares</h3>
            <p>O relacionamento cristão valoriza a união familiar, incentivando o amor, a compreensão e a convivência harmoniosa dentro do lar.</p>
        </div>
        <div class="relacionamento-item">
            <img src="amizades.jpeg" alt="Relacionamento 2">
            <h3>Amizades Verdadeiras</h3>
            <p>Na comunidade cristã, cultivamos amizades verdadeiras, que se apoiam mutuamente nas alegrias e dificuldades da vida.</p>
        </div>
        <div class="relacionamento-item">
            <img src="relacionamento.jpeg" alt="Relacionamento 3">
            <h3>Relacionamento com Deus</h3>
            <p>Estabelecemos uma conexão profunda com Deus, guiados pela fé e pela oração, para fortalecer nossa caminhada espiritual.</p>
        </div>
    </section>

    <section id="contato">
        <h2>Entre em Contato</h2>
        <form>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

            <button type="submit">Enviar</button>
            <!-- Botão Voltar -->
        <button class="back-button" onclick="window.history.back(); playSound(); showHearts(event)">Voltar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Encontros Cristãos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

