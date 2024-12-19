<div>
   <H1>Esta es una vista protegida!!!!!!</H1>

    @if(Auth::User()->admin == 1)   
        <H1>Administrador</H1>
    @else
    <H1>Estandar</H1>
    @endif


    Si existe alguien logueado {{Auth::Check()}}
    User ID {{Auth::id()}}
    Si no existe alguien logueado {{Auth::Guest()}}

</div>
