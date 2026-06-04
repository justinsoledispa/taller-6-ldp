<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
      body {
        background: linear-gradient(135deg, #f5f7fb 0%, #eef2f7 100%);
        color: #1f2937;
        min-height: 100vh;
      }

      .container {
        max-width: 620px !important;
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
    <div class="container mt-5" style="max-width: 500px;">
      <div class="form-card">
        <h1>Editar proyecto</h1>
        <p class="form-subtitle">Actualiza la información registrada del proyecto.</p>

        <form action="{{ route('projects.update', $proyecto->id) }}" method="POST">
          @csrf
          @method('PUT')

          <input
            class="form-control mb-3"
            type="text"
            name="nombre"
            value="{{ $proyecto->nombre }}"
            placeholder="Ingrese el nombre del proyecto"
            aria-label="Nombre del proyecto"
          >

          <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea
              class="form-control"
              id="descripcion"
              name="descripcion"
              rows="3"
              placeholder="Ingrese la descripción del proyecto"
            >{{ $proyecto->descripcion }}</textarea>
          </div>

          <div class="button-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Volver al listado</a>
          </div>
        </form>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>