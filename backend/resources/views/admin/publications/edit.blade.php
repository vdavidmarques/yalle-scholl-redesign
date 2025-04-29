@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Editar Publicação</h1>

    <form action="{{ route('admin.publications.update', $publication) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="block font-medium">Título:</label>
            <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2" value="{{ old('title', $publication->title ?? '') }}" required>
        </div>

        <div>
            <label for="body" class="block font-medium">Conteúdo:</label>
            <input id="body" type="hidden" name="body" value="{{ old('body', $publication->body ?? '') }}" >
            <trix-editor input="body" class="bg-white h-[12.5rem]"></trix-editor>
        </div>

        @if ($publication->image)
            <div class="mb-4">
                <p class="font-medium">Imagem atual:</p>
                <img src="{{ asset('storage/' . $publication->image) }}" class="h-32 rounded shadow">
            </div>
        @endif

        <div>
            <label for="image" class="block font-medium">Nova Imagem:</label>
            <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2" >
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Atualizar</button>
    </form>
@endsection
