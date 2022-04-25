<!-- Modal -->
<div class="modal fade" id="contact_modal" tabindex="-1" aria-labelledby="contact_modalLabel" aria-hidden="true">
    <div class="modal-dialog        ">
        <div class="modal-content">
            <form action="{{route('contactos.store')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="contact_modalLabel">agrega un nuevo contacto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" name="nombre">
                        <div id="nombreHelp" class="form-text">Ingresa el nombre...</div>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="text" class="form-control" id="telefono" aria-describedby="telefonoHelp" name="telefono">
                        <div id="telefonoHelp" class="form-text">Ingresa el telefono...</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">Ingresa el email...</div>
                    </div>
                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <select class="form-select" aria-label="Categorias" id="categoria" name="id_categoria">
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        <div id="categoriaHelp" class="form-text">Ingresa la categoria...</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success align-self-end">
                        <i class="bi bi-person-plus-fill me-2"></i>Agregar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>