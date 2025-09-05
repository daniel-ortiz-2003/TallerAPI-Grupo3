@extends('api_docs.layout')

@section('title', 'Documentación de la API')

@section('content')
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="mb-2"><i class="fas fa-api me-2"></i>Documentación de la API</h1>
                    <p class="mb-0 opacity-75">
                        <span class="status-indicator"></span>
                        Base URL: <strong>http://127.0.0.1:8000/api/</strong>
                    </p>
                </div>
                <div class="col-md-4 text-end">
                    <span class="badge bg-success fs-6">v1.0.0</span>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0">
                <div class="sidebar p-3">
                    <h5 class="mb-3">Recursos</h5>
                    <nav class="nav flex-column">
                        <a class="nav-link active" href="#article" data-resource="article">
                            <i class="fas fa-newspaper me-2"></i>Article
                        </a>
                        <a class="nav-link" href="#category" data-resource="category">
                            <i class="fas fa-tags me-2"></i>Category
                        </a>
                        <a class="nav-link" href="#entri" data-resource="entry">
                            <i class="fas fa-edit me-2"></i>Entry
                        </a>
                        <a class="nav-link" href="#issue" data-resource="issue">
                            <i class="fas fa-exclamation-circle me-2"></i>Issue
                        </a>
                        <a class="nav-link" href="#person" data-resource="person">
                            <i class="fas fa-user me-2"></i>Person
                        </a>
                        <a class="nav-link" href="#presentation" data-resource="presentation">
                            <i class="fas fa-presentation me-2"></i>Presentation
                        </a>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10">
                <div class="p-4">
                    <!-- Search -->
                    <div class="search-container">
                        <input type="text" id="searchInput" class="form-control search-input" 
                               placeholder="use App\Http\Controllers\ApiDocsController;Buscar endpoints...">
                    </div>

                    <!-- Resources Content -->
                    <div id="resourcesContent">
                        @include('api_docs.resources.article')
                        @include('api_docs.resources.category')
                        @include('api_docs.resources.entry')
                        @include('api_docs.resources.issue')
                        @include('api_docs.resources.person')
                        @include('api_docs.resources.presentation')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection