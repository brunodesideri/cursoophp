<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    // $num = 0x1A;
    // echo "O valor da variável é $num";

    // $v = 300;
    // var_dump($v);

    // $num = (int) "950";
    // var_dump($num);

    // $casado = false;
    // echo "Sou casado? $casado"

    // $vet = [6, 2.5, 8, "Maria"];    
    // var_dump($vet);

    class Pessoa {
        private string $nome;
    }
    $p = new Pessoa;
    var_dump($p);    
    ?>

</body>
</html>