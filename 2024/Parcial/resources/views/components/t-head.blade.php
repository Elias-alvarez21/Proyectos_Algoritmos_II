<div>
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
    @foreach($all as $a)
        <x-t-body :a=$a/>
    @endforeach
</div>