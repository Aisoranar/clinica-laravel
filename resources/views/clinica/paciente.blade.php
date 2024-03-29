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

        .header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .table-content {
            width: 80%;
            margin: 50px auto;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5px;
            margin-top: 5px;
        }

        .btn {
            padding: 10px 20px; /* Ajusta el padding para separar el botón */
            cursor: pointer;
            border: none;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .btn-info {
            background-color: #3498db;
            color: #fff;
        }

        .btn-info:hover {
            background-color: #2980b9;
        }

        .btn-danger {
            background-color: #e74c3c;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        .btn-success {
            background-color: #2ecc71;
            color: #fff;
        }

        .btn-success:hover {
            background-color: #27ae60;
        }

        .btn-warning {
            background-color: #f39c12;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #d35400;
        }

        .btn-primary2 { /* Cambio de clase */
            background-color: #3498db;
            color: #fff;
            margin-bottom: 15px; /* Aumenta el espacio inferior del botón */
            margin-top: 15px; /* Añade margen superior al botón */
        }

        .btn-primary2:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0;">ClinicaXYZ</h1>
    </div>

    <div class="table-content">
    <h1 style="margin: 0;">Pacientes</h1>

        <table id="table-list">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>ID Médico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->nombres }}</td>
                    <td>{{ $paciente->apellidos }}</td>
                    <td>{{ $paciente->fecha_nacimiento }}</td>
                    <td>{{ $paciente->direccion }}</td>
                    <td>{{ $paciente->telefono }}</td>
                    <td>{{ $paciente->id_medico }}</td>
                <td>
            <div class="btn-group">
                <!-- Botón para Editar -->
                <a href="{{ route('paciente.edit', ['id' => $paciente->id]) }}" class="btn btn-info">
                    Editar
                </a>

                <!-- Botón para Eliminar -->
                <form action="{{ route('paciente.destroy', ['id' => $paciente->id]) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este paciente?')">Eliminar</button>
                </form>
            </div>
        </td>
    </tr>
                @endforeach
            
            </tbody>
        </table>
        

      <button class="btn btn-primary2" id="add"> 
      <a href="{{ route('paciente.create') }}">
                    Crear Nuevo Paciente
        </button>

    </div>

    <script>
        function toggleForm() {
            var form = document.getElementById('addPatientForm');
            if (form.style.display === 'none') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }

        
    </script>
   

</body>
</html>
