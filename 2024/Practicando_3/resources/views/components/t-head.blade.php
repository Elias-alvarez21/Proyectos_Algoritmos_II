<div>
    <div id="app">
    <nav class="white">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Aplicación CRUD</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </div>
    </nav>

    <div class="container" style="width: 80%;">
        <table id="listTable" class="striped responsive-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>GENERADA POR</th>    
                    <th>DESCRIPCIÓN</th>
                    <th>ALTA</th>
                    <th>PRIORIDAD</th>
                    <th>VENCIMIENTO</th>
                    <th>ESTADO</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($T as $tar)
                        <x-t-body $tar=$tar />
                    @endforeach
                </tr>
            </tbody>
</div>