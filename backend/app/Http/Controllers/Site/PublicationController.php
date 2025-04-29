<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::latest()->get();
        return view('site.publications.index', compact('publications'));
    }

    public function show(Publication $publication)
    {
        return view('site.publications.show', compact('publication'));
    }
}
