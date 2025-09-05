<div class="resource-section" id="category">
    <h2 class="resource-title">Category</h2>

    <!-- GET index -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#category-index">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Listar todas las categorías</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="category-index">
            <p class="text-muted">Obtiene una lista de todas las categorías disponibles.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/category</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/category')">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h6>Request</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>GET /api/category
Accept: application/json</pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Response</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>{
  "data": [
    {
      "id": 1,
      "name": "Tecnología",
      "description": "Categoría de tecnología",
      "created_at": "2025-01-01T00:00:00Z"
    }
  ]
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GET show -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#category-show">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Obtener categoría específica</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="category-show">
            <p class="text-muted">Obtiene los detalles de una categoría específica.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/category/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/category/{id}')">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h6>Request</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>GET /api/category/1
Accept: application/json</pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Response</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>{
  "data": {
    "id": 1,
    "name": "Tecnología",
    "description": "Categoría de tecnología",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T00:00:00Z"
  }
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- POST store -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#category-store">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-post me-3">POST</span>
                    <strong>Crear nueva categoría</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="category-store">
            <p class="text-muted">Crea una nueva categoría.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/category</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/category')">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h6>Request</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>POST /api/category
Content-Type: application/json
{
  "name": "Nueva Categoría",
  "description": "Descripción de la categoría"
}</pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Response</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>{
  "data": {
    "id": 2,
    "name": "Nueva Categoría",
    "description": "Descripción de la categoría",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T00:00:00Z"
  },
  "message": "Categoría creada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PUT update -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#category-update">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-put me-3">PUT</span>
                    <strong>Actualizar categoría</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="category-update">
            <p class="text-muted">Actualiza una categoría existente.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/category/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/category/{id}')">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h6>Request</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>PUT /api/category/1
Content-Type: application/json
{
  "name": "Tecnología Actualizada",
  "description": "Descripción actualizada"
}</pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Response</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>{
  "data": {
    "id": 1,
    "name": "Tecnología Actualizada",
    "description": "Descripción actualizada",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T12:00:00Z"
  },
  "message": "Categoría actualizada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE destroy -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#category-destroy">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-delete me-3">DELETE</span>
                    <strong>Eliminar categoría</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="category-destroy">
            <p class="text-muted">Elimina una categoría del sistema.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/category/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/category/{id}')">
                    <i class="fas fa-copy"></i>
                </button>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h6>Request</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>DELETE /api/category/1
Accept: application/json</pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Response</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>{
  "message": "Categoría eliminada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>