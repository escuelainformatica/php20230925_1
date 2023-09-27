# Ejercicio 25 Septiembre
Usando este ejercicio, y el ejercicio anterior, cree las paginas de artistas, para listar,insertar, actualizar y eliminar.

# ejercicio 27 septiembre (componentes)

En su proyecto anterior, cree dos componentes:

## En el terminal:

```
php artisan make:component Tabla
php artisan make:component Tarjeta
```

## La clase del componente
* En app/view/componentes/Tabla.php, edite el contenido de la tabla como sigue:

```php
public function __construct(public array $encabezados=[])
{
}
public function render(): View|Closure|string
{
    return view('components.tabla',['encabezados'=>$this->encabezados]);
}
```
* En app/view/componentes/Tarjeta.php, edite el contenido de la tabla como sigue:
```php
public function __construct(public string $titulo="(sin titulo)")
{
}
public function render(): View|Closure|string
{
    return view('components.tarjeta',['titulo'=>$this->titulo]);
}
```

## En la vista del componente
* /resources/views/componentes/tabla.blade.php, edite lo siguiente:

```html
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
```

* /resources/views/componentes/tarjeta.blade.php, edite lo siguiente:
```html
<div class="card">
    @include("componentes.encabezado",['titulo'=>$titulo])
    <div class="card-body">
     {{ $slot }}
    </div>
    <div class="card-footer">
    {{$pie}}
    </div>    
</div>
```

## usar ambos componentes.
* Para usar la tabla, use lo siguiente (en la vista blade que quiere usarla)

```html
<x-tabla :encabezados="['AlbumId', 'Titulo', 'Artista', 'Editar']">
    <!-- aqui agregue el ciclo foreach para mostrar las filas-->
</x-tabla>
```

* Para usar la tarjeta, use lo siguiente (en la vista blade que quiere usarla)

```html
<x-tarjeta titulo="Lista de Albumes">
    <!-- aqui val el contenido de la tarjeta-->
    <x-slot:pie>
        <!-- aqui va el pie de la tarjeta-->
    </x-slot>
</x-tarjeta>
```
## Ejercicio 1 
Cree ambas tarjetas y uselo para los Albums y Artistas.
## Ejercicio 2
Cree una tarjeta nueva para mostrar un cuadro de texto (Input) del formulario
