<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClinicaXYZ</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            width: 60%;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            border-radius: 3px;
            background-color: #3498db;
            color: #fff;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Nuevo Paciente</h1>

    <form action="{{ route('paciente.store') }}" id="addPatientForm" method="POST">
            @csrf
            <input type="text" id="nombres" name="nombres" placeholder="Nombre">
            <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="YYYY-MM-DD">
            <input type="text" id="direccion" name="direccion" placeholder="Dirección">
            <input type="text" id="telefono" name="telefono" placeholder="Teléfono">
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
</body>
</html>
