<div class="resource-section" id="article">
    <h2 class="resource-title">Article</h2>

    <!-- GET index -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#article-index">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Listar todos los artículos</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="article-index">
            <p class="text-muted">Obtiene una lista paginada de todos los artículos.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/article</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/article')">
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
                        <pre>GET /api/article
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
[
    {
        "id": 1,
        "name": "Antibiótico Bovino",
        "quantity": 100,
        "min_quantity": 1,
        "photo": null,
        "technical_sheet": null,
        "presentation_id": 1,
        "category_id": 1,
        "supplier_id": 1,
        "unit_id": 1,
        "created_at": "2025-09-03T21:32:45.000000Z",
        "updated_at": "2025-09-03T21:32:45.000000Z",
        "presentation": {
            "id": 1,
            "description": "Botella de 500ml",
            "created_at": null,
            "updated_at": null
        },
        "category": {
            "id": 1,
            "name": "Medicamentos",
            "description": "Productos farmacéuticos para el ganado y cultivos",
            "created_at": null,
            "updated_at": null
        },
        "supplier": {
            "id": 1,
            "name": "Hernan Perez",
            "phone": "31174554",
            "created_at": null,
            "updated_at": null
        },
        "unit": {
            "id": 1,
            "name": "Kilogramos",
            "created_at": null,
            "updated_at": null
        }
    },
    {
        "id": 2,
        "name": "Artículo de ejemplo 2",
        "quantity": 50,
        "min_quantity": 5,
        "photo": null,
        "technical_sheet": null,
        "presentation_id": 2,
        "category_id": 2,
        "supplier_id": 2,
        "unit_id": 2,
        "created_at": "2025-09-03T21:35:00.000000Z",
        "updated_at": "2025-09-03T21:35:00.000000Z",
        "presentation": {
            "id": 2,
            "description": "Caja de 20 unidades",
            "created_at": null,
            "updated_at": null
        },
        "category": {
            "id": 2,
            "name": "Herramientas",
            "description": "Equipos y herramientas para la agricultura",
            "created_at": null,
            "updated_at": null
        },
        "supplier": {
            "id": 2,
            "name": "Maria Gomez",
            "phone": "31234567",
            "created_at": null,
            "updated_at": null
        },
        "unit": {
            "id": 2,
            "name": "Litros",
            "created_at": null,
            "updated_at": null
        }
    }
]
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- GET show -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#article-show">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-get me-3">GET</span>
                    <strong>Obtener artículo específico</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="article-show">
            <p class="text-muted">Obtiene los detalles de un artículo específico por su ID.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/article/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/article/{id}')">
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
                        <pre>GET /api/article/1
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
[
    {
        "id": 1,
        "name": "Antibiótico Bovino",
        "quantity": 100,
        "min_quantity": 1,
        "photo": null,
        "technical_sheet": null,
        "presentation_id": 1,
        "category_id": 1,
        "supplier_id": 1,
        "unit_id": 1,
        "created_at": "2025-09-03T21:32:45.000000Z",
        "updated_at": "2025-09-03T21:32:45.000000Z",
        "presentation": {
            "id": 1,
            "description": "Botella de 500ml",
            "created_at": null,
            "updated_at": null
        },
        "category": {
            "id": 1,
            "name": "Medicamentos",
            "description": "Productos farmacéuticos para el ganado y cultivos",
            "created_at": null,
            "updated_at": null
        },
        "supplier": {
            "id": 1,
            "name": "Hernan Perez",
            "phone": "31174554",
            "created_at": null,
            "updated_at": null
        },
        "unit": {
            "id": 1,
            "name": "Kilogramos",
            "created_at": null,
            "updated_at": null
        }
    }
]                           
</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- POST store -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#article-store">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-post me-3">POST</span>
                    <strong>Crear nuevo artículo</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="article-store">
            <p class="text-muted">Crea un nuevo artículo con los datos proporcionados.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/article</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/article')">
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
                        <pre>POST /api/article
                            Content-Type: application/json
                            {
                                "title": "Nuevo artículo",
                                "content": "Contenido del artículo",
                                "author": "Nombre del autor"
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
                        <pre>{
    "data": {
        "id": 2,
        "title": "Nuevo artículo",
        "content": "Contenido del artículo",
        "author": "Nombre del autor",
        "created_at": "2025-01-01T00:00:00Z",
        "updated_at": "2025-01-01T00:00:00Z"
    },
    "message": "Artículo creado exitosamente"
}
</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PUT update -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#article-update">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-put me-3">PUT</span>
                    <strong>Actualizar artículo</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="article-update">
            <p class="text-muted">Actualiza un artículo existente con nuevos datos.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/article/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/article/{id}')">
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
                        <pre>PUT /api/article/1
Content-Type: application/json
{
    "title": "Título actualizado",
    "content": "Contenido actualizado",
    "author": "Autor actualizado"
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
                        <pre>{
    "data": {
        "id": 1,
        "title": "Título actualizado",
        "content": "Contenido actualizado",
        "author": "Autor actualizado",
        "created_at": "2025-01-01T00:00:00Z",
        "updated_at": "2025-01-01T12:00:00Z"
    },
    "message": "Artículo actualizado exitosamente"
}
</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- DELETE destroy -->
    <div class="method-card">
        <div class="method-header" data-bs-toggle="collapse" data-bs-target="#article-destroy">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="method-badge badge-delete me-3">DELETE</span>
                    <strong>Eliminar artículo</strong>
                </div>
                <i class="fas fa-chevron-down collapse-icon"></i>
            </div>
        </div>
        <div class="collapse method-content" id="article-destroy">
            <p class="text-muted">Elimina un artículo específico del sistema.</p>
            <div class="route-copy mb-3">
                <span>http://127.0.0.1:8000/api/article/{id}</span>
                <button class="copy-route-btn" onclick="copyToClipboard('http://127.0.0.1:8000/api/article/{id}')">
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
                        <pre>DELETE /api/article/1
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
                        <pre>{
    "message": "Artículo eliminado exitosamente"
}
</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
