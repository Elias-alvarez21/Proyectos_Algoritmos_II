<div class="container" style="width: 80%;">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <table id="listTable" class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th>LEGAJO</th>
                        <th style="display:none">ID</th>
                        <th>ÁREA / SECTOR</th>    
                        <th>APELLIDO</th>
                        <th>NOMBRE</th>
                        <th>FECHA DE INGRESO</th>
                        <th>ESTADO</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($pers as $p) 
                           <x-t-body :p=$p/> 
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>