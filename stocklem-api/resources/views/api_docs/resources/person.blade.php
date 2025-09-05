<div class="resource-section" id="person">
    <h2 class="resource-title">Person</h2>

    <!-- GET index -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#person-index">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Listar todas las personas</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="person-index">
            <p class="text-muted">Obtiene una lista de todas las personas registradas.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/person</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/person')">
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
                        <pre>GET /api/person
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
      "name": "Juan Pérez",
      "email": "juan@email.com",
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
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#person-show">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Obtener persona específica</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="person-show">
            <p class="text-muted">Obtiene los detalles de una persona específica.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/person/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/person/{id}')">
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
                        <pre>GET /api/person/1
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
    "name": "Juan Pérez",
    "email": "juan@email.com",
    "phone": "123-456-7890",
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
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#person-store">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-post me-3">POST</span>
                    <strong>Registrar nueva persona</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="person-store">
            <p class="text-muted">Registra una nueva persona en el sistema.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/person</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/person')">
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
                        <pre>POST /api/person
Content-Type: application/json
{
  "name": "Ana Gómez",
  "email": "ana@email.com",
  "phone": "098-765-4321"
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
    "name": "Ana Gómez",
    "email": "ana@email.com",
    "phone": "098-765-4321",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T00:00:00Z"
  },
  "message": "Persona registrada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PUT update -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#person-update">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-put me-3">PUT</span>
                    <strong>Actualizar persona</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="person-update">
            <p class="text-muted">Actualiza los datos de una persona.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/person/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/person/{id}')">
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
                        <pre>PUT /api/person/1
Content-Type: application/json
{
  "name": "Juan Pérez Actualizado",
  "email": "juan.actualizado@email.com",
  "phone": "111-222-3333"
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
    "name": "Juan Pérez Actualizado",
    "email": "juan.actualizado@email.com",
    "phone": "111-222-3333",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T12:00:00Z"
  },
  "message": "Persona actualizada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE destroy -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#person-destroy">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-delete me-3">DELETE</span>
                    <strong>Eliminar persona</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="person-destroy">
            <p class="text-muted">Elimina una persona del sistema.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/person/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/person/{id}')">
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
                        <pre>DELETE /api/person/1
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
  "message": "Persona eliminada exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>