<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{asset('./styles/app.css')}}" rel="stylesheet">
    <title>Agenda de contactos</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="nav d-flex justify-content-between">
                    <div>
                        <a class="nav-link px-0" aria-current="page" href="/">agenda de contactos 📱</a>
                    </div>
                    <div class='d-flex'>
                        <a class="nav-link" href="/" data-bs-toggle="modal" data-bs-target="#category_modal">agregar categoria</a>
                        @include('includes.category_modal')
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datos as $dato)
                            <tr>
                                <td scope="row">{{$dato->nombre}}</th>
                                <td><a href="tel:{{$dato->telefono}}">{{$dato->telefono}}</a></th>
                                <td><a href="mailto:{{$dato->email}}">{{$dato->email}}</a></th>
                                <td>{{$dato->id_categoria}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>