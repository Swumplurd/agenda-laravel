@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <nav class="nav d-flex justify-content-between">
                <div>
                    <a class="nav-link px-0" aria-current="page" href="/">agenda de contactos 📱</a>
                </div>
                <div class='d-flex'>
                    <a class="nav-link" href="{{route('categorias.index')}}">administrar categorias</a>
                    <a class="nav-link" href="/" data-bs-toggle="modal" data-bs-target="#contact_modal">agregar contacto</a>
                    @include('includes.contact_modal')
                </div>
            </nav>
        </div>
    </div>
    <div class="row my-4">
        <div class="col text-center">
            <h1 class="display-3 fw-bold">Bienvenido a tu agenda personal</h1>                
        </div>
    </div>
</div>
<div class="container h-100">
    <div class="row">
        <div class="col">
            <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">nombre</th>
                        <th scope="col">telefono</th>
                        <th scope="col">email</th>
                        <th scope="col">categoria</th>
                        <th scope="col">acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listado as $dato)
                        <tr>
                            <td scope="row">{{$dato->nombre}}</td>
                            <td><a href="tel:{{$dato->telefono}}">{{$dato->telefono}}</a></td>
                            <td><a href="mailto:{{$dato->email}}">{{$dato->email}}</a></td>
                            <td>{{$dato->nombre_categoria}}</td>
                            <td>
                                <a href="{{route('contactos.edit', $dato->id)}}" class="btn btn-secondary">
                                    ✏️
                                </a>
                                <a href="{{route('contactos.destroy', $dato->id)}}" class="btn btn-secondary">❌</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection