<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postinho Home</title>
    <link rel="stylesheet" href="css/style.css">

    <!--Firebase-->
    <script src="https://www.gstatic.com/firebasejs/9.8.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.8.3/firebase-analytics.js"></script>

</head>

<body>

    <input type="text" id="medicamento">
    
        <header>
            <div class="topo-logo">
                <h2>Postinho de Saúde Garanhuns</h2>
            </div>
            
        
        <div class="buttons" style="text-align:center;">
            <button class="button" onclick="window.location.href = '/View/agendamento.php';">Agendamento</button>
            <button class="button" onclick="window.location.href = '/View/cadastro_medicamentos.php';">Medicamentos</button>
            <button class="button" onclick="window.location.href = '/View/lista_pacientes.php';">Pacientes</button>
            <button class="button" onclick="window.location.href = '/View/login.html';">Login</button>
        </div>
    </header>
</body>

</html>
       



