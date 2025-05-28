<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Painel Administrativo - Yale School</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen flex">
        <!-- Sidebar simples -->
        <aside class="w-64 bg-white border-r">
            <div class="p-4 font-bold text-xl">
                <a href="{{ route('admin.dashboard') }}" class="hover:underline">
                    Admin
                </a>
            </div>
            <nav class="p-4">
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="hover:underline flex items-center gap-x-2">
                            <i data-lucide="layout-dashboard" class="w-5 h-5"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.settings.edit') }}" class="hover:underline flex items-center gap-x-2">
                            <i data-lucide="info" class="w-5 h-5"></i>Informações Gerais
                        </a>
                    </li>

                    <li>
                        <span class="flex items-center gap-x-2">
                            <i data-lucide="home" class="w-5 h-5"></i>Homepage
                        </span>
                        <ul class="ml-4 mt-2">
                            <li>
                                <a href="{{ route('admin.homepage.slides.index') }}" class="hover:underline flex items-center gap-x-2">
                                    <i data-lucide="image-play" class="w-5 h-5"></i>Slides
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('admin.publications.index') }}" class="hover:underline flex items-center gap-x-2">
                            <i data-lucide="book-text" class="w-5 h-5"></i>Publicações
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Conteúdo -->
        <main class="flex-1 p-6">
            @if (session('success'))
                <div class="mb-4 bg-green-100 text-green-800 px-4 py-2 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 bg-red-100 text-red-800 px-4 py-2 rounded">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
