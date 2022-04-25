@extends('layouts.plantilla')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="mx-3">Agrega una nueva categoria</h2>
                <form action="{{route('categorias.store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">nombre de la categoria</label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="categoriaHelp" name="nombre">
                            <div id="categoriaHelp" class="form-text">Ingresa el nombre de la categoria...</div>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">descripcion de la categoria</label>
                            <textarea type="text" class="form-control" id="descripcion" aria-describedby="categoriaHelp" name="descripcion"></textarea>
                            <div id="categoriaHelp" class="form-text">Ingresa la descripcion de la categoria...</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('contactos.index')}}" class="btn btn-primary">Ir a contactos</a>
                        <button type="submit" class="btn btn-success align-self-end">
                            <i class="bi bi-person-plus-fill me-2"></i>Agregar categoria
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">nombre</th>
                            <th scope="col">descripcion</th>
                            <th scope="col">acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td scope="row">{{$categoria->nombre}}</td>
                                <td>{{$categoria->descripcion}}</td>
                                <td>
                                    <a href="{{route('categorias.edit', $categoria->id)}}" class="btn btn-secondary">
                                        ✏️
                                    </a>
                                    <a href="{{route('categorias.destroy', $categoria->id)}}" class="btn btn-secondary">❌</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection