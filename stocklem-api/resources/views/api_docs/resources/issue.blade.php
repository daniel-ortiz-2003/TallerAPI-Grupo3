<div class="resource-section" id="issue">
    <h2 class="resource-title">Issue</h2>

    <!-- GET index -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#issue-index">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Listar todos los problemas</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="issue-index">
            <p class="text-muted">Obtiene una lista de todos los problemas reportados.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/issue</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/issue')">
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
                        <pre>GET /api/issue
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
      "title": "Error de inicio",
      "description": "No se puede iniciar sesión",
      "status": "open",
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
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#issue-show">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Obtener problema específico</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="issue-show">
            <p class="text-muted">Obtiene los detalles de un problema específico.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/issue/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/issue/{id}')">
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
                        <pre>GET /api/issue/1
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
    "title": "Error de inicio",
    "description": "No se puede iniciar sesión",
    "status": "open",
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
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#issue-store">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-post me-3">POST</span>
                    <strong>Reportar nuevo problema</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="issue-store">
            <p class="text-muted">Reporta un nuevo problema al sistema.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/issue</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/issue')">
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
                        <pre>POST /api/issue
Content-Type: application/json
{
  "title": "Nuevo Error",
  "description": "Descripción del error",
  "status": "open"
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
    "title": "Nuevo Error",
    "description": "Descripción del error",
    "status": "open",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T00:00:00Z"
  },
  "message": "Problema reportado exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PUT update -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#issue-update">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-put me-3">PUT</span>
                    <strong>Actualizar problema</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="issue-update">
            <p class="text-muted">Actualiza un problema existente.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/issue/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/issue/{id}')">
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
                        <pre>PUT /api/issue/1
Content-Type: application/json
{
  "title": "Error Actualizado",
  "description": "Descripción actualizada",
  "status": "in progress"
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
    "title": "Error Actualizado",
    "description": "Descripción actualizada",
    "status": "in progress",
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T12:00:00Z"
  },
  "message": "Problema actualizado exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE destroy -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#issue-destroy">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-delete me-3">DELETE</span>
                    <strong>Eliminar problema</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="issue-destroy">
            <p class="text-muted">Elimina un problema del sistema.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/issue/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/issue/{id}')">
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
                        <pre>DELETE /api/issue/1
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
  "message": "Problema eliminado exitosamente"
}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>