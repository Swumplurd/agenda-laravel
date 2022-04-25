<div class="modal fade" id="category_modal" tabindex="-1" aria-labelledby="category_modalLabel" aria-hidden="true">
    <div class="modal-dialog        ">
        <div class="modal-content">
            <form action="{{route('categorias.store')}}" method="post">
                @csrf 
                <div class="modal-header">
                    <h5 class="modal-title" id="category_modalLabel">agrega una nueva categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success align-self-end">
                        <i class="bi bi-person-plus-fill me-2"></i>Agregar categoria
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>