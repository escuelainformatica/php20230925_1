<table class="table table-bordered">
    <thead>
        <tr>
        @foreach($encabezados as $encabezado)
            <th>{{$encabezado}}</td>
        @endforeach            
        </tr>
    </thead>
    <tbody>
        {{$slot}}
    </tbody>
</table>
