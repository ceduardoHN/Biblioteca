@extends("template")
@section("content")
<div class="content">
    <form action="{{route("libro.store")}}" method="POST">
        @csrf
        <label for="">ISBN</label>
        <input type="text" name="ISBN" class="form-control">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control">
        <label for="">AnioPublicacion</label>
        <input type="text" name="aPubli" class="form-control">
        <label for="">NumeroPaginas</label>
        <input type="text" name="numPaginas" class="form-control">
        <label for="">CodigoAutor</label>
        <select name="codAutor">
            @foreach ($autores as $elmt)
                <option value="{{$elmt->codAutor}}">{{$elmt->codAutor}}</option>
            @endforeach
        </select>
        <button class="btn btn-primary">Guardar</button>
    </form>
</div>

<form action="{{route("libro.search")}}" method="GET">
    <input type="text" name="search" placeholder="Buscar...">
    <select name="selectColumn">
        <option name="ISBN" value="ISBN">ISBN</option>
        <option name="nombre" value="nombre">nombre</option>
        <option name="aPubli" value="aPubli">aPubli</option>
        <option name="numPaginas" value="numPaginas">numPaginas</option>
        <option name="codAutor" value="codAutor">codAutor</option>
    </select>
    <button type="submit" class="btn btn-success">Buscar</button>
    <a href="{{route("libro.index")}}" class="btn btn-secondary">Mostrar Todos</a>
</form>

<table name="libro" class="table">
    <thead>            
        <th scope="col" name="ISBN">ISBN</th>
        <th scope="col" name="nombre">Nombre</th>
        <th scope="col" name="aPubli">AnioPublicacion</th>
        <th scope="col" name="numPaginas">NumeroPaginas</th>
        <th scope="col" name="codAutor">CodigoAutor</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </thead>
    <tbody>
        @foreach ($libros as $item)
            <tr>
                <td>{{$item->ISBN}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->aPubli}}</td>
                <td>{{$item->numPaginas}}</td>
                <td>{{$item->codAutor}}</td>
                <td>
                    <a href="{{route("libro.edit",$item->ISBN)}}" class="btn btn-info">Editar</a>
                </td>
                <td>
                    <a href="{{route("libro.destroy",$item->ISBN)}}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        @endforeach              
    </tbody>
</table>
