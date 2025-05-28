<?php

namespace App\Http\Controllers\Admin\Homepage;

use App\Http\Controllers\Controller;
use App\Models\HomepageSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = HomepageSlide::all();

        return view('admin.homepage.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.homepage.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',// obrigatório e imagem
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'order' => 'required|integer',
        ]);

        // Upload
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('homepage', 'public');
        }

        // Criação do slide
        HomepageSlide::create($data);

        return redirect()->route('admin.homepage.slides.index')->with('success', 'Slide criada com sucesso!');

    }

    /**
     * Display the specified resource.
     */
    public function show(HomepageSlide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomepageSlide $slide)
    {
        return view('admin.homepage.slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomepageSlide $slide)
    {

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'order' => 'nullable|integer',
        ]);

        if($request->hasFile('image')){
            if ($slide->image) {
                Storage::disk('public')->delete($slide->image);
            }

            $data['image'] = $request->file('image')->store('homepage_slides', 'public');
        }

        $slide->update($data);

        return redirect()->route('admin.homepage.slides.index')->with('success', 'Slide atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomepageSlide $slide)
    {
        if ($slide->image) {
            Storage::disk('public')->delete($slide->image);
        }

        $slide->delete();

        return redirect()->route('admin.homepage.slides.index')->with('success', 'Slide excluído com sucesso!');
    }
}
