<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>lksadkdsaklkaskldskla</title>
</head>
<body>
    <form action="{{route('contactos.update', $contacto->id)}}" method="POST">
        @csrf
        @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="contact_modalLabel">agrega un nuevo contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" value="{{$contacto->nombre}}">
                        <div id="nombreHelp" class="form-text">Ingresa tu nombre...</div>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" aria-describedby="telefonoHelp" name="telefono" value="{{$contacto->telefono}}">
                        <div id="telefonoHelp" class="form-text">Ingresa tu telefono...</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{$contacto->email}}">
                        <div id="emailHelp" class="form-text">Ingresa tu telefono...</div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Categorias" name="id_categoria">
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success align-self-end">
                        <i class="bi bi-person-plus-fill me-2"></i>actualizar
                    </button>
                </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>