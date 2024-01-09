<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClinicaXYZ</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Color de fondo */
        }

        h1 {
            margin-bottom: 20px;
            color: #333; /* Color del texto del encabezado */
        }

        ul {
            list-style: none;
            display: flex;
            width: 100%;
            padding: 0;
        }

        li {
            width: 50%;
            text-align: center;
        }

        li:nth-child(odd) {
            background-color: #3498db; /* Color de fondo azul para uno de los elementos */
        }

        a {
            display: block;
            padding: 20px;
            text-decoration: none;
            color: #fff; /* Color del texto de los enlaces */
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9; /* Cambio de color al pasar el ratón */
        }
    </style>
</head>
<body>
    <h1>ClinicaXYZ</h1>

    <ul>
        <li><a href="/paciente">Paciente</a></li>
        <li><a href="/medico">Médico</a></li>
    </ul>
</body>
</html>
