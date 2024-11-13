@php
    $optionsAutores = $autores->map(function($autor) {
        // Este código toma una colección de autores y la transforma en un arreglo de opciones,
        // donde cada opción tiene un value (el ID del autor) y un texto (el nombre del autor).
        // Este arreglo es útil para poblar un <select> en un formulario HTML.
        return ['value' => $autor->autorId, 'texto' => $autor->nombre];
    })->toArray();
    // $libEditAut = $libro->map(function ($idAut) {
    //     return ['value' => $idAut->autor_Id,'texto'=>$idAut->];
    // })->toArray();
    
    $optionsCateg = [
        ['value' => 1, 'texto' => 'Obras de teatro'],
        ['value' => 2, 'texto' => 'Fantasía'],
        ['value' => 3, 'texto' => 'Historia'],
        ['value' => 4, 'texto' => 'Romance'],
        ['value' => 5, 'texto' => 'Misterio y suspenso'],
        ['value' => 6, 'texto' => 'Bibliografía']
    ];
@endphp

<div class="container" style="width: 50%;"> 
    <form method="POST" action="{{ isset($libro) ? route('libros.update', $libro->libroId) : $a }}" enctype="multipart/form-data"> 
        @csrf @if(isset($libro)) @method("PUT") 
            <x-input-form leyenda="" tipo="hidden" name="libroId" value="{{ $libro->libroId }}"/> 
         @endif 
        <x-input-form leyenda="Título" tipo="text" name="titulo" value="{{ isset($libro) ? $libro->titulo : '' }}" /> 
        <x-select-form leyenda="Autores" name="autores" :options="$optionsAutores" /> 
        <x-select-form leyenda="Categorías" name="categorias" :libro=$libro :options="$optionsCateg" /> 
        <x-input-form leyenda="Precio" tipo="number" name="precio" :libro=$libro value="{{ isset($libro) ? $libro->precio : '' }}" /><br> 
        <div class="card" style="width: 18rem;"> 
            @if (isset($libro->IMG_ruta)) 
                <img src="{{ Storage::url($libro->IMG_ruta) }}" class="card-img-top" alt="Imagen actual"> 
                @else <p>No hay imagen disponible</p> 
            @endif 
        </div><br> 
        <x-input-imagen leyenda="Suba una imagen:" tipo="file" nombre="imagen" /><br> 
        <button type="submit" class="btn btn-outline-warning">ACEPTAR</button> 
    </form> 
</div>