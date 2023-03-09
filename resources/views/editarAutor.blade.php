@extends("template")
<div class="content">
    <form action="{{route("autor.update",$autor->codAutor)}}" method="POST">
        @csrf
        @method("PUT")
        <label for="">CodigoAutor</label>
        <input type="text" name="codAutor" class="form-control" readonly value="{{$autor->codAutor}}">
        <label for="">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{$autor->nombre}}">
        <label for="">Apellido</label>
        <input type="text" name="apellido" class="form-control" value="{{$autor->apellido}}">
        <label for="">FechaNacimiento</label>
        <input type="text" name="fechaNacimiento" class="form-control" value="{{$autor->fechaNacimiento}}">

        <a href="{{route("autor.index")}}" class="btn btn-secondary">Regresar</a>
        <button class="btn btn-primary">Modificar</button>
    </form>
</div>