<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Início Calendário -->

    <div class="calendario">
        <div class="calendario-view">
            <div class="mes-ano">
                <button onclick="voltarMes()"><i class="bi bi-caret-left-fill"></i></button>
                <h2></h2>
                <button onclick="avancarMes()"><i class="bi bi-caret-right-fill"></i></button>
            </div>
            <div class="dias-semana">
                <h3>Domingo</h3>
                <h3>Segunda</h3>
                <h3>Terça</h3>
                <h3>Quarta</h3>
                <h3>Quinta</h3>
                <h3>Sexta</h3>
                <h3>Sábado</h3>
            </div>
            <div class="dias-numero">
            </div>
        </div>
    </div>

    <!-- Fim calendário -->

    <!-- Início do card Calendário -->

    <div class="janela-card" id="janela-card">
        <div class="card-calendario" id="card-calendario">
            <div class="close">
                <button onclick="fecharCardCalendario()" class="sair"><i class="bi bi-x-circle"></i></button>
            </div>

        </div>
    </div>

    <!-- Fim do card Calendário -->
     <script src="app.js"></script>
</body>

</html>