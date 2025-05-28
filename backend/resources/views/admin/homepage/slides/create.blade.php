@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Criar Slide</h1>

    <form action="{{ route('admin.homepage.slides.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.homepage.slides._form')
        <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Salvar</button>
    </form>
@endsection
