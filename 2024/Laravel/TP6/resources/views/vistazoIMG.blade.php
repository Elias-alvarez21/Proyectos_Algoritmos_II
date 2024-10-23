<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista con Imagen</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-image {
            border-radius: 10px; /* Bordes redondeados */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra */
            max-width: 100%; /* Ajuste responsivo */
            height: auto; /* Mantener la proporción */
        }
        .image-container {
            text-align: center; /* Centrar contenido */
            margin-top: 50px; /* Espaciado superior */
        }
    </style>
</head>
<body>
    <div class="container image-container">
        <h1 class="mb-4">Vistazo de la imagen cargada</h1>
        <img src="{{route('busqueda.imagen',$imagen)}}" alt="Imagen de ejemplo" class="custom-image">
    </div>

    <!-- Bootstrap 5 JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
