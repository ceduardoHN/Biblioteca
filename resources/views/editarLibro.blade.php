@extends("template")
<div class="content">
    <form action="{{route("libro.update",$libro->ISBN)}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">ISBN</label>
        <input type="text" name="ISBN" class="form-control" readonly value="{{$libro->ISBN}}">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{$libro->nombre}}">
        <label for="">AnioPublicacion</label>
        <input type="text" name="aPubli" class="form-control" value="{{$libro->aPubli}}">
        <label for="">NumeroPaginas</label>
        <input type="text" name="numPaginas" class="form-control" value="{{$libro->numPaginas}}">
        <label for="">CodigoAutor</label>
        <select name="codAutor">
            @foreach ($autores as $elmt)
                <option value="{{$elmt->codAutor}}">{{$elmt->codAutor}}</option>
            @endforeach
        </select>

        <a href="{{route("libro.index")}}" class="btn btn-secondary">Regresar</a>
        <button class="btn btn-primary">Modificar</button>
    </form>
</div>