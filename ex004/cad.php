<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        $nome = $_GET["nome"] ?? "ERROR";
        $sobrenome = $_GET["sobrenome"] ?? "ERROR";
        echo "<p>Olá <strong>$nome</strong>, tudo certo?</p>";
        echo "<p>O seu sobrenome é <strong>$sobrenome</strong>?</p>";
        ?>
        <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
    </main>
</body>
</html>