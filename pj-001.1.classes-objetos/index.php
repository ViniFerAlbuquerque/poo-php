<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Criando Classes e Objetos em PHP</title>
</head>

<body>
    <header>
        <?php
        require_once 'caneta.php';
        $c1 = new Caneta;
        $c1->modelo = 109;
        $c1->cor = "Azul";
        $c1->carga = 28;
        $c1->ponta = 0.5;
        // $c1->tampada = false;
        $c1->tampar();

        $c1->rabiscar();
        // var_dump($c1);
        print_r($c1);

        echo "<br>";

        $c2 = new Caneta;
        $c2->modelo = 708;
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->ponta = 0.9;
        $c2->destampar();

        $c2->rabiscar();
        print_r($c2);
        ?>
    </header>

    <footer><a href="javascript:history.back()">Voltar</a></footer>

</body>

</html>