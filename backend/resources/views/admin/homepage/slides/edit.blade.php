@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Editar Slide</h1>

    <form action="{{ route('admin.homepage.slides.update', $slide) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.homepage.slides._form')
        <button type="submit" class="mt-4 bg-green-600 text-white px-4 py-2 rounded">Atualizar</button>
    </form>
@endsection
