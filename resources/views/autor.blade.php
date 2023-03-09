@extends("template")
@section("content")
<div class="content">
    <form action="{{route("autor.store")}}" method="POST">
        @csrf
        <label for="">CodigoAutor</label>
        <input type="text" name="codAutor" class="form-control">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control">
        <label for="">Apellido</label>
        <input type="text" name="apellido" class="form-control">
        <label for="">FechaNacimiento</label>
        <input type="text" name="fechaNacimiento" class="form-control">
        <button class="btn btn-primary">Guardar</button>
    </form>
</div>

<form action="{{route("autor.search")}}" method="GET">
    <input type="text" name="search" placeholder="Buscar...">
    <select name="selectColumn">
        <option name="codAutor" value="codAutor">codAutor</option>
        <option name="nombre" value="nombre">nombre</option>
        <option name="apellido" value="apellido">apellido</option>
        <option name="fechaNacimiento" value="fechaNacimiento">fechaNacimiento</option>
    </select>
    <button type="submit" class="btn btn-success">Buscar</button>
    <a href="{{route("autor.index")}}" class="btn btn-secondary">Mostrar Todos</a>
</form>

<table name="libro" class="table">
    <thead>            
        <th scope="col" name="codAutor">CodigoAutor</th>
        <th scope="col" name="nombre">Nombre</th>
        <th scope="col" name="apellido">Apellido</th>
        <th scope="col" name="fechaNacimiento">FechaNacimiento</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </thead>
    <tbody>
        @foreach ($autores as $item)
            <tr>
                <td>{{$item->codAutor}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->fechaNacimiento}}</td>
                <td>
                    <a href="{{route("autor.edit",$item->codAutor)}}" class="btn btn-info">Editar</a>
                </td>
                <td>
                    <a href="{{route("autor.destroy",$item->codAutor)}}" class="btn btn-danger">Eliminar</a>
                </td>

            </tr>
        @endforeach              
    </tbody>
</table>
