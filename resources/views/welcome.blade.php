<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClinicaXYZ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .panel {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            color: #fff;
            transition: background-color 0.3s, color 0.3s;
        }

        .panel:nth-child(odd) {
            background-color: #3498db; /* Color azul para la sección de Paciente */
        }

        .panel:nth-child(even) {
            background-color: #27ae60; /* Color verde para la sección de Médico */
        }

        .panel:hover {
            background-color: #2980b9; /* Cambio de color al pasar el mouse en Paciente */
            color: #fff; /* Cambio de color del texto al pasar el mouse */
        }

        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>
<body>
    <a href="/paciente" class="panel">
        <i class="icon fas fa-user" ></i>  Paciente
    </a>
    <a href="/medico" class="panel">
        <i class="icon fas fa-user-md" ></i>  Médico
    </a>
</body>
</html>
