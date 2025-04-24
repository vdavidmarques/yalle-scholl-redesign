@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-semibold mb-4">Publicações</h1>

    <a href="{{ route('admin.publications.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nova Publicação</a>

    <table class="mt-6 w-full bg-white rounded shadow">
        <thead>
            <tr class="border-b">
                <th class="p-2 text-left">Título</th>
                <th class="p-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publications as $publication)
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-2">{{ $publication->title }}</td>
                    <td class="p-2 flex gap-2 flex justify-center">
                        <a href="{{ route('admin.publications.edit', $publication) }}" class="text-blue-600 flex flex-col items-center">
                            <i data-lucide="edit" class="w-5 h-5"></i>Editar
                        </a>
                        <form action="{{ route('admin.publications.destroy', $publication) }}" method="POST" onsubmit="return confirm('Tem certeza?')">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 flex flex-col items-center">
                                <i data-lucide="trash" class="w-5 h-5"></i>Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        {{ $publications->links() }}
    </table>
@endsection
