<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiDocsController extends Controller
{
    /**
     * Muestra la documentación interactiva de la API.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('api_docs.index');
    }
}