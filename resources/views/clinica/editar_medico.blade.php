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
    <h1>Editar Medico</h1>

    <form action="{{ route('medico.update', ['id' => $medico->id]) }}" method="PUT">
    @csrf

    <label for="nombres">Nombres del Médico:</label>
    <input type="text" id="nombres" name="nombres" value="{{ $medico->nombres }}"><br><br>

    <label for="apellidos">Apellidos del Médico:</label>
    <input type="text" id="apellidos" name="apellidos" value="{{ $medico->apellidos }}"><br><br>

    <label for="fecha_nacimiento">Fecha de Nacimiento del Médico:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $medico->fecha_nacimiento }}"><br><br>

    <label for="direccion">Dirección del Médico:</label>
    <input type="text" id="direccion" name="direccion" value="{{ $medico->direccion }}"><br><br>

    <label for="telefono">Teléfono del Médico:</label>
    <input type="text" id="telefono" name="telefono" value="{{ $medico->telefono }}"><br><br>

    <label for="especialidad">Especialidad del Médico:</label>
    <input type="text" id="especialidad" name="especialidad" value="{{ $medico->especialidad }}"><br><br>

    <label for="id_contrato">ID Contrato:</label>
    <input type="text" id="id_contrato" name="id_contrato" value="{{ $medico->id_contrato }}"><br><br>

    <button type="submit">Guardar Cambios</button>
</form>

</body>
</html>
