<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado de proyectos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(135deg, #f5f7fb 0%, #eef2f7 100%);
            color: #1f2937;
            min-height: 100vh;
        }

        .container {
            max-width: 1100px;
        }

        .page-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 22px;
            box-shadow: 0 15px 40px rgba(15, 23, 42, 0.08);
            padding: 28px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin-bottom: 22px;
        }

        .page-title {
            font-weight: 800;
            color: #111827;
            margin: 0;
        }

        .page-subtitle {
            color: #6b7280;
            margin: 6px 0 0;
        }

        .btn-primary {
            background-color: #4f46e5;
            border-color: #4f46e5;
            border-radius: 12px;
            font-weight: 600;
            padding: 10px 16px;
        }

        .btn-primary:hover {
            background-color: #4338ca;
            border-color: #4338ca;
        }

        .table {
            overflow: hidden;
            border-radius: 16px;
            margin-bottom: 0;
        }

        .table thead th {
            background: #111827;
            color: #ffffff;
            border-color: #111827;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: .04em;
        }

        .table tbody tr {
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: #f8fafc;
        }

        .btn-warning {
    background-color: #2563eb;
    border-color: #2563eb;
    color: #ffffff;
    border-radius: 10px;
    font-weight: 600;
}

.btn-warning:hover {
    background-color: #1d4ed8;
    border-color: #1d4ed8;
    color: #ffffff;
}

        .btn-danger {
            border-radius: 10px;
            font-weight: 600;
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }


    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="page-card">
            <div class="page-header">
                <div>
                    <h1 class="page-title">Proyectos</h1>
                    <p class="page-subtitle">Listado general de proyectos registrados</p>
                </div>

                <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">
                    Nuevo proyecto
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Fecha de creación</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($proyectos as $proyecto)
                            <tr>
                                <th scope="row">{{ $proyecto->id }}</th>
                                <td>{{ $proyecto->nombre }}</td>
                                <td>{{ $proyecto->descripcion }}</td>
                                <td>{{ $proyecto->created_at }}</td>
                                <td>
                                    <div class="actions">
                                        <a href="{{ route('projects.edit', $proyecto->id) }}" class="btn btn-warning btn-sm">
                                            Editar
                                        </a>

                                        <form action="{{ route('projects.destroy', $proyecto->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>