<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contas!</title>
</head>

<body>

    <header>
        <form method="get" action="index.php">
            <h1>Incluir Conta a Pagar</h1>
            <label for="cDesc">Descrição:</label>
            <input type="text" id="cDesc" name="descricao" maxlength="50" placeholder="Descrição da conta" required></br>
            <label for="cData">Vencimento:</label>
            <input type="date" id="cData" name="data" required></br>
            <label for="cValor">Valor R$</label>
            <input type="number" step="0.01" id="cValor" name="valor" min="0.01" max="999.99" value="0.01" required>
            <fieldset>
                <legend>Status</legend>
                <input type="radio" name="status" value="apagar" id="cApagar" checked>
                <label for="cApagar">A pagar</label>
                <input type="radio" name="status" value="paga" id="cpaga">
                <label for="cpaga">Pago</label>
            </fieldset>
            <input type="submit" value="Incluir">
        </form>
    </header>

    <?php
    class ContasApagar
    {
        public $descricao;
        public $vencimento;
        public $valor;
        public $status;

        function statusatual()
        {
            if ($this->status == "apagar") {
                echo "Conta Pendente";
            } else {
                echo "Conta paga";
            }
        }
    }
    ?>

        <pre>
            <h2>Situação do pagamento:</h2>
            <?php
               // require_once ("index.php");
            $cp = new ContasApagar();
            $cp->descricao = isset($_GET["descricao"]) ? $_GET["descricao"] : "não informado.";
            $cp->vencimento = isset($_GET["data"]) ? $_GET["data"] : "0";
            $cp->valor = isset($_GET["valor"]) ? $_GET["valor"] : "0";
            $cp->status = isset($_GET["status"]) ? $_GET["status"] : "0";
            // var_dump($cp);
            $cp->statusatual();
                    echo "<br>";
            print_r($cp);
            ?>
        </pre>

    <a href="javascript:history.back()">Voltar</a>


</body>

</html>