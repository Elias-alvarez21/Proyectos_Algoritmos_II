<body>
    <div class="container mt-5">
        <h1 class="text-center">Autores</h1>
        <a href="{{route('autores.create')}}" class="btn btn-primary btn-create">
            <i class="fas fa-plus"></i> Crear Autor
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><i class="fas fa-id-badge"></i> Autor ID</th>
                    <th><i class="fas fa-user"></i> Nombre</th>
                    <th><i class="fas fa-flag"></i> Nacionalidad</th>
                </tr>
            </thead>
            <tbody>
            @foreach($autores as $autor)
                <x-autores-row :autor=$autor />
            @endforeach