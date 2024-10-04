<?php
include_once"config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    


    // Preparando a consulta
    $stmt = $conexao->prepare("INSERT INTO contato (nome, email, mensagem) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $mensagem);

    // Executando a consulta
    if ($stmt->execute()) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fechando a conexão
    $stmt->close();
    $conexao->close();
}
?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio Pessoal</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img {
            max-width: 20%; /* Para garantir que as imagens não ultrapassem a largura do contêiner */
            height: auto; /* Mantém a proporção da imagem */
        }
        .projeto {
            margin-bottom: 20px; /* Adiciona um espaço entre os projetos */
        }
        </style>
</head>
<body>
    <header>
        <h1>Meu Portfólio Pessoal</h1>
        <nav>
            <ul>
                <li><a href="#sobre">Sobre Mim</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="sobre">
        <h2>Sobre Mim</h2>
        <p>Olá! </p>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY5XsIRy7xgbsG2sqE-i6ET3zrfU-3P42hew&s" alt="Foto do desenvolvedor" />
    </section>

    <section id="projetos">
        <h2>Projetos</h2>
        <div class="projeto">
            <h3>Projeto 1</h3>
            <img src="https://www.hashtagtreinamentos.com/wp-content/uploads/2024/04/Formulario-de-Login-em-HTML-e-CSS-23-1024x451.png" alt="Projeto 1" />
            <p>Descrição do projeto 1.</p>
            <a href="#" target="_blank">Ver Projeto</a>
        </div>
        <div class="projeto">
            <h3>Projeto 2</h3>
            <img src="https://img.freepik.com/vetores-gratis/formulario-criativo-de-login-criativo_23-2147727235.jpg" alt="Projeto 2" />
            <p>Descrição do projeto 2.</p>
            <a href="#" target="_blank">Ver Projeto</a>
        </div>
        <div class="projeto">
            <h3>Projeto 3</h3>
            <img src="https://i.ytimg.com/vi/GSjd-glAmBk/maxresdefault.jpg" alt="Projeto 3" />
            <p>Descrição do projeto 3.</p>
            <a href="#" target="_blank">Ver Projeto</a>
        </div>
    </section>

    <section id="habilidades">
        <h2>Habilidades</h2>
        <ul>
            <li>HTML & CSS</li>
            <li>JavaScript</li>
            <li>Python</li>
            <li>React</li>
            <li>Node.js</li>
        </ul>
    </section>

    <section id="contato">
        <h2>Contato</h2>
        <form method="POST" action="index.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" required></textarea>

    <button type="submit">Enviar</button>
</form>

    </section>

    <footer>
        <p>&copy; 2024 Meu Portfólio Pessoal. Todos os direitos reservados.</p>
    </footer>
</body>
</html>