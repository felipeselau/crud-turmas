<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('page-title')</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body>
    <header class="w-screen overflow-x-hidden flex flex-col p-4 shadow">
        <div class="flex items-center justify-between w-full">
            <h1 class="text-2xl font-bold"><a href="/">Controle de Turmas</a></h1>
            <div class="bttns-section flex items-center gap-4">
                <nav class="flex items-center gap-4" id="nav">
                    <a href="/">Início</a>
                    <a href="/turmas">Turmas</a>
                    <a href="/alunos">Alunos</a>
                </nav>
                <button class="bg-red-600 text-white rounded py-2 px-8 hover:opacity-70">
                    Login
                </button>
            </div>
        </div>
    </header>
    <section>
        @yield('content')
    </section>
    @vite('resources/js/app.js')
</body>

</html>
