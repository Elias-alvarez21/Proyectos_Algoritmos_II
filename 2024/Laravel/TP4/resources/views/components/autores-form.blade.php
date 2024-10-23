<body>
    <div>
        <form action="{{route('autores.store')}}" method="POST">
            @csrf
            <x-form-input l="Nombre del autor" t="text" n="nombre" />
            <x-form-input l="Nacionalidad" t="text" n="nacionalidad" />
            <button type="submit" id="btn-create" class="btn btn-success">ACEPTAR</button>
        </form>
    </div>
</body>