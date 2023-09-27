<div class="card">
    @include("componentes.encabezado",['titulo'=>$titulo])
    <div class="card-body">
     {{ $slot }}
    </div>
    <div class="card-footer">
    {{$pie}}
    </div>    
</div>
