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
    <h1>Editar Paciente</h1>

    <form action="{{ route('paciente.update', ['id' => $paciente->id]) }}" method="POST">
    @csrf
    @method('PUT')

        <label for="nombres">Nombres:</label>
        <input type="text" id="nombres" name="nombres" value="{{ $paciente->nombres }}"><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="{{ $paciente->apellidos }}"><br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $paciente->fecha_nacimiento }}"><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" value="{{ $paciente->direccion }}"><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ $paciente->telefono }}"><br><br>

        
        <input type="hidden" name="id_medico" value="{{ $paciente->id_medico }}">
    
    <button type="submit">Guardar Cambios</button>
    </form>
</body>
</html>
