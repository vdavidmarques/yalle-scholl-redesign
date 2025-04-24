<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::latest()->get();
        $publications = Publication::latest()->paginate(10);
        return view('admin.publications.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.publications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'required|nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('publications', 'public');
        }

        Publication::create($data);

        return redirect()->route('admin.publications.index')->with('success', 'Publicação criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        return view('admin.publications.edit', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'required|nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('publications', 'public');
        }

        $publication->update($data);

        return redirect()->route('admin.publications.index')->with('success', 'Publicação atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect()->route('admin.publications.index')->with('success', 'Publicação removida.');
    }
}
