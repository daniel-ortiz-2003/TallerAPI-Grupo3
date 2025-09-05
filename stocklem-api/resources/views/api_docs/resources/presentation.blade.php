<div class="resource-section" id="presentation">
    <h2 class="resource-title">Presentation</h2>

    <!-- GET index -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#presentation-index">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Listar todas las presentaciones</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="presentation-index">
            <p class="text-muted">Obtiene una lista de todas las presentaciones.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/presentation</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/presentation')">
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
                        <pre>GET /api/presentation
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
      "title": "Mi Presentación",
      "description": "Descripción...",
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
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#presentation-show">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Obtener presentación específica</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="presentation-show">
            <p class="text-muted">Obtiene los detalles de una presentación específica.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/presentation/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/presentation/{id}')">
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
                        <pre>GET /api/presentation/1
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
    "title": "Mi Presentación",
    "description": "Descripción detallada...",
    "slides": 15,
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
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#presentation-store">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-post me-3">POST</span>
                    <strong>Crear nueva presentación</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="presentation-store">
            <p class="text-muted">Crea una nueva presentación.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/presentation</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/presentation')">
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
                        <pre>POST /api/presentation
Content-Type: application/json
{
  "title": "Nueva Presentación",
  "description": "Descripción de la nueva presentación"
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
    "title": "Nueva Presentación",
    "description": "Descripción de la nueva presentación",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T00:00:00Z"
  },
  "message": "Presentación creada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PUT update -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#presentation-update">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-put me-3">PUT</span>
                    <strong>Actualizar presentación</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="presentation-update">
            <p class="text-muted">Actualiza una presentación existente.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/presentation/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/presentation/{id}')">
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
                        <pre>PUT /api/presentation/1
Content-Type: application/json
{
  "title": "Presentación Actualizada",
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
    "title": "Presentación Actualizada",
    "description": "Descripción actualizada",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T12:00:00Z"
  },
  "message": "Presentación actualizada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE destroy -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#presentation-destroy">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-delete me-3">DELETE</span>
                    <strong>Eliminar presentación</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="presentation-destroy">
            <p class="text-muted">Elimina una presentación del sistema.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/presentation/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/presentation/{id}')">
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
                        <pre>DELETE /api/presentation/1
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
  "message": "Presentación eliminada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>