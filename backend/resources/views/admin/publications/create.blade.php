@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Nova Publicação</h1>

    <form action="{{ route('admin.publications.store') }}" method="POST" class="space-y-4" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title" class="block font-medium">Título:</label>
            <input type="text" name="title" id="title" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label for="body" class="block font-medium">Conteúdo:</label>
            <input id="body" type="hidden" name="body" value="{{ old('body', $publication->body ?? '') }}" required>
            <trix-editor input="body" class="bg-white h-[12.5rem]"></trix-editor>
        </div>

        <div>
            <label for="image" class="block font-medium">Imagem:</label>
            <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2" required>
        </div>

        <button class="bg-green-600 text-white px-4 py-2 rounded">Salvar</button>
    </form>
@endsection
