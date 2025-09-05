<div class="resource-section" id="entry">
    <h2 class="resource-title">Entry</h2>

    <!-- GET index -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#entri-index">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Listar todas las entradas</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="entri-index">
            <p class="text-muted">Obtiene una lista de todas las entradas.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/entry</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/entri')">
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
                        <pre>GET /api/entry                                 
                            Accept: application/json
                        </pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Response</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>
                            {
                                "data": [
                                            {
                                                "id": 1,
                                                "title": "Entrada 1",
                                                "content": "Contenido de la entrada...",
                                                "created_at": "2025-01-01T00:00:00Z"
                                            }
                                        ]
                            }
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!-- GET show -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#entri-show">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Obtener entrada específica</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="entri-show">
            <p class="text-muted">Obtiene los detalles de una entrada específica.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/entri/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/entri/{id}')">
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
                        <pre>GET /api/entry/1
                            Accept: application/json</pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Response</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>
                            {
                                "data": {
                                        "id": 1,
                                        "title": "Entrada 1",
                                        "content": "Contenido completo...",
                                        "created_at": "2025-01-01T00:00:00Z",
                                        "updated_at": "2025-01-01T00:00:00Z"
                                    }
                            }
                    </pre>
                </div>
            </div>
        </div>
    </div>

    <!-- POST store -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#entri-store">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-post me-3">POST</span>
                    <strong>Crear nueva entrada</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="entri-store">
            <p class="text-muted">Crea una nueva entrada.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/entri</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/entri')">
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
                        <pre>POST /api/entri
                            Content-Type: application/json
                            {
                                "title": "Nueva Entrada",
                                "content": "Contenido de la nueva entrada"
                            }
                        </pre>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>Response</h6>
                    <div class="code-block">
                        <button class="copy-btn" onclick="copyCode(this)">
                            <i class="fas fa-copy"></i>
                        </button>
                        <pre>
                            {
                                "data": {
                                            "id": 2,
                                            "title": "Nueva Entrada",
                                            "content": "Contenido de la nueva entrada",
                                            "created_at": "2025-01-01T00:00:00Z",
                                            "updated_at": "2025-01-01T00:00:00Z"
                                        },
                                            "message": "Entrada creada exitosamente"
                            }
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PUT update -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#entri-update">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-put me-3">PUT</span>
                    <strong>Actualizar entrada</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="entri-update">
            <p class="text-muted">Actualiza una entrada existente.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/entri/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/entri/{id}')">
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
                        <pre>PUT /api/entri/1
Content-Type: application/json
{
  "title": "Entrada Actualizada",
  "content": "Contenido actualizado"
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
    "title": "Entrada Actualizada",
    "content": "Contenido actualizado",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T12:00:00Z"
  },
  "message": "Entrada actualizada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE destroy -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#entri-destroy">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-delete me-3">DELETE</span>
                    <strong>Eliminar entrada</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="entri-destroy">
            <p class="text-muted">Elimina una entrada del sistema.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/entri/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/entri/{id}')">
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
                        <pre>DELETE /api/entri/1
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
  "message": "Entrada eliminada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>