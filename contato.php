<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {
    
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $mensagem = $_POST['message'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];

    $to = "pedeo38@gmail.com";
    $subject = "Contato - MM Service Bat";
    $body = "Nome: ".$nome. "\r\n".
            "Email: ".$email."\r\n".
            "Mensagem: ".$mensagem."\r\n".
            "Telefone: ".$telefone."\r\n".
            "Celular: ".$celular;
    $header = "From:murillo@mmservicebat.com.br"."\r\n".
                "Reply-To:".$email."\r\n".
                "X=Mailer:PHP/".phpversion();
    if(mail($to,$subject,$body,$header))
        echo("E-mail enviado com sucesso");
    else
        echo("O email não pode ser enviado");

}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleContato.css">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="/js/ancora.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- cabeçalho -->
    <nav class="conteudoResponsivo">
        <img src="./imagens/logo2.png" alt="" srcset="">
        <ul class="conteudoResponsivo">
            <li>
                <a href="index.html">
                    <h1>Início</h1>
                </a>
            </li>
            <li>
                <a>
                    <h1>Produtos</h1>
                </a>
                <ul>
                    <li>
                        <a href="carros.html">
                            <h1>Carros</h1>
                        </a>
                    </li>
                    <li>
                        <a href="motos.html">
                            <h1>Motos</h1>
                        </a>
                    </li>
                    <li>
                        <a href="nobreak.html">
                            <h1>Nobreak</h1>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="servicos.html">
                    <h1>Serviços</h1>
                </a>
            </li>
            <li>
                <a href="contato.html">
                    <h1>Contato</h1>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Quem somos -->
    <div id="containerFrm">
        <section class="conteudo">
            <div>
                <h2>
                    contato
                </h2>
                <p>
                    Tem interesse em saber o preço ou disponibilidade de nossos produtos? Preencha o formulário de contato, assim que apertar no botão enviar, receberemos um E-mail com as suas dúvidas, o quanto antes estaremos respondendo e entrando em contato para o que for preciso.
                </p>
            </div>
            
            <div id="caixaFrm">
                <form action="contato.php" method="POST">
                    <div class="textFrm">
                        <input type="text" name="name" class="inputText" placeholder="Nome">
                    </div>
                    <div class="textFrm">
                        <input type="email" name="email" class="inputText" placeholder="E-mail">
                    </div>
                    <div class="textFrm">
                        <input type="tel" name="telefone" class="inputText" placeholder="Telefone">
                    </div>
                    <div class="textFrm">
                        <input type="tel" name="celular" class="inputText" placeholder="Celular">
                    </div>
                    <div class="textFrm">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Digite sua mensagem aqui"></textarea>
                    </div>
                    <div class="textFrm">
                        <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar">
                    </div>
                    
                </form>
            </div>
        </section>
        <a href="https://whats.link/mmservicebat"><button><img src="imagens/logoWpp.png" alt="">
            <h3>WhatsApp</h3>
        </button></a>
    </div>
    
    <!-- rodapé -->
    <footer class="conteudoResponsivo">
        <div class="centralizar conteudoResponsivo">
            <div class="conteudoResponsivo">
                <img src="./imagens/email.png" alt="" class="conteudoResponsivo">
                <p class="conteudoResponsivo">
                    E-mail: murillo@mmservicebat.com.br
                </p>
            </div>
            <div class="conteudoResponsivo">
                <img src="./imagens/telefone.png" alt="" class="conteudoResponsivo">
                <p class="conteudoResponsivo">
                    Murillo: (11)97487-2289
                </p>
            </div>
            <div class="conteudoResponsivo">
                <img src="./imagens/telefone.png" alt="" class="conteudoResponsivo">
                <p class="conteudoResponsivo">
                    Márcio: (11)95966-9970
                </p>
            </div>
        </div>
        <img src="./imagens/logoFace.png" alt="" class="icone">
        <img src="./imagens/logoInsta.png" alt="" class="icone">
    </footer>
</body>

</html>