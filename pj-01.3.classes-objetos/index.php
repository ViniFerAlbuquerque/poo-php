<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Musculação-Qual seu nível e/ou objetivo?</title>
</head>

<body>
    <main>
        <form action="processa_datalist.php" method="get">
            <h1>Qual seu nível ou objetivo na musculação?</h1>
            <label for="meu_datalist">Meu nível (ou objetivo) na musculação:</label>
            <input list="opcoes" name="minha_opcao" maxlength="50" placeholder="Selecione seu objetivo" required>
            <datalist id="opcoes">
                <option value="Iniciante!">
                <option value="Intermediário!">
                <option value="Força!">
                <option value="Hipertrofia!">
            </datalist> <br>
            <label for="cAno">Ano (com data estimada) de início na atividade física:</label>
            <input type="date" id="cAno" name="Ano" pattern="\d{4}" placeholder="AAAA" required> <br>
            <label for="cDia">Quantos dias da semana me exercitarei:</label>
            <input type="text" list="opcoes_dia" id="cDia" name="diaMusculacao" maxlength="7" placeholder="Nº de dias..." required>
            <datalist id="opcoes_dia">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
                <option value="5">
                <option value="6">
                <option value="7">
            </datalist> <br>
            <label for="ctime">Tempo de duração do treino:</label>
            <input type="time" list="opcoes_hora" id="cHora" name="horaPorDia" maxlength="24" placeholder="Hora por dia..." required>
        </form> <br>
        <input type="submit" value="Verificar ->">
    </main>



    <?php
    class constMuscular
    {
        public $opcoes;
        public $valorSelecionado;
        public $minha_opcao;
        public $ano;
        public $dias;
        public $horas;

        function statusmuscular()
        {
            if ($this->opcoes ==  "Iniciante!") {
                echo "Número de dias: divisão de treino de 2 ou 3 dias";
            } elseif ($this->opcoes == "Intermediário!") {
                echo "Número de dias: divisão de treino de 3 dias ou divisão de treino de 6 dias (com 3 dias de atividade e 1 dia de folga em um formato cíclico)";
            } elseif ($this->opcoes == "Força!") {
                echo "Número de dias: divisão de treino de 2, 3, 4, 5 ou até 6 dias.";
            } else {
                echo "Número de dias: divisão de treino de 5 dias";
            }
        }
    }
?>

    <header>
        <pre>
        Condicionamento muscular:
      
        $cm->inicio = isset($_GET["opcoes"]) ? $_GET["minha_opcao"] : "value";
        $cm->ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $cm->dias = isset($_GET["dias"]) ? $_GET["dias"] : 0;
        $cm->horas = isset($_GET["horas"]) ? $_GET["horas"] : 0;
       
        </pre>
    </header>

</body>

<a href="javascript:history.back()"><- Voltar!</a>

</html>