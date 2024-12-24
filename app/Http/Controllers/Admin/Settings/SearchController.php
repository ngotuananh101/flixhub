<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $availableSearchMethods = [
            'algolia' => 'Algolia',
            'meilisearch' => 'Meilisearch',
            'typesense' => 'Typesense',
            'database' => 'Database',
            'collection' => 'Collection',
            'null' => 'Null',
        ];
        return view('admin.settings.search', [
            'availableSearchMethods' => $availableSearchMethods,
        ]);
    }
}
