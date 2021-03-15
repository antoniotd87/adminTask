<!DOCTYPE html>
<html lang="es" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>UpTask</title>
</head>

<body class="h-full flex flex-col">
    <header class="bg-green-600 flex justify-between text-white">
        <p class="m-4 font-bold text-xl">
            UpTask -- Administrador de Proyectos
        </p>
        <p class="m-4 self-center">
            Cerrar Sesion
        </p>
    </header>
    <main class="flex h-full">
        <aside class="w-1/5 bg-green-500 h-auto">
            <div class="mx-6 my-8 text-center">
                <a href="" class="bg-blue-500 text-white px-6 py-4 rounded text-sm font-bold">Agregar Proyecto <span
                        class="text-xl">+</span> </a>
            </div>
            <div class="text-center">
                <h2 class="font-bold text-2xl text-white">Proyectos</h2>
                <ul class="text-left mx-7 text-lg text-white">
                    @foreach ($proyectos as $proyecto)
                        <li>
                            <a href="" class="">{{$proyecto->nombre}}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
        <div class="flex-grow">
            @yield('content')
        </div>
    </main>
</body>

</html>
