<?php


namespace App\Services;


use App\Models\Document;

class DocumentService
{
    /**
     * Get all documents paginated
     * @return array
     */
    public function getAllDocuments() {
        $perPage = 10;
        $documents = Document::query()->paginate($perPage);

        return [
            'data' => $documents->items(),
            'page' => $documents->currentPage(),
            'pages' => $documents->lastPage(),
            'limit' => $perPage,
            'total' => $documents->total(),
        ];
    }

    /**
     * Get document by id
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function getDocument($id) {
        return Document::query()->findOrFail($id);
    }
}
