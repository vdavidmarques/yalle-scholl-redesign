<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Publicações - Yale School</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="max-w-3xl mx-auto p-4">
        <h1 class="text-3xl font-bold mb-6">Publicações</h1>

        @foreach ($publications as $pub)
            <div class="mb-6 p-4 bg-white rounded shadow">
                <h2 class="text-xl font-semibold">{{ $pub->title }}</h2>
                <p class="mt-2 text-gray-700">{{ \Illuminate\Support\Str::limit($pub->body, 150) }}</p>
                <a href="{{ route('site.publications.show', $pub) }}" class="text-blue-500 mt-2 inline-block">Ler mais</a>
            </div>
        @endforeach
    </div>

</body>
</html>
