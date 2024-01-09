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
    <h1 style="margin: 0;">Lista de Medicos</h1>

    <table id="table-list">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Especialidad</th>
                    <th>Id Contrato</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($medicos as $medico)
                <tr>
                    <td>{{ $medico->nombres }}</td>
                    <td>{{ $medico->apellidos }}</td>
                    <td>{{ $medico->fecha_nacimiento }}</td>
                    <td>{{ $medico->direccion }}</td>
                    <td>{{ $medico->telefono }}</td>
                    <td>{{ $medico->especialidad }}</td>
                    <td>{{ $medico->id_contrato }}</td>               

                    <div>
                    </div>

                <td>
                <div class="btn-group">
                <!-- Botón para Editar -->
                <a href="{{ route('medico.edit', ['id' => $medico->id]) }}" class="btn btn-info">
                    Editar
                </a>

                <!-- Botón para Eliminar -->
                <form action="{{ route('medico.destroy', ['id' => $medico->id]) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este medico?')">Eliminar</button>
                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>
        

      <button class="btn btn-primary2" id="add" onclick="toggleForm()"> 
            <span class="glyphicon glyphicon-plus-sign"></span> Agregar Nuevo Medico
        </button>

        <form action="{{ route('medico.store') }}" id="addMedicoForm" method="POST">
            @csrf
            <input type="text" id="nombres" name="nombres" placeholder="Nombre">
            <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="YYYY-MM-DD">
            <input type="text" id="direccion" name="direccion" placeholder="Dirección">
            <input type="text" id="telefono" name="telefono" placeholder="Teléfono">
            <input type="text" id="especialidad" name="especialidad" placeholder="Especialidad">
            <input type="text" id="id_contrato" name="id_contrato" placeholder="ID Contrato">

            <div style="margin-top: 20px;">
            <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>

    </div>

    <script>
        function toggleForm() {
            var form = document.getElementById('addDoctorForm');
            if (form.style.display === 'none') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }

        
    </script>
   

</body>
</html>
