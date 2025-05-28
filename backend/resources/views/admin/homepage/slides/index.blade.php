@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Slides da Homepage</h1>
        <a href="{{ route('admin.homepage.slides.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Novo Slide</a>
    </div>

    @if(session('success'))
        <div class="mb-4 text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse">
        <thead>
            <tr>
                <th class="border px-4 py-2 text-left">Título</th>
                <th class="border px-4 py-2">Imagem</th>
                <th class="border px-4 py-2 text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slides as $slide)
                <tr>
                    <td class="border px-4 py-2">{{ $slide->title }}</td>
                    <td class="border px-4 py-2 text-center">
                        @if ($slide->image)
                            <img src="{{ asset('storage/' . $slide->image) }}" alt="" class="h-16 mx-auto">
                        @endif
                    </td>
                    <td class="border px-4 py-2 text-center">
                        <a href="{{ route('admin.homepage.slides.edit', $slide) }}" class="text-blue-500">Editar</a> |
                        <form action="{{ route('admin.homepage.slides.destroy', $slide) }}" method="POST" class="inline-block" onsubmit="return confirm('Tem certeza?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
