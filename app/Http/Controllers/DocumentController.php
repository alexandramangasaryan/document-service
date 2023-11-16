<?php

namespace App\Http\Controllers;

use App\Services\DocumentService;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * DocumentController constructor.
     */
    public function __construct()
    {
    }

    /**
     * Get all documents
     * @return array
     */
    public function index()
    {
        return (new DocumentService)->getAllDocuments();
    }

    /**
     * Get Document info
     * @param string $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $id)
    {
        return response()->json(['data' => (new DocumentService)->getDocument($id)]);
    }
}
