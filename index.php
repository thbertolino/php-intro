<?php
    
    include "servicos/servicoMensagemSessao.php";
    include "servicos/servicoValidacao.php";
    include "servicos/servicoCategoriaCompetidora.php";
    
?> 

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário de inscrição</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>


    <form action="script.php" method="post">
    <?php
        $mensagemDeSucesso = obterMensagemSucesso();
        if(!empty($mensagemDeSuceso))
        {
            echo $mensagemDeSucesso;
        }
        
        $mensagemDeErro = obterMensagemErro();
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p>Seu nome: <input type ="text" name="nome" /></p>
    <p>Sua idade: <input type ="text" name="idade" /></p>
    <p><input type="submit" value="Enviar dados do competidor" /></p>
    </form>
    
</body>
</html>