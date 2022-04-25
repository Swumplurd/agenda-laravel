<form action="{{route('categorias.update', $categorias->id)}}" method="POST">
    @csrf
    @method('PUT')
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre" value="{{$categorias->nombre}}">
                    <div id="nombreHelp" class="form-text">Nombre de la categoria...</div>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">descripcion</label>
                    <input type="text" class="form-control" id="descripcion" aria-describedby="descripcionHelp" name="descripcion" value="{{$categorias->descripcion}}">
                    <div id="descripcionHelp" class="form-text">Ingresa una descripcion...</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success align-self-end">
                    <i class="bi bi-person-plus-fill me-2"></i>actualizar
                </button>
            </div>
</form>