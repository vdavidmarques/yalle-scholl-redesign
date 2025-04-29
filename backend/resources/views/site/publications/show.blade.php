<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>{{ $publication->title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-3xl mx-auto p-4">
        <a href="{{ route('site.publications.index') }}" class="text-blue-500 mb-4 inline-block">&larr; Voltar</a>

        <h1 class="text-3xl font-bold mb-4">{{ $publication->title }}</h1>

        <div class="prose max-w-none">
            {!! nl2br(e($publication->body)) !!}
        </div>

        @if ($publication->image)
            <img src="{{ asset('storage/' . $publication->image) }}" class="mb-4 rounded shadow" />
        @endif
    </div>

</body>
</html>
