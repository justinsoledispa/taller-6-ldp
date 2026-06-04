<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo proyecto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f5f7fb 0%, #eef2f7 100%);
            color: #1f2937;
            min-height: 100vh;
        }

        .container {
            max-width: 620px;
        }

        .form-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 22px;
            box-shadow: 0 15px 40px rgba(15, 23, 42, 0.08);
            padding: 32px;
        }

        h1 {
            font-weight: 800;
            color: #111827;
            margin-bottom: 8px;
        }

        .form-subtitle {
            color: #6b7280;
            margin-bottom: 28px;
        }

        .form-label {
            font-weight: 700;
            color: #374151;
        }

        .form-control {
            border-radius: 12px;
            border: 1px solid #d1d5db;
            padding: 11px 14px;
        }

        .form-control:focus {
            border-color: #4f46e5;
            box-shadow: 0 0 0 .25rem rgba(79, 70, 229, .15);
        }

        .btn {
            border-radius: 12px;
            font-weight: 600;
            padding: 10px 16px;
        }

        .btn-primary {
            background-color: #4f46e5;
            border-color: #4f46e5;
        }

        .btn-primary:hover {
            background-color: #4338ca;
            border-color: #4338ca;
        }

        .btn-secondary {
            background-color: #f3f4f6;
            border-color: #e5e7eb;
            color: #374151;
        }

        .btn-secondary:hover {
            background-color: #e5e7eb;
            border-color: #d1d5db;
            color: #111827;
        }

        .button-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 24px;
        }

        @media (max-width: 576px) {
            .form-card {
                padding: 22px;
            }

            .button-group .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="form-card">
            <h1 class="mb-4">Crear nuevo proyecto</h1>
            <p class="form-subtitle">Completa la información principal del proyecto.</p>

            <form action="{{ route('projects.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" rows="4"></textarea>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Volver al listado</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>